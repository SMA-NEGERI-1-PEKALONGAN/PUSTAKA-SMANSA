<?php

namespace App\Filament\Resources\MainMenus;

use BackedEnum;
use App\Models\MainMenu;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\MainMenus\Pages\EditMainMenu;
use App\Filament\Resources\MainMenus\Pages\ListMainMenus;
use App\Filament\Resources\MainMenus\Pages\CreateMainMenu;
use App\Filament\Resources\MainMenus\Schemas\MainMenuForm;
use App\Filament\Resources\MainMenus\Tables\MainMenusTable;
use UnitEnum;

class MainMenuResource extends Resource
{
    protected static ?string $model = MainMenu::class;
    protected static string | UnitEnum | null $navigationGroup = 'Settings';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?int $navigationSort = 2;
    protected static ?string $recordTitleAttribute = 'MainMenu';

    public static function form(Schema $schema): Schema
    {
        return MainMenuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MainMenusTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\MenusRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMainMenus::route('/'),
            'create' => CreateMainMenu::route('/create'),
            'edit' => EditMainMenu::route('/{record}/edit'),
        ];
    }
}