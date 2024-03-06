<?php

namespace App\Filament\Resources\StoryResource\Pages;

use App\Enums\PostType;
use App\Filament\Resources\StoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStory extends CreateRecord
{
    protected static string $resource = StoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['type'] = PostType::STORIES->value;

        return $data;
    }
}
