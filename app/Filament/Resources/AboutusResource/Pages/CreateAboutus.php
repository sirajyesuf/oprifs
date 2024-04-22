<?php

namespace App\Filament\Resources\AboutusResource\Pages;

use App\Filament\Resources\AboutusResource;
use App\Models\Setting;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutus extends CreateRecord
{
    protected static string $resource = AboutusResource::class;


    protected function authorizeAccess(): void
    {
        abort_unless(static::getResource()::canCreate() && !Setting::canCreateAboutus(), 403);
    }


    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction()
        ];
    }
}
