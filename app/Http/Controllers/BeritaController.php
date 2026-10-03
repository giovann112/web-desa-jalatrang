<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Fungsi untuk halaman utama (sekaligus menangani filter/pencarian)
    public function index(Request $request)
    {
        $query = Berita::query();

        // Jika user mengisi kolom pencarian (Kata Kunci)
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('ringkasan', 'like', '%' . $request->search . '%');
        }

        // Jika user memilih Kategori (selain 'Semua Kategori')
        if ($request->filled('kategori') && $request->kategori != 'Semua Kategori') {
            $query->where('kategori', $request->kategori);
        }

        // Ambil data hasil filter
        $berita = $query->get(); 
        
        return view('berita.index', compact('berita'));
    }

    // Fungsi untuk menampilkan berita selengkapnya (berdasarkan ID)
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Cari berita berdasarkan ID
        
        // (Opsional) Tambah angka penonton/views setiap kali di-klik
        $berita->increment('views');

        return view('berita.show', compact('berita'));
    }
}