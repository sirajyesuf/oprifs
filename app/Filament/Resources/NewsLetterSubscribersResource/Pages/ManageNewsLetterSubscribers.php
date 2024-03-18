<?php

namespace App\Filament\Resources\NewsLetterSubscribersResource\Pages;

use App\Filament\Resources\NewsLetterSubscribersResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNewsLetterSubscribers extends ManageRecords
{
    protected static string $resource = NewsLetterSubscribersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
