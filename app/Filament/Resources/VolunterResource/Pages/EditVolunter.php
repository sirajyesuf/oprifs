<?php

namespace App\Filament\Resources\VolunterResource\Pages;

use App\Filament\Resources\VolunterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVolunter extends EditRecord
{
    protected static string $resource = VolunterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
