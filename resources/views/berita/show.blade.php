<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Desa Jalatrang</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f4f6f9; display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Navbar */
        .navbar { background-color: #1e293b; color: white; padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; }
        
        /* Layout Utama */
        .main-container { max-width: 1200px; margin: 40px auto; display: flex; gap: 30px; padding: 0 20px; width: 100%; flex: 1; align-items: flex-start; }
        
        /* Kolom Kiri (Menampung Artikel & Komentar secara terpisah) */
        .left-column { flex: 1; display: flex; flex-direction: column; gap: 30px; }

        /* Kotak Artikel Utama */
        .content-box { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        
        /* Kotak Komentar Terpisah */
        .comment-box { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }

        h1 { font-size: 28px; color: #1e293b; margin-bottom: 20px; line-height: 1.3; }
        .meta-info { display: flex; align-items: center; gap: 15px; margin-bottom: 25px; border-bottom: 1px solid #e2e8f0; padding-bottom: 15px; flex-wrap: wrap; }
        .badge { background: #1e3a8a; color: white; padding: 5px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; }
        .info-text { font-size: 14px; color: #64748b; }

        .gambar-utama { width: 100%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px; border-radius: 8px; overflow: hidden; }
        .gambar-utama img { width: 100%; max-height: 400px; object-fit: cover; border-radius: 8px; }
        
        .isi-berita { font-size: 16px; color: #334155; line-height: 1.8; text-align: justify; }
        .isi-berita p { margin-bottom: 15px; }
        .tags { margin-top: 30px; font-size: 14px; color: #2563eb; font-weight: bold; }

        .btn-back { display: inline-block; margin-top: 30px; padding: 10px 20px; background: #1e3a8a; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: 0.3s; }
        .btn-back:hover { background: #1e293b; }

        /* Sidebar Berita Terkait Kanan */
        .sidebar { width: 350px; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden; flex-shrink: 0; }
        .sidebar-header { background: #1e3a8a; color: white; padding: 15px 20px; font-weight: bold; font-size: 16px; display: flex; align-items: center; gap: 10px; }
        .sidebar-body { padding: 15px; }
        
        .terkait-item { display: flex; gap: 12px; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #f1f5f9; text-decoration: none; align-items: center; transition: 0.2s; }
        .terkait-item:last-child { margin-bottom: 0; padding-bottom: 0; border-bottom: none; }
        .terkait-img { width: 80px; height: 60px; object-fit: cover; border-radius: 6px; flex-shrink: 0; background: #e2e8f0; }
        .terkait-content h4 { font-size: 13px; color: #1e293b; line-height: 1.4; margin-bottom: 5px; font-weight: 600; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .terkait-content h4:hover { color: #2563eb; }
        .terkait-date { font-size: 11px; color: #64748b; }

        /* Footer */
        .footer { background-color: #0f172a; color: #cbd5e1; padding: 50px; display: flex; justify-content: space-between; font-size: 14px; margin-top: 60px; }
        .footer-col { flex: 1; margin-right: 20px; }
        .footer-col h3 { color: #facc15; margin-bottom: 20px; font-size: 16px; text-transform: uppercase; }
        .footer-col.menu h3, .footer-col.link h3, .footer-col.sosmed h3 { color: white; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 12px; }
        .footer-col ul li a { color: #cbd5e1; text-decoration: none; }
        .btn-peta { background: transparent; color: white; border: 1px solid #475569; padding: 8px 15px; border-radius: 5px; margin-top: 15px; display: inline-block; cursor: pointer; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div style="font-size: 16px; font-weight: bold;">PEMERINTAH DESA JALATRANG</div>
        <div>
            <a href="{{ url('/') }}" style="color: white; text-decoration: none; font-size: 14px;">Beranda</a>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        
        <!-- Kolom Kiri: Berisi Kotak Artikel & Kotak Komentar yang Terpisah -->
        <div class="left-column">
            
            <!-- 1. Kotak Artikel Utama -->
            <div class="content-box">
                <h1>{{ $berita->judul }}</h1>
                
                <div class="meta-info">
                    <span class="badge">{{ $berita->kategori }}</span>
                    <span class="info-text">📅 Dipublikasikan pada: {{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</span>
                    <span class="info-text">👁 Dilihat: {{ $berita->dilihat ?? 0 }} kali</span>
                </div>
                
                <div class="gambar-utama">
                    <img src="{{ asset('images/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                </div>

                <div class="isi-berita">
                    {!! nl2br(e($berita->isi ?? $berita->ringkasan)) !!}
                </div>

                <div class="tags">
                    Tags: #{{ Str::slug($berita->kategori) }} #desa
                </div>

                <a href="{{ url('/') }}" class="btn-back">&larr; Kembali ke Daftar Berita</a>
            </div>

            <!-- 2. Kotak Komentar Terpisah (Box Sendiri di Bawah Artikel) -->
            <div class="comment-box">
                <h3 style="font-size: 20px; color: #1e293b; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                    💬 Komentar ({{ $berita->komentars->count() }})
                </h3>

                <!-- Pesan Sukses -->
                @if(session('success'))
                    <div style="background: #dcfce7; color: #166534; padding: 12px; border-radius: 5px; margin-bottom: 20px; font-size: 14px;">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Pesan Error -->
                @if($errors->any())
                    <div style="background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 5px; margin-bottom: 20px; font-size: 14px;">
                        Terjadi kesalahan. Pastikan Nama, Pesan, dan Jawaban Captcha diisi dengan benar!
                    </div>
                @endif

                <!-- Form Tulis Komentar -->
                <form action="{{ route('komentar.store', $berita->id) }}" method="POST" style="background: #f8fafc; padding: 25px; border-radius: 8px; border: 1px solid #e2e8f0; margin-bottom: 40px;">
                    @csrf
                    <h4 style="font-size: 16px; color: #1e293b; margin-bottom: 20px;">📝 Tulis Komentar Anda:</h4>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-bottom: 15px;">
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Nama Lengkap *</label>
                            <input type="text" name="nama" placeholder="Nama Anda" value="{{ old('nama') }}" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 5px; font-size: 14px;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Alamat Email <span style="background: #64748b; color: white; font-size: 10px; padding: 2px 6px; border-radius: 3px;">Privat</span></label>
                            <input type="email" name="email" placeholder="nama@email.com" value="{{ old('email') }}" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 5px; font-size: 14px;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Nomor HP <span style="background: #64748b; color: white; font-size: 10px; padding: 2px 6px; border-radius: 3px;">Privat</span></label>
                            <input type="text" name="hp" placeholder="08xxxxxxxxxx" value="{{ old('hp') }}" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 5px; font-size: 14px;">
                        </div>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Pesan Komentar *</label>
                        <textarea name="pesan" rows="4" placeholder="Tuliskan masukan atau komentar Anda..." required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 5px; font-size: 14px;">{{ old('pesan') }}</textarea>
                        <small style="color: #64748b; font-size: 12px;">Dilarang menggunakan kata kasar / ujaran kebencian.</small>
                    </div>

                    <!-- Captcha Sederhana -->
                    <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #cbd5e1; margin-bottom: 20px;">
                        <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px; color: #1e3a8a;">🛡 Pertanyaan Keamanan (Anti-Bot) *</label>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #2563eb; color: white; padding: 8px 12px; border-radius: 5px; font-weight: bold; font-size: 14px;">6 + 6 = ?</span>
                            <input type="number" name="captcha" placeholder="Jawaban" required style="width: 120px; padding: 8px; border: 1px solid #cbd5e1; border-radius: 5px; font-size: 14px;">
                        </div>
                    </div>

                    <button type="submit" style="background: #1e3a8a; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                        🚀 Kirim Komentar
                    </button>
                </form>

                <!-- Daftar Komentar Masuk -->
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    @forelse($berita->komentars as $komentar)
                        <div style="background: #ffffff; padding: 15px 20px; border-radius: 8px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <h5 style="font-size: 15px; color: #1e293b; font-weight: bold;">👤 {{ $komentar->nama }}</h5>
                                <span style="font-size: 12px; color: #64748b;">📅 {{ $komentar->created_at->diffForHumans() }}</span>
                            </div>
                            <p style="font-size: 14px; color: #334155; line-height: 1.5;">{{ $komentar->pesan }}</p>
                        </div>
                    @empty
                        <p style="color: #64748b; font-size: 14px; font-style: italic;">Belum ada komentar untuk berita ini. Jadilah yang pertama berkomentar!</p>
                    @endforelse
                </div>
            </div>

        </div>

        <!-- Sidebar Berita Terkait di Samping Kanan -->
        <div class="sidebar">
            <div class="sidebar-header">
                📰 Berita Terkait
            </div>
            <div class="sidebar-body">
                @forelse($beritaTerkait as $item)
                    <a href="{{ route('berita.show', $item->id) }}" class="terkait-item">
                        <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}" class="terkait-img">
                        <div class="terkait-content">
                            <h4>{{ $item->judul }}</h4>
                            <span class="terkait-date">📅 {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span>
                        </div>
                    </a>
                @empty
                    <p style="font-size: 13px; color: #64748b; text-align: center; padding: 10px;">Belum ada berita lainnya.</p>
                @endforelse
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-col">
            <h3>PEMERINTAH DESA<br><span style="color:#facc15;">JALATRANG</span></h3>
            <p style="margin-top: 15px;">Jalan Raya Cipaku Nomor 181<br>Desa Jalatrang, Kecamatan Cipaku<br>Kabupaten Ciamis<br>📞 08...<br>✉️ pemerintahdesajalatrang@gmail.com</p>
            <button class="btn-peta">📍 Lihat Peta</button>
        </div>
        <div class="footer-col menu">
            <h3>MENU</h3>
            <ul>
                <li><a href="#">> Beranda</a></li>
                <li><a href="#">> Berita</a></li>
                <li><a href="#">> Struktural</a></li>
                <li><a href="#">> APBDes</a></li>
                <li><a href="#">> Prestasi</a></li>
            </ul>
        </div>
        <div class="footer-col link">
            <h3>LINK TERKAIT</h3>
            <ul>
                <li><a href="#"> Kemendesa</a></li>
                <li><a href="#"> Kab. Ciamis</a></li>
                <li><a href="#"> Pemprov Jabar</a></li>
                <li><a href="#"> Panel Admin</a></li>
            </ul>
        </div>
        <div class="footer-col sosmed">
            <h3>MEDIA SOSIAL</h3>
            <ul>
                <li><a href="#"> twitter/x</a></li>
                <li><a href="#"> facebook</a></li>
                <li><a href="#"> youtube</a></li>
                <li><a href="#"> instagram</a></li>
            </ul>
        </div>
    </div>

</body>
</html>