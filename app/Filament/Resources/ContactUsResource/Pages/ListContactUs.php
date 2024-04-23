<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;

class ListContactUs extends ListRecords
{
    protected static string $resource = ContactUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->hidden(Setting::canCreateAboutus()),
        ];
    }


    protected function getTableQuery(): ?Builder
    {
        return static::getResource()::getEloquentQuery()
        ->whereNotNull('phone_number')
        ->whereNotNull('email')
        ->whereNotNull('facebook')
        ->whereNotNull('youtube')
        ->whereNotNull('linkedin')
        ->whereNotNull('instagram');

    }

}
