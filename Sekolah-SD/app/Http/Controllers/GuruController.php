<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    // Menampilkan form tambah guru
    public function create()
    {
        return view('guru.create');
    }

    // Menyimpan data guru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:gurus,nip',
            'email' => 'required|email|unique:gurus,email',
            'telepon' => 'required|string|max:15',
            'mapel' => 'required|string|max:255'
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan!');
    }
}
