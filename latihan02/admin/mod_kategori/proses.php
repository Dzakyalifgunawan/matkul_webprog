<?php
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
    echo "Proses Tambah";
    $nmkategori = $_POST['txt_nama'];
    $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nmkategori."')") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
    }
}elseif($_GET['proses'] == "update"){
    echo "Proses Update";
    $namakategori = $_POST['txt_nama'];
    $idkategori = $_POST['txt_id'];
    $exsave = mysqli_query($koneksidb,"UPDATE mst_kategori SET nm_kategori = '$namakategori' where idkategori = $idkategori") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
    }
}elseif($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $id = $_GET['id'];
    $exsave = mysqli_query($koneksidb,"delete from mst_kategori where idkategori= $id") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
    }
}

?>