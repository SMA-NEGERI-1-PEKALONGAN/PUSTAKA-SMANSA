<?php

namespace App\Filament\Resources\Contents\Schemas;

use App\Models\Menu;
use Filament\Schemas\Schema;
use App\Models\TemplateField;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('menu_id')
            ->label('Menu')
            ->relationship('menu', 'name')
            ->required()
            ->reactive()
            ->afterStateUpdated(fn (callable $set) => $set('fields', null)),

        TextInput::make('title')
            ->label('Content Title')
            ->placeholder('Masukkan Judul Content')
            ->required()
            ->maxLength(255),

        Builder::make('fields')
            ->label('Fields')
            ->blocks(function (callable $get) {
                $menuId = $get('menu_id');
                if (! $menuId) {
                    return [];
                }

                $menu = Menu::with('template')->find($menuId);
                if (! $menu || ! $menu->template) {
                    return [];
                }

                $fields = TemplateField::where('template_id', $menu->template->id)->orderBy('order', 'asc')->get();

                return $fields->map(function ($field) {
                    $meta = $field->meta ?? [];
                    $options = $meta['options'] ?? [];

                    return Builder\Block::make($field->field_name)
                        ->label($field->field_label)
                        ->schema([
                            match ($field->input_type) {
                                'text' => TextInput::make('value'),
                                'textarea' => Textarea::make('value'),
                                'number' => TextInput::make('value')->numeric(),
                                'select' => Select::make('value')->options($options),
                                'file' => FileUpload::make('value')->disk('public'),
                                'date' => DatePicker::make('value'),
                                'boolean' => Toggle::make('value'),
                                'richtext' => RichEditor::make('value'),
                                'email' => TextInput::make('value')->email(),
                                'url' => TextInput::make('value')->url(),
                                'password' => TextInput::make('value')->password(),
                                'color' => ColorPicker::make('value'),
                                'time' => TimePicker::make('value'),
                                'datetime' => DateTimePicker::make('value'),
                                'tags' => TagsInput::make('value'),
                                'markdown' => MarkdownEditor::make('value'),
                                'code' => CodeEditor::make('value'),
                                'hidden' => TextInput::make('value')->hidden(),
                                'array' => Repeater::make('value')->schema([TextInput::make('item')]),
                                'json' => JsonEditor::make('value'),
                                default => TextInput::make('value'),
                            },
                        ]);
                })->toArray();
            })
            ->columnSpanFull()
            ->dehydrated(true),
        ]);
    }
}