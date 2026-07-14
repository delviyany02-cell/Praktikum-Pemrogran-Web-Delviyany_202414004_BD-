<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background:#f4f6f9;}
.navbar{background:#1f3c88;}
.navbar-brand{color:#fff;font-weight:600;font-size:22px;}
.card{border:none;border-radius:12px;}
label{font-weight:500;}
</style>
</head>
<body>
<nav class="navbar shadow">
    <div class="container">
        <span class="navbar-brand">Sistem Manajemen Produk</span>
    </div>
</nav>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="card shadow">
    <div class="card-body">
    <h3 class="mb-3">Tambah Produk</h3>
    <p class="text-muted">Masukkan data produk baru.</p>
    <form action="proses_tambah.php" method="post">
    <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
     </div>
    <div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" placeholder="Masukkan harga" required>
    </div>
    <div class="mb-4">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control" placeholder="Masukkan jumlah stok" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
    </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>