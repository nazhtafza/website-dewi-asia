<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function show()
    {
        $umkms = UMKM::with('barangs')->get(); 
        return view('umkm', compact('umkms'));
    }
    public function details($id)
    {
        $umkm = UMKM::with('barangs')->findOrFail($id); // Get the UMKM and its associated barang
        return view('umkmdetails', compact('umkm'));
    }
}
