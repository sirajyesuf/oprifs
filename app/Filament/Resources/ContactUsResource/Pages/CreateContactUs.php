<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\ContactUs;
class CreateContactUs extends CreateRecord
{
    protected static string $resource = ContactUsResource::class;


    protected function authorizeAccess(): void
    {
        abort_unless(static::getResource()::canCreate() && !(ContactUs::first() ? true : false), 403);
    }


    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction()
        ];
    }
}
