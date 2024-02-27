<?php

namespace App\Filament\Resources\VolunterResource\Pages;

use App\Filament\Resources\VolunterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVolunters extends ListRecords
{
    protected static string $resource = VolunterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
