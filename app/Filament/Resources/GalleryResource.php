<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;


class GalleryResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $pluralLabel = 'Galeri Kegiatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Foto')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('galeri')
                    ->imagePreviewHeight('200')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->date('d M Y'),
            ])
            ->actions([
                EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
