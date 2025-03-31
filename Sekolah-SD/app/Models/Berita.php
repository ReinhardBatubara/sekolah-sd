<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'konten', 'gambar']; // Sesuaikan dengan tabel berita

    protected $dates = ['created_at', 'updated_at']; // Jika ingin format tanggal otomatis
}
