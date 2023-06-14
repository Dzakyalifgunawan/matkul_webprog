<?php
    session_start();
    require_once("koneksi_db.php");
    require_once("config.php");
    securtiylogin();
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
        <a href="?modul=mod_user" class="btn">Modul User</a>
        <a href="?modul=mod_pegawai" class="btn">Modul Pegawai</a>
        <a href="logout.php" class="btn">Log out</a>
        <div class="konten">
            <?php
                if(isset($_GET["modul"]) && !isset($_GET['aksi'])){
                    //nama folder otomatis sesuai value yang dikirim melalui variabel modul
                    include_once("".$_GET["modul"]."/index.php");
                    // include_once("namafolder/namafile");
                }
                if(isset($_GET["modul"]) && isset($_GET['aksi'])){
                    //akan menampilkan file form.php jika ada pengiriman variabel modul dan aksi 
                    include_once("".$_GET["modul"]."/form.php");
                    // include_once("namafolder/namafile");
                }
                // include_once("mod_user/index.php");
                // include_once("mod_pegawai/index.php");
            ?>
        </div>
    </div>
    <script src="config.js"></script>
</body>
</html>