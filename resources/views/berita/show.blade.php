<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Desa Jalatrang</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f4f6f9; }
        .navbar { background-color: #1e293b; color: white; padding: 15px 50px; }
        .container { max-width: 900px; margin: 40px auto; background: white; padding: 50px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        
        /* Judul & Info Meta */
        h1 { font-size: 32px; color: #1e293b; margin-bottom: 20px; line-height: 1.3; }
        .meta-info { display: flex; align-items: center; gap: 15px; margin-bottom: 30px; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px; }
        .badge { background: #1e3a8a; color: white; padding: 5px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; }
        .info-text { font-size: 14px; color: #64748b; }

        /* Gambar & Isi Bacaan */
        .gambar-utama { width: 100%; height: 400px; background-color: #cbd5e1; display: flex; align-items: center; justify-content: center; color: #64748b; margin-bottom: 40px; border-radius: 8px; font-size: 18px; }
        .isi-berita { font-size: 16px; color: #334155; line-height: 1.8; text-align: justify; }
        .isi-berita p { margin-bottom: 20px; }
        .tags { margin-top: 30px; font-size: 14px; color: #2563eb; font-weight: bold; }

        .btn-back { display: inline-block; margin-top: 40px; padding: 12px 25px; background: #1e3a8a; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: 0.3s; }
        .btn-back:hover { background: #1e293b; }
    </style>
</head>
<body>

    <div class="navbar">
        <div style="font-size: 18px; font-weight: bold;">PEMERINTAH DESA JALATRANG</div>
    </div>

    <div class="container">
        <!-- Judul Berita -->
        <h1>{{ $berita->judul }}</h1>
        
        <!-- Info Kategori, Tanggal, dan Dilihat -->
        <div class="meta-info">
            <span class="badge">{{ $berita->kategori }}</span>
            <span class="info-text">📅 Dipublikasikan pada: {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</span>
            <span class="info-text">👁 Dilihat: {{ $berita->views }} kali</span>
        </div>
        
        <!-- Gambar -->
        <div class="gambar-utama">
            [ Tempat Gambar Berita - {{ $berita->gambar }} ]
        </div>

        <!-- Isi Bacaan Berita -->
        <div class="isi-berita">
            <p><strong>JalatrangNews</strong> &mdash; {{ $berita->ringkasan }}</p>
            
            <p>Acara ini diselenggarakan dengan penuh semangat oleh seluruh lapisan masyarakat Desa Jalatrang. Kehadiran para tokoh masyarakat, perangkat desa, serta antusiasme warga membuat kegiatan ini berjalan dengan sangat meriah dan lancar.</p>

            <p>Dalam sambutannya, Kepala Desa Jalatrang menyampaikan rasa terima kasih yang sebesar-besarnya kepada seluruh panitia yang telah bekerja keras. "Ini adalah bukti nyata bahwa jika kita bersatu dan bergotong-royong, segala hal yang positif dapat kita wujudkan untuk kemajuan desa kita tercinta," ujarnya.</p>

            <p>Selain kegiatan utama, acara ini juga dimeriahkan dengan berbagai penampilan seni budaya lokal yang menjadi potensi unggulan desa. Hal ini diharapkan dapat menarik perhatian wisatawan sekaligus menjaga kelestarian budaya turun-temurun.</p>
        </div>

        <div class="tags">
            Tags: {{ $berita->tags }}
        </div>

        <a href="{{ url('/') }}" class="btn-back">&larr; Kembali ke Daftar Berita</a>
    </div>

</body>
</html>