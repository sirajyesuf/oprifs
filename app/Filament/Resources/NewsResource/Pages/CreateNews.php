<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Enums\PostType;
use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['type'] = PostType::NEWS->value;
        $data['author_id'] = Auth()->user()->id;

        return $data;
    }
}
