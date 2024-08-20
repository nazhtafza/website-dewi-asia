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
}
