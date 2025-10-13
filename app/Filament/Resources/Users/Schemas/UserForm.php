<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->label('ID User')
                    ->hidden(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama User')
                    ->placeholder('Masukan Nama User'),
                TextInput::make('email')
                    ->required()
                    ->maxLength(255)
                    ->label('Email User')
                    ->placeholder('Masukan Email User')
                    ->email()
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => !empty($state) ? bcrypt($state) : null)
                    ->dehydrated(fn ($state) => filled($state)) 
                    ->label('Password User')
                    ->placeholder('Masukan Password User')
                    ->required(fn (string $context) => $context === 'create'),
                TextInput::make('password_confirmation')
                    ->maxLength(255)
                    ->label('Konfirmasi Password User')
                    ->placeholder('Masukan Konfirmasi Password User')
                    ->hiddenOn('edit')
                    ->required(fn (string $context): bool => $context === 'create')
                    ->same('password')
                    ->password(),
                FileUpload::make('avatar')
                    ->image()
                    ->label('Avatar User')
                    ->placeholder('Masukan Avatar User')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(1024)
                    ->directory('avatars')
                    ->required()
            ]);
    }
}