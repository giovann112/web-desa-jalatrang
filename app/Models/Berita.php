<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Menambahkan $fillable agar form diizinkan mengisi kolom-kolom ini ke database
    protected $fillable = ['judul', 'kategori', 'tanggal', 'ringkasan', 'gambar', 'views', 'tags'];

    // Relasi ke tabel Komentar (Satu berita bisa memiliki banyak komentar)
    public function komentars()
    {
        return $this->hasMany(Komentar::class, 'berita_id');
    }
}