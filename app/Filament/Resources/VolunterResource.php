<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VolunterResource\Pages;
use App\Models\Volunter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VolunterResource extends Resource
{
    protected static ?string $model = Volunter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVolunters::route('/'),
            'create' => Pages\CreateVolunter::route('/create'),
            'edit' => Pages\EditVolunter::route('/{record}/edit'),
        ];
    }
}
