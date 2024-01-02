<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                ->schema([

                    Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                        ->required()
                        ->live(onBlur:true)
                        ->maxLength(255)
                        ->afterStateUpdated(fn(string $operation,$state,Forms\Set $set) => $operation === 'create' ? $set('slug',Str::slug($state)) :  null),


                        Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->dehydrated()
                        ->required()
                        ->maxLength(255)
                        ->unique(News::class, 'slug', ignoreRecord: true),


                        Forms\Components\MarkdownEditor::make('content')
                        ->required()
                        ->columnSpan('full')


                    ])->columns(2)


                ])
                ->columnSpan(['lg' => 2]),
            
            Forms\Components\Group::make()
            ->schema([

                Forms\Components\Section::make()
                ->schema([
                    Forms\Components\FileUpload::make('cover_image')
                    ->label('Cover Image')
                    ->directory('coverimages')
                    ->image()
                    ->imageEditor(),
                    // Forms\Components\Section::make('')
                    // ->schema([

                    //     Forms\Components\TextInput::make('seo_description'),
                    //     Forms\Components\TextInput::make('seo_title'),
                    // ]),
                ])
            ])
        ])
        ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                ->label('Cover Image'),
                Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                ->sortable()
                ->searchable()
                ->toggleable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                ->slideOver(),
                Tables\Actions\EditAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
