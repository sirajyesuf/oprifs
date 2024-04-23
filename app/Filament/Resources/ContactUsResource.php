<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Filament\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'ContactUs';
    protected static ?string $modelLabel = 'ContactUs';
    protected static ?string $pluralModelLabel = 'ContactUs';

    protected static ?string $navigationGroup = 'Settings';


    public static function form(Form $form): Form
    {
        
        return $form
            ->schema([
                Forms\Components\Section::make('Social media Links')
                ->schema([
                    Forms\Components\TextInput::make('facebook')
                    ->required(),
                    Forms\Components\TextInput::make('youtube')
                    ->required(),
                    Forms\Components\TextInput::make('linkedin')
                    ->required(),
                    Forms\Components\TextInput::make('instagram')
                    ->required()
                ])->columnSpan(2),
                Forms\Components\Section::make('Contact Us')
                ->schema([
                    Forms\Components\TextInput::make('phone_number')
                    ->required(),
                    Forms\Components\TextInput::make('email')
                    ->required()
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('youtube'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('linkedin'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone_number')
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
            'index' => Pages\ListContactUs::route('/'),
            'create' => Pages\CreateContactUs::route('/create'),
            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }
}
