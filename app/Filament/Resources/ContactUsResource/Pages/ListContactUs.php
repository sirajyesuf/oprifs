<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use App\Models\ContactUs;
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
            ->hidden(ContactUs::first() ? true : false),
        ];
    }

}
