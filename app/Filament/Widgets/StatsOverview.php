<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Document;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Program;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Document', Document::count())
            ->description('our documentes'),
            Stat::make('Total Gallery', Gallery::count())
            ->description('our photos'),
            Stat::make('Total News', News::News()->count())
            ->description('our news'),
            Stat::make('Total Story', News::Story()->count())
            ->description('our stories'),
        ];
    }
}
