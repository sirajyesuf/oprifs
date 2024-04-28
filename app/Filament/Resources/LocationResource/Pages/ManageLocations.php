<?php

namespace App\Filament\Resources\LocationResource\Pages;

use App\Filament\Resources\LocationResource;
use App\Models\Location;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Setting;

class ManageLocations extends ManageRecords
{
    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->hidden(Location::first() ? true : false),  
        ];
    }
}
