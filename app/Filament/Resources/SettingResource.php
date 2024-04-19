<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Social media')
                ->description('lorem')
                ->schema([
                    Forms\Components\TextInput::make('facebook'),
                    Forms\Components\TextInput::make('youtube'),
                    Forms\Components\TextInput::make('linkedin'),
                    Forms\Components\TextInput::make('instagram')
                ])->columnSpan(2),
                Forms\Components\Section::make('ContacUS')
                ->description('lorem')
                ->schema([
                    Forms\Components\TextInput::make('phone_number'),
                    Forms\Components\TextInput::make('email')
                ])
                ->columnSpan(1),
                Forms\Components\Section::make('Location')
                ->description('lorem')
                ->schema([
                    Forms\Components\TextInput::make('location'),
                    Forms\Components\TextInput::make('iframe'),
                ])->columnSpan(2),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}

// 2M3V+CQ6, Addis Ababa
// 9.007134162092951, 38.69406734700985
// https://maps.app.goo.gl/ATYFr1BvNnECJSR96
// <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126101.82769239141!2d38.780928!3d9.0013696!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8701dafe56fb%3A0x89dd6eeab3bc4f7!2zVGVxd2EgTW9zcXVlIHwgQmV0aGVsIHwg4Ymw4YmF4YuLIOGImOGIteGMguGLtSB8IOGJpOGJsOGIjQ!5e0!3m2!1sen!2set!4v1713171963948!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>