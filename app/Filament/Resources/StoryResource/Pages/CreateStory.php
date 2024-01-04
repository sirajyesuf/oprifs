<?php

namespace App\Filament\Resources\StoryResource\Pages;

use App\Filament\Resources\StoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Filament\Support\Exceptions\Halt;
use App\Enums\PostType;
use App\Enums\PostStatus;
use Filament\Notifications\Notification;
use function Filament\Support\is_app_url;
use Filament\Support\Facades\FilamentView;

class CreateStory extends CreateRecord
{
    protected static string $resource = StoryResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array {

        $data['type'] = PostType::STORIES->value;
        
        return $data;
    }
}
