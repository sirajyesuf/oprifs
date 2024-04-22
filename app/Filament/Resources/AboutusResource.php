<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutusResource\Pages;
use App\Filament\Resources\AboutusResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutusResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-s-building-office';


    protected static ?string $navigationLabel = 'Aboutus';
    protected static ?string $modelLabel = 'Aboutus';
    protected static ?string $pluralModelLabel = 'Aboutus';

    protected static ?string $navigationGroup = 'Settings';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('aboutus')
                ->columnSpanFull()
                ->rows(5),

                Forms\Components\Textarea::make('vission')
                ->rows(5),

                Forms\Components\Textarea::make('mission')
                ->rows(5),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('aboutus'),
                Tables\Columns\TextColumn::make('mission'),
                Tables\Columns\TextColumn::make('vission')
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
            'index' => Pages\ListAboutuses::route('/'),
            'create' => Pages\CreateAboutus::route('/create'),
            'edit' => Pages\EditAboutus::route('/{record}/edit'),
        ];
    }
}
