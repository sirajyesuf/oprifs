<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use App\Filament\Resources\TestimonialResource;
use Filament\Infolists\Components;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewTestimonial extends ViewRecord
{
    protected static string $resource = TestimonialResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\ImageEntry::make('path')
                    ->label('Picture'),
                Components\TextEntry::make('name'),
                Components\TextEntry::make('job'),
                Components\TextEntry::make('content')
                    ->label('Testimonial'),
            ])
            ->columns(1);

    }
}
