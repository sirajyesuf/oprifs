<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Setting;

class CreateContactUs extends CreateRecord
{
    protected static string $resource = ContactUsResource::class;


    protected function authorizeAccess(): void
    {
        abort_unless(static::getResource()::canCreate() && !Setting::canCreateContactUs(), 403);
    }


    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction()
        ];
    }
}
