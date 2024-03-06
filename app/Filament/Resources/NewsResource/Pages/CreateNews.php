<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Enums\PostType;
use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['type'] = PostType::NEWS->value;

        return $data;
    }
}
