<?php
namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Models\Barang;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn; 
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    public static function getLabel(): string
    {
        return 'Barang';
    }

    public static function getPluralLabel(): string
    {
        return 'Daftar Barang'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('umkm_id')
                    ->relationship('umkm', 'nama_umkm')
                    ->required(),
                TextInput::make('nama_barang') 
                    ->label('Nama Barang')
                    ->required(),
                FileUpload::make('gambar_barang')
                    ->required(),
                TextInput::make('harga_barang')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('nama_barang')
            ->label('Nama Barang'), 
        ImageColumn::make('gambar_barang') 
            ->label('Image') 
            ->size(100),
        TextColumn::make('harga_barang') 
            ->label('Harga Barang'), 
    ])
    ->filters([
    ]);
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
