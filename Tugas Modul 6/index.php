<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body{background:#f4f6f9;}
       .navbar{background:#1f3c88;}
       .navbar-brand{color:#fff;font-weight:600;font-size:22px;}
       .card{border:none;border-radius:12px;}
       .table th{background:#1f3c88;color:#fff;text-align:center;}
       .table td{vertical-align:middle;}
       footer{color:#6c757d;font-size:14px;}
 </style>
</head>
<body>
<nav class="navbar shadow">
    <div class="container">
     <span class="navbar-brand">Sistem Manajemen Produk</span>
    </div>
</nav>
<div class="container mt-5">
    <div class="card shadow">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
    <h3 class="mb-0">Data Produk</h3> <small class="text-muted">Kelola data produk toko online</small>
</div>
    <a href="tambah.php" class="btn btn-success">+ Tambah Produk</a>
 </div>
    <table class="table table-bordered table-hover">
    <thead> <tr>
    <th width="70">ID</th>
    <th>Nama Produk</th>
    <th width="170">Harga</th>
    <th width="100">Stok</th>
    <th width="170">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php if($result->num_rows > 0){ while($row = $result->fetch_assoc()){ ?>
    <tr>
    <td class="text-center"><?= $row['id_produk'] ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td>Rp <?= number_format($row['harga'],0,',','.') ?></td>
    <td class="text-center"><?= $row['stok'] ?></td>
    <td class="text-center">
    <a href="edit.php?id=<?= $row['id_produk'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
    </td>
    </tr>
    <?php }} else { ?>
    <tr>
    <td colspan="5" class="text-center">Belum ada data produk.</td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    <footer class="text-center mt-4">
        © 2026 | Sistem Manajemen Produk
    </footer>
</div>
</body>
</html>