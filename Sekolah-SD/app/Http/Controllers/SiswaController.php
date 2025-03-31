<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Menampilkan daftar siswa
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    // Menampilkan form tambah siswa
    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan data siswa baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|unique:siswas',
            'email' => 'required|email|unique:siswas',
            'telepon' => 'required|string|max:15',
            'kelas' => 'required|string|max:10',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }
}
