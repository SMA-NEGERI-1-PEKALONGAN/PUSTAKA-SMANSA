<?php

namespace App\Filament\Resources\MainMenus\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MainMenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->label('Menu Name')
                    ->placeholder('Masukkan nama menu')
                    ->autofocus(),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Slug')
                    ->placeholder('Masukkan slug menu'),
                TextInput::make('order')
                    ->label('Order')
                    ->placeholder('Masukkan urutan menu')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('menu_type')
                    ->label('Menu Type')
                    ->options(['multiple' => 'Multiple', 'single' => 'Single'])
                    ->default('multiple')
                    ->required(),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}