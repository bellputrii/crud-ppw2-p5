<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <!-- Menyertakan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Buku</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('buku.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" id="penulis" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_terbit" class="form-label">Tanggal Terbit</label>
                        <input type="date" name="tgl_terbit" class="form-control" id="tgl_terbit" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ url('/buku') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Menyertakan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
