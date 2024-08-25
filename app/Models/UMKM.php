<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    protected $table = 'umkms';
    protected $fillable = ['nama_umkm', 'nomor_umkm','description'];

    public function barangs()
    {
        return $this->hasMany(Barang::class, 'umkm_id'); // Specify the foreign key if different
    }
}