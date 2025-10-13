<?php

namespace App\Filament\Resources\Templates\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Schemas\Components\Grid;

class TemplateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Template Information')
                ->schema([
                    TextInput::make('name')
                        ->label('Template Name')
                        ->helperText('Gunakan nama unik untuk template (misal: post, page, etc.)')
                        ->placeholder('Masukkan nama template')
                        ->required(),
                    Textarea::make('description')
                        ->label('Description')
                        ->placeholder('Masukkan deskripsi singkat tentang template')
                        ->rows(2),
                    Toggle::make('status')  
                        ->label('Active')
                        ->default(true),
                    ])->columns(2),
                    Section::make('Template Fields')
                        ->description('Tambahkan field dinamis untuk template ini.')
                        ->schema([
                    Repeater::make('fields')
                        ->relationship('fields')
                        ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('field_name')
                            ->label('Field Name')
                            ->placeholder('Masukkan nama field')
                            ->helperText('Gunakan nama unik untuk field (misal: title, description)')
                            ->required(),
                        TextInput::make('field_label')
                            ->label('Label Field')
                            ->placeholder('Masukkan label field')
                            ->required(),
                    ]),
                    
                    Grid::make(2)->schema([
                        Select::make('input_type')
                        ->label('Input Type')
                        ->options([
                            'text' => 'Text',
                            'textarea' => 'Textarea',
                            'number' => 'Number',
                            'select' => 'Select',
                            'file' => 'File Upload',
                            'date' => 'Date',
                            'boolean' => 'Toggle (Yes/No)',
                            'richtext' => 'Rich Text Editor',
                            'email' => 'Email',
                            'url' => 'URL',
                            'password' => 'Password',
                            'color' => 'Color Picker',
                            'time' => 'Time Picker',
                            'datetime' => 'Date & Time Picker',
                            'tags' => 'Tags Input',
                            'markdown' => 'Markdown Editor',
                            'code' => 'Code Editor',
                            'hidden' => 'Hidden Field',
                            'array' => 'Array Input',
                            'json' => 'JSON Input',
                            ])
                         ->required(),
                    Toggle::make('is_required')
                        ->label('Required Field')
                        ->default(false),
                    ]),
                    
                    TextInput::make('order')
                        ->numeric()
                        ->default(0)
                        ->label('Order'),
                    Textarea::make('meta')
                        ->label('Meta / Options (JSON)')
                        ->rows(2)
                        ->helperText('Gunakan format JSON untuk opsi tambahan, misalnya daftar opsi select. Contoh: {"options": {"key1": "Label 1", "key2": "Label 2"}}')
                        ->dehydrateStateUsing(fn($state) => json_decode($state, true))
                        ->afterStateHydrated(fn($component, $state) => $component->state(json_encode($state, JSON_PRETTY_PRINT))),
                    ])
                    ->orderable('order')
                    ->collapsible()
                    ->createItemButtonLabel('Add New Field'),
                    ]),
            ]);
    }
}