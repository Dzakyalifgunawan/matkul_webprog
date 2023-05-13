<?php
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
    echo "Proses Tambah"; 
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $exsave = mysqli_query($koneksidb, "insert into mst_user(id_user,username, password) values('', '".$username."', '".$pass."')") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
    }
}elseif($_GET['proses'] == "update"){
    echo "Proses Update";
    $username = $_POST['username'];
    $pass =$_POST['password'];
    $iduser = $_POST['id_user'];
    $exsave = mysqli_query($koneksidb,"UPDATE mst_user SET username = '$username' where id_user = $iduser") or die("Gagal simpan".mysqli_error($koneksidb));
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