<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsLetterSubscribersResource\Pages;
use App\Filament\Resources\NewsLetterSubscribersResource\RelationManagers;
use App\Models\NewsLetterSubscriber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsLetterSubscribersResource extends Resource
{
    protected static ?string $model = NewsLetterSubscriber::class;

    protected static ?string $navigationLabel = 'NewsLetter';

    protected static ?string $navigationIcon = 'fontisto-email';

    protected static ?string $navigationGroup = 'Subscribers';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                ->label('email address')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageNewsLetterSubscribers::route('/'),
        ];
    }
}
