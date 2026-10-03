<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Malam Penuh Gengsi Dimulai!',
            'kategori' => 'Olahraga',
            'tanggal' => '2026-09-26',
            'ringkasan' => 'Malam penuh gengsi dimulai dengan berbagai kegiatan...',
            'gambar' => 'gambar1.jpg',
            'views' => 311,
            'tags' => '#cikandung #dusun #2026'
        ]);

        Berita::create([
            'judul' => 'Jejak Inspiratif Elsa Nuari Hardiana: Srikandi Multitalenta di Balik P...',
            'kategori' => 'Pendidikan',
            'tanggal' => '2026-09-24',
            'ringkasan' => 'JalatrangNews&mdash; Ada perempuan yang memilih bekerja dalam diam, namun jejak pengabdian...',
            'gambar' => 'gambar2.jpg',
            'views' => 116,
            'tags' => '#desa #elsa #jalatrang'
        ]);
    }
}