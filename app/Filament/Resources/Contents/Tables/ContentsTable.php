<?php

namespace App\Filament\Resources\Contents\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class ContentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('menu.name')->label('Menu'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('created_at')->dateTime('d M Y'),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('menu_id')
                    ->relationship('menu', 'name')
                    ->label('Menu')
                    ->searchable()
                    ->placeholder('Pilih Menu'),
            ])
            
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}