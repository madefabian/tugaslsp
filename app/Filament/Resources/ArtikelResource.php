<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

   public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('judul')
                ->label('Judul Artikel')
                ->required()
                ->live(onBlur: true)
                ->maxLength(255),

            FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->directory('artikel')
                ->imagePreviewHeight('150'),

            RichEditor::make('konten')
                ->label('Konten Artikel')
                ->required()
                ->columnSpanFull(),

            TextInput::make('penulis')
                ->label('Penulis')
                ->default('Admin'),

            DateTimePicker::make('published_at')
                ->label('Tanggal Publish')
                ->helperText('Kosongkan jika belum dipublish'),
        ]);
}

   public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('judul')
                ->label('Judul')
                ->searchable()
                ->sortable()
                ->limit(30),

            TextColumn::make('penulis')
                ->label('Penulis')
                ->default('Admin'),

            TextColumn::make('published_at')
                ->label('Publish')
                ->dateTime('d M Y')
                ->sortable()
                ->badge()
                ->color(fn ($state) => $state ? 'success' : 'gray'),
        ])
        ->defaultSort('created_at', 'desc')
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


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
