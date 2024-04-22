<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CauseResource\Pages;
use App\Filament\Resources\CauseResource\RelationManagers;
use App\Models\Cause;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CauseResource extends Resource
{
    protected static ?string $model = Cause::class;

    protected static ?string $navigationIcon = 'heroicon-m-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->maxLength(255)
                ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

            Forms\Components\TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->required()
                ->maxLength(255)
                ->unique(Cause::class, 'slug', ignoreRecord: true),

                Forms\Components\FileUpload::make('thumbnail')
                ->image()
                ->imageEditor()
                ->imageResizeTargetWidth('587')
                ->imageResizeTargetHeight('386')
                ->columnSpanFull(),
                Forms\Components\Textarea::make('goal')
                ->columnSpanFull()
                ->rows(4),
                Forms\Components\Textarea::make('description')
                ->columnSpanFull()
                ->label('Details about the cause')
                ->rows(10)

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
            'index' => Pages\ListCauses::route('/'),
            'create' => Pages\CreateCause::route('/create'),
            'edit' => Pages\EditCause::route('/{record}/edit'),
        ];
    }
}
