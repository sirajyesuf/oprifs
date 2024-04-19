<?php

namespace App\Filament\Resources\OurVolunteerResource\Pages;

use App\Filament\Resources\OurVolunteerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurVolunteers extends ListRecords
{
    protected static string $resource = OurVolunteerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
