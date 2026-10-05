<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Komentar;

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

    // Fungsi untuk menampilkan berita selengkapnya (Menggunakan Route Model Binding)
    public function show(Berita $berita)
    {
        // Memuat relasi komentar
        $berita->load('komentars');
        
        // Tambah angka penonton/views setiap kali di-klik
        $berita->increment('views');

        // Mengambil daftar berita lain untuk ditampilkan di sidebar (Berita Terkait)
        $beritaTerkait = Berita::where('id', '!=', $berita->id)->latest()->take(5)->get();

        return view('berita.show', compact('berita', 'beritaTerkait'));
    }

    // Fungsi untuk memunculkan halaman form tambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Fungsi untuk menangkap data dari form dan menyimpannya ke database
    public function store(Request $request)
    {
        // Menyimpan data ke database
        Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => date('Y-m-d'), // Mengisi tanggal hari ini otomatis
            'ringkasan' => $request->ringkasan,
            'tags' => $request->tags,
            'gambar' => 'default.jpg',
            'views' => 0
        ]);

        // Mengalihkan kembali ke halaman utama setelah sukses menyimpan (Mencegah Double Submit)
        return redirect('/');
    }

    // Fungsi untuk menyimpan komentar
    public function storeKomentar(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'pesan' => 'required',
            'captcha' => 'required|numeric'
        ]);

        // Validasi jawaban captcha sederhana (6 + 6 = 12)
        if ($request->captcha != 12) {
            return back()->withErrors(['captcha' => 'Jawaban pertanyaan keamanan salah!'])->withInput();
        }

        Komentar::create([
            'berita_id' => $id,
            'nama' => $request->nama,
            'email' => $request->email,
            'hp' => $request->hp,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }
}