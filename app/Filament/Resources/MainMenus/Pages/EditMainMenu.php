<?php

namespace App\Filament\Resources\MainMenus\Pages;

use App\Filament\Resources\MainMenus\MainMenuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMainMenu extends EditRecord
{
    protected static string $resource = MainMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // reload edit page
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }
}