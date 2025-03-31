<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus'; // Nama tabel

    protected $fillable = [
        'nama', 'nip', 'email', 'telepon', 'mapel'
    ];
}
