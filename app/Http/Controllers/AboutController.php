<?php

namespace App\Http\Controllers;

use App\Models\Barang; 
use App\Models\Umkm;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $umkms = Umkm::with('barangs')->take(4)->get(); 
        return view('about', compact('umkms'));
    }
}