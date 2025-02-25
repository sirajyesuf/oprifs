<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Staff; 

class ListStaff extends ListRecords
{
    protected static string $resource = StaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

public function getTabs(): array
{
    return [
        'all' => Tab::make(),
        'Board Members' => Tab::make()
            ->modifyQueryUsing(fn (Builder $query) => $query->where('category', Staff::BOARD_MEMBER)),
        'Management Members' => Tab::make()
            ->modifyQueryUsing(fn (Builder $query) => $query->where('category', Staff::MANAGEMENT_MEMBER)),
    ];
}
}
