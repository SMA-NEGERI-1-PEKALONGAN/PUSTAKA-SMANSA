<?php

namespace App\Filament\Resources\MainMenus\RelationManagers;

use Filament\Forms;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\MainMenus\MainMenuResource;
use Filament\Resources\RelationManagers\RelationManager;

class MenusRelationManager extends RelationManager
{
    protected static string $relationship = 'Menus';

    // protected static ?string $relatedResource = MainMenuResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->label('Nama Menu')
                        ->placeholder('Masukkan nama menu')
                        ->required()
                        ->maxLength(100)
                        ->reactive()
                        // add debounce 1000ms
                        ->live(debounce: 2000)
                        ->afterStateUpdated(function ($state, callable $set) {
                            // hapus karakter selain huruf, angka, dan spasi
                            $slug = preg_replace('/[^a-zA-Z0-9\s]/', '', $state);
                            // ganti spasi dengan tanda hubung
                            $slug = str_replace(' ', '-', $slug);
                            // hapus -- ganda
                            $slug = preg_replace('/-+/', '-', $slug);
                            // ubah ke huruf kecil
                            $slug = strtolower($slug);
                        
                            // set to text input slug
                            $set('slug', $slug);
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->placeholder('otomatis terisi dari nama menu')
                        ->required()
                        ->readOnly()
                        ->unique(ignoreRecord: true),
                ]),
                Select::make('template_id')
                    ->label('Template')
                    ->relationship('Template', 'name')
                    
                    ->required(),
                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->label('Urutan'),
                Select::make('content_type')
                    ->options([
                        'single' => 'Single',
                        'multiple' => 'Multiple',
                    ])
                    ->label('Tipe Konten')
                    ->required(),
                Toggle::make('status')
                    ->label('Aktif')
                    ->default(true),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Masukkan deskripsi menu')
                    ->rows(2)
                    ->maxLength(255),
            ]);
    }
    
    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make()
                    ->label('Tambah Menu')
                    // jika type main_menu single, batasi hanya 1 menu yang boleh dibuat
                    // ->visible(fn (RelationManager $livewire): bool => $livewire->ownerRecord->menu_type !== 'single')
                    // ->form(fn (RelationManager $livewire): Schema => $livewire->form(Schema::make())),
            ])
            ->columns([
                TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('template.name')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('content_type')
                    ->badge(),
                IconColumn::make('status')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    
}