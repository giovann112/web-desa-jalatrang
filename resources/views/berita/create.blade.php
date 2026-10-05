<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita - Desa Jalatrang</title>
    <style>
        body { font-family: sans-serif; background: #f4f6f9; padding: 50px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .btn-simpan { background: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; width: 100%; }
    </style>
</head>
<body>

    <div class="container">
        <h2 style="margin-bottom: 20px; text-align: center;">Tambah Berita Baru</h2>
        
        <!-- PERHATIKAN: form menggunakan method="POST" dan action ke jalur /berita/store -->
        <form action="{{ url('/berita/store') }}" method="POST">
            
            
            <!-- Fungsinya memberi "Stempel Resmi" agar Laravel mengizinkan data ini masuk ke database -->
            @csrf
            
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="judul" required placeholder="Masukkan judul...">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Olahraga">Olahraga</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Potensi">Potensi Wisata</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tags (Gunakan Hashtag)</label>
                <input type="text" name="tags" placeholder="Contoh: #desa #jalatrang">
            </div>

            <div class="form-group">
                <label>Ringkasan Isi Berita</label>
                <textarea name="ringkasan" rows="5" required placeholder="Ketik isi berita di sini..."></textarea>
            </div>

            <button type="submit" class="btn-simpan">Simpan Berita</button>
            <a href="{{ url('/') }}" style="display:block; text-align:center; margin-top:15px; color:#666; text-decoration:none;">Batal & Kembali</a>
        </form>
    </div>

</body>
</html>