<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku Tamu Digital STITEK Bontang</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif}
body{background:linear-gradient(135deg,#f5f7fa,#e4eaf2);display:flex;justify-content:center;align-items:center;min-height:100vh;padding:30px}
.container{width:700px;background:#fff;padding:30px;border-radius:12px;box-shadow:0 8px 20px rgba(0,0,0,.12)}
h1{text-align:center;color:#1f2937;margin-bottom:10px}
p{text-align:center;color:#6b7280;margin-bottom:25px}
label{display:block;font-weight:bold;margin-bottom:6px}
input,textarea{width:100%;padding:12px;margin-bottom:18px;border:1px solid #d1d5db;border-radius:6px;font-size:15px}
input:focus,textarea:focus{outline:none;border-color:#2c5282;box-shadow:0 0 5px rgba(44,82,130,.25)}
textarea{resize:none}
button{width:100%;padding:13px;background:#2c5282;color:#fff;border:none;border-radius:6px;font-size:16px;cursor:pointer;transition:.3s}
button:hover{background:#1e3a5f}
.error,.success{margin-top:20px;padding:15px;border-radius:6px}
.error{background:#fdecec;color:#b91c1c;border-left:5px solid #dc2626}
.success{background:#ecfdf5;border-left:5px solid #16a34a}
.success h3{color:#15803d;margin-bottom:10px}
table{width:100%;margin-top:15px;border-collapse:collapse}
td{border:1px solid #e5e7eb;padding:10px}
td:first-child{background:#f8fafc;font-weight:bold;width:180px}
.footer{text-align:center;color:#9ca3af;font-size:14px;margin-top:25px}
</style>
</head>
<body>
<div class="container">
<h1>📖 Buku Tamu Digital STITEK Bontang</h1>
<p>Silakan isi data diri Anda pada formulir berikut.</p>
<form method="post">
<label>Nama Lengkap</label>
<input type="text" name="nama" value="<?=isset($_POST['nama'])?htmlspecialchars($_POST['nama']):''?>">
<label>Alamat Email</label>
<input type="email" name="email" value="<?=isset($_POST['email'])?htmlspecialchars($_POST['email']):''?>">
<label>Pesan / Komentar</label>
<textarea name="pesan" rows="5"><?=isset($_POST['pesan'])?htmlspecialchars($_POST['pesan']):''?></textarea>
<button type="submit">Kirim Pesan</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$nama=trim($_POST["nama"]);
$email=trim($_POST["email"]);
$pesan=trim($_POST["pesan"]);
if(empty($nama)||empty($email)||empty($pesan))
echo "<div class='error'><b>❌ Semua kolom wajib diisi.</b></div>";
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
echo "<div class='error'><b>❌ Format email tidak valid.</b></div>";
else{
$nama=htmlspecialchars($nama);
$email=htmlspecialchars($email);
$pesan=htmlspecialchars($pesan);
echo "<div class='success'>
<h3>✅ Pesan Berhasil Dikirim</h3>
<p style='text-align:left;color:#374151'>Terima kasih telah mengisi Buku Tamu Digital STITEK Bontang.</p>
<table>
<tr><td>Nama Lengkap</td><td>$nama</td></tr>
<tr><td>Alamat Email</td><td>$email</td></tr>
<tr><td>Pesan / Komentar</td><td>$pesan</td></tr>
</table>
</div>";
}
}
?>
<div class="footer">© 2026 | Pemrograman Web - STITEK Bontang</div>
</div>
</body>
</html>