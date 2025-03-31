<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        // Hitung jumlah guru dan siswa
        $jumlah_guru = Guru::count();
        $jumlah_siswa = Siswa::count();
        $berita = Berita::latest()->get();

        // Kirim data ke view home.blade.php
        return view('home', compact('jumlah_guru', 'jumlah_siswa', 'berita'));
    }

    
}
