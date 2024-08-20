<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; 
    protected $fillable = ['umkm_id', 'nama_barang', 'gambar_barang', 'harga_barang'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id'); // Specify the foreign key if different
    }
}