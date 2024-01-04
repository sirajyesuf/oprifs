<?php

namespace App\Filament\Resources\StoryResource\Pages;

use App\Filament\Resources\StoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewStory extends ViewRecord
{
    protected static string $resource = StoryResource::class;

    public function getTitle(): string | Htmlable
    {
        return $this->record->title;
    }

    protected function getActions(): array
    {
        return [];
    }

}
