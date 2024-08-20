<?php

namespace App\Filament\Resources\BarangResource\Pages;

use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;


class CreateBarang extends CreateRecord
{
    
    public function getTitle(): string | Htmlable
    {
        return __('Tambah Barang');
    }
    public function getBreadcrumb(): string
    {
        return static::$breadcrumb ?? __('Tambah Barang');
    }

    
    protected static string $resource = BarangResource::class;
}
