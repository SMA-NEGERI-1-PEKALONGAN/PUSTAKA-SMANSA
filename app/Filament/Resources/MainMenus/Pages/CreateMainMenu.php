<?php

namespace App\Filament\Resources\MainMenus\Pages;

use App\Filament\Resources\MainMenus\MainMenuResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMainMenu extends CreateRecord
{
    protected static string $resource = MainMenuResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}