<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;



class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench';

   public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_layanan')
                    ->label('Nama Layanan')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Layanan')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                FileUpload::make('icon')
                    ->label('Icon / Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->imagePreviewHeight('80')
                    ->columnSpanFull()
                    ->live(false),
            ]);
    }

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('nama_layanan')
                ->label('Nama Layanan')
                ->searchable()
                ->sortable(),

            TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(50),

            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y')
                ->sortable(),
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


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
