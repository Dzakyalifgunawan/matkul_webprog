<?php
require_once("../../koneksidb.php");

if($_GET['aksi'] == "insert"){
    echo "Proses Tambah";
    $nmkategori = $_POST['txt_nama'];
    $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nmkategori."')") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
    }
}elseif($_GET['aksi'] == "update"){
    echo "Proses Update";
}elseif($_GET['aksi'] == "delete"){
    echo "Proses Delete";
}

?>