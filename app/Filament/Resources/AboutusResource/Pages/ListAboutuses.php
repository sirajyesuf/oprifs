<?php

namespace App\Filament\Resources\AboutusResource\Pages;

use App\Filament\Resources\AboutusResource;
use App\Models\Setting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListAboutuses extends ListRecords
{
    protected static string $resource = AboutusResource::class;

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
        ->whereNotNull('aboutus')
        ->whereNotNull('mission')
        ->whereNotNull('vission');

    }



}
