<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");

if($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $user = $_GET['user'];
    $exsave = mysqli_query($koneksidb,"delete from mst_user where username = $user") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user");
    }
}
?>