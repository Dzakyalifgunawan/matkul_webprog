<?php
    session_start();
    if(!isset($_SESSION['namalog'])){ //ini untuk cek, bahwa user harus login terlebih dahulu. jika belum maka kembali ke index (halaman login) 
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Selamat, <?php echo $_SESSION['namalog']; ?></h2>
        <a href="mod_user/index.php" class="btn">Modul User</a>
        <a href="mod_pegawai/index.php" class="btn">Modul Pegawai</a>
        <div class="konten">
            halo
        </div>
    </div>
</body>
</html>