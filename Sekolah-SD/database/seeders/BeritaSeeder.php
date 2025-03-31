<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Berita Pertama',
            'isi' => 'Ini adalah isi berita pertama.',
        ]);

        Berita::create([
            'judul' => 'Berita Kedua',
            'isi' => 'Ini adalah isi berita kedua.',
        ]);
    }
}

