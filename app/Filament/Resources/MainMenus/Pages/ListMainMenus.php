<?php

namespace App\Filament\Resources\MainMenus\Pages;

use App\Filament\Resources\MainMenus\MainMenuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMainMenus extends ListRecords
{
    protected static string $resource = MainMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
