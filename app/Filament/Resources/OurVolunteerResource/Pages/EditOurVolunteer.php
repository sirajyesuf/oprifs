<?php

namespace App\Filament\Resources\OurVolunteerResource\Pages;

use App\Filament\Resources\OurVolunteerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurVolunteer extends EditRecord
{
    protected static string $resource = OurVolunteerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
