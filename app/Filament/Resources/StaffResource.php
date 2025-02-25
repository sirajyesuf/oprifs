<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\Staff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = "heroicon-c-user-group";
    protected static ?string $navigationLabel = "Our Team";
    protected static ?string $modelLabel = "Our Team";
    protected static ?string $pluralModelLabel = "Our Teams";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make("full_name")
                ->required()
                ->maxLength(255)
                ->columnSpan(2),
            Forms\Components\TextInput::make("position")
                ->required()
                ->maxLength(255)
                ->columnSpan(2),
            Forms\Components\Select::make('category')
            ->options([
                Staff::BOARD_MEMBER => 'Board Member',
                Staff::MANAGEMENT_MEMBER => 'Management Member'
            ])
            ->columnSpan(2),
   
            Forms\Components\FileUpload::make("picture")
            ->required()
            ->image()
            ->directory("staff")
            ->image()
            ->imageEditor()
            ->columnSpan(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("full_name")->searchable(),
                Tables\Columns\TextColumn::make("position")->searchable(),
                Tables\Columns\TextColumn::make("category")->searchable(),
                Tables\Columns\ImageColumn::make("picture")->searchable(),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
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
            "index" => Pages\ListStaff::route("/"),
            "create" => Pages\CreateStaff::route("/create"),
            "edit" => Pages\EditStaff::route("/{record}/edit"),
        ];
    }
}
