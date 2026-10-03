<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Desa Jalatrang</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f4f6f9; }
        
        /* Navbar & Header */
        .navbar { background-color: #1e293b; color: white; padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: bold; display: flex; align-items: center; gap: 10px; }
        .nav-links { display: flex; gap: 5px; }
        .nav-links a { color: white; text-decoration: none; padding: 5px 10px; font-size: 14px; border-radius: 5px; }
        .nav-links a.active { color: #facc15; border: 1px solid #64748b; }
        
        /* Hero Section */
        .hero { background-color: #1e3a8a; color: white; padding: 60px 50px; }
        .breadcrumb { font-size: 14px; color: #facc15; margin-bottom: 20px; }
        .breadcrumb span { color: white; }
        .hero h1 { font-size: 36px; margin-bottom: 10px; }
        .hero p { font-size: 16px; opacity: 0.9; }

        /* Main Layout Grid */
        .container { display: flex; padding: 40px 50px; gap: 30px; align-items: flex-start; }
        
        /* Sidebar Filter */
        .sidebar { width: 280px; background: white; padding: 0; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden; flex-shrink: 0; }
        .sidebar-header { background: #1e3a8a; color: white; padding: 15px; font-weight: bold; display: flex; align-items: center; gap: 10px; }
        .sidebar-body { padding: 20px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: bold; font-size: 14px; color: #333; }
        .form-group input, .form-group select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        .btn-cari { background: #2563eb; color: white; width: 100%; padding: 12px; border: none; border-radius: 5px; cursor: pointer; margin-bottom: 10px; font-weight: bold; }
        .btn-reset { background: white; color: #333; width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold; }

        /* Content Grid */
        .content { flex-grow: 1; display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
        .card { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; flex-direction: column; border: 1px solid #eee; }
        .card-img { height: 180px; background-color: #e2e8f0; width: 100%; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 14px; }
        .card-body { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
        .meta-info { display: flex; align-items: center; gap: 10px; margin-bottom: 15px; }
        .badge { background: #1e3a8a; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; }
        .date { font-size: 12px; color: #64748b; }
        .card-title { font-size: 18px; font-weight: bold; margin-bottom: 10px; color: #1e293b; line-height: 1.4; }
        .card-text { font-size: 14px; color: #475569; margin-bottom: 15px; line-height: 1.6; flex-grow: 1; }
        .tags { font-size: 12px; color: #94a3b8; margin-bottom: 20px; }
        .card-footer { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 15px; }
        .views { font-size: 13px; color: #64748b; }
        .read-more { font-size: 14px; color: #2563eb; text-decoration: none; border: 1px solid #2563eb; padding: 5px 15px; border-radius: 5px; }

        /* Footer */
        .footer { background-color: #0f172a; color: #cbd5e1; padding: 50px; display: flex; justify-content: space-between; font-size: 14px; margin-top: 40px; }
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
        <div class="logo">
            <!-- Jika ada logo gambar, taruh tag img di sini -->
            <div>
                <div style="font-size: 16px;">PEMERINTAH DESA JALATRANG</div>
                <div style="font-size: 12px; font-weight: normal; color: #cbd5e1;">KECAMATAN CIPAKU KABUPATEN CIAMIS</div>
            </div>
        </div>
        <div class="nav-links">
            <a href="#">Profil</a>
            <a href="#">Kependudukan</a>
            <a href="#" class="active">Berita</a>
            <a href="#">Potensi Wisata</a>
            <a href="#">IDM & SDGs</a>
            <a href="#">Ketahanan Pangan</a>
            <a href="#">Keuangan</a>
            <a href="#">Download</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="breadcrumb">Beranda <span>&nbsp;&nbsp;Berita</span></div>
        <h1>Berita & Informasi</h1>
        <p>Informasi terkini dari Desa Jalatrang</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Sidebar Filter -->
        <div class="sidebar">
            <div class="sidebar-header">
                ▼ Filter Berita
            </div>
           <div class="sidebar-body">
                <!-- Tambahkan form method GET untuk pencarian -->
                <form action="{{ url('/') }}" method="GET">
                    <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="text" name="search" placeholder="Cari berita..." value="{{ request('search') }}">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori">
                            <option value="Semua Kategori" {{ request('kategori') == 'Semua Kategori' ? 'selected' : '' }}>Semua Kategori</option>
                            <option value="Olahraga" {{ request('kategori') == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                            <option value="Pendidikan" {{ request('kategori') == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-cari">Cari</button>
                    <!-- Tombol reset mengembalikan ke halaman awal tanpa filter -->
                    <a href="{{ url('/') }}" style="display:block; text-align:center; text-decoration:none; box-sizing:border-box;" class="btn-reset">Reset</a>
                </form>
            </div>
        </div> <!-- INI TAMBAHANNYA AGAR LAYOUT TIDAK RUSAK -->

        <!-- Berita Grid (Diambil dari Database) -->
        <div class="content">
            @foreach($berita as $item)
            <div class="card">
                <div class="card-img">
                    [Gambar Berita]
                </div>
                <div class="card-body">
                    <div class="meta-info">
                        <span class="badge">{{ $item->kategori }}</span>
                        <span class="date">📅 {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                    </div>
                    <h3 class="card-title">{{ $item->judul }}</h3>
                    <p class="card-text">{{ $item->ringkasan }}</p>
                    <div class="tags">{{ $item->tags }}</div>
                    <div class="card-footer">
                        <span class="views">👁 {{ $item->views }}</span>
                        <a href="{{ url('/berita/'.$item->id) }}" class="read-more">Baca &rarr;</a>
                    </div>
                </div>
            </div>
            @endforeach
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