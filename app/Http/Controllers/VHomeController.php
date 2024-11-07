<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class VHomeController extends Controller
{
    public function index()
    {
        // Ambil data informasi
        $informasi = Informasi::all(); // Atau Informasi::with('kategori')->get(); jika ada relasi
        
        // Kirim data ke view welcome.blade.php
        return view('welcome', compact('informasi'));
    }
    
    
}
