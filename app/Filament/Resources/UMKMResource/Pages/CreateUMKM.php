<?php

namespace App\Filament\Resources\UMKMResource\Pages;

use App\Filament\Resources\UMKMResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use PhpParser\Node\Stmt\Label;

class CreateUMKM extends CreateRecord
{
    protected static string $resource = UMKMResource::class;
    public function getTitle(): string | Htmlable
    {
        return __('Tambah UMKM');
    }
    
    public function getBreadcrumb(): string
    {
        return static::$breadcrumb ?? __('Tambah UMKM');
    }

}
