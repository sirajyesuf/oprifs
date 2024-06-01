<?php

namespace App\Filament\Resources;

use App\Enums\PartnerType;
use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Pages\Page;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-c-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')
                ->required()
                ->image()
                ->directory('partners')
                ->columnSpanFull(),
                Forms\Components\TextInput::make('website')
                ->url()
                ->required(),
                Forms\Components\Select::make('type')
                ->options(PartnerType::getKeyValueArray())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                ->label('Picture'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('type')
                ->badge()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewPartner::class,
            Pages\EditPartner::class
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'view' => Pages\ViewPartner::route('/{record}'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
