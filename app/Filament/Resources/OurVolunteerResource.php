<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurVolunteerResource\Pages;
use App\Filament\Resources\OurVolunteerResource\RelationManagers;
use App\Models\OurVolunteer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurVolunteerResource extends Resource
{
    protected static ?string $model = OurVolunteer::class;

    protected static ?string $navigationIcon = 'heroicon-s-trophy';
    protected static ?string $navigationGroup = 'Volunteers';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->image()
                ->required()
                ->columnSpanFull(),
                Forms\Components\TextInput::make('full_name')
                ->required(),
                Forms\Components\TextInput::make('occupation')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('occupation'),
                Tables\Columns\ImageColumn::make('image')
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
            'index' => Pages\ListOurVolunteers::route('/'),
            'create' => Pages\CreateOurVolunteer::route('/create'),
            'edit' => Pages\EditOurVolunteer::route('/{record}/edit'),
        ];
    }
}
