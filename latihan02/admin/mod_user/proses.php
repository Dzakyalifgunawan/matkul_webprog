<?php
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
    echo "Proses Tambah";
    $username = $_POST['txt_nama'];
    $pass = $_POST["txt_pass"];
    $exsave = mysqli_query($koneksidb, "insert into mst_user(username, pass_user) values('".$username."', '".$pass."')")
    or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
    }
}elseif($_GET['proses'] == "update"){
    echo "Proses Update";
    $username = $_POST['txt_nama'];
    $pass = $_POST['txt_pass'];
    $id_user = $_POST["id_user"];
    $exsave = mysqli_query($koneksidb,"UPDATE mst_user SET username = '$username', pass_user = '$pass'
    where id_user = $id_user") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
    }
}elseif($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $id = $_GET['id'];
    $exsave = mysqli_query($koneksidb,"delete from mst_user where id_user= $id") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
    }
}

?>