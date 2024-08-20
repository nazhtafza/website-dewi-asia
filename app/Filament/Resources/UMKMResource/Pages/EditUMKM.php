<?php

namespace App\Filament\Resources\UMKMResource\Pages;

use App\Filament\Resources\UMKMResource;
use Filament\Actions;
use Illuminate\Contracts\Support\Htmlable;

use Filament\Resources\Pages\EditRecord;

class EditUMKM extends EditRecord
{
    protected static string $resource = UMKMResource::class;
    public function getBreadcrumb(): string
    {
        return static::$breadcrumb ?? __('Edit UMKM');
    }
    public function getTitle(): string | Htmlable
    {
        return __('Edit UMKM');
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
