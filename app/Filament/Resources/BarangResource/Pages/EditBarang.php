<?php

namespace App\Filament\Resources\BarangResource\Pages;

use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;


class EditBarang extends EditRecord
{
    protected static string $resource = BarangResource::class;

    public function getBreadcrumb(): string
    {
        return static::$breadcrumb ?? __('Edit Barang');
    }
    public function getTitle(): string | Htmlable
    {
        return __('Edit Barang');
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
