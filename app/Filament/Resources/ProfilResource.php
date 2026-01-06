<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Models\Profil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;



class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

   public static function form(Form $form): Form
{
    return $form
        ->schema([
            FileUpload::make('logo')
                ->image()
                ->disk('public')
                ->directory('logo')
                ->acceptedFileTypes(['image/png', 'image/jpeg'])
                ->columnSpanFull()
                ->live(false),
                


            TextInput::make('nama_perusahaan')
                ->label('Nama Perusahaan')
                ->required()
                ->maxLength(255),

            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->rows(4)
                ->columnSpanFull(),

            Textarea::make('alamat')
                ->label('Alamat')
                ->rows(3)
                ->required(),

            TextInput::make('telepon')
                ->label('Telepon')
                ->tel()
                ->required(),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),
        ]);
}
    public static function table(Table $table): Table
{
    return $table
        ->columns([
            // imageColumn::make('logo')
            //     ->label('Logo')
            //     ->square()
            //     ->height(50)
            //     ->width(50),
                
            TextColumn::make('nama_perusahaan')
                ->label('Nama Perusahaan')
                ->searchable()
                ->sortable(),

            TextColumn::make('alamat')
                ->label('Alamat')
                ->limit(30),

            TextColumn::make('telepon')
                ->label('Telepon'),

            TextColumn::make('email')
                ->label('Email'),

            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y')
                ->sortable(),
        ])
       ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([]);
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
            'index' => Pages\ListProfils::route('/'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
{
    return false;
}

public static function canDeleteAny(): bool
{
    return false;
}

}
