<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id_produk=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{background:#f4f6f9;}
        .navbar{background:#1f3c88;}
        .navbar-brand{color:white;font-weight:600;}
        .card{border:none;border-radius:10px;}
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
    <h3>Edit Produk</h3>
    <p class="text-muted">Silakan ubah data produk.</p>
<form action="proses_edit.php" method="post">
    <input type="hidden" name="id_produk" value="<?= $row['id_produk']; ?>">
    <div class="mb-3">
    <label class="form-label">Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="<?= $row['nama_produk']; ?>" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
    </div>
    <div class="mb-4">
    <label class="form-label">Stok</label>
    <input type="number" name="stok" class="form-control" value="<?= $row['stok']; ?>" required>
    </div>
    <button type="submit" class="btn btn-warning">Update</button> <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>