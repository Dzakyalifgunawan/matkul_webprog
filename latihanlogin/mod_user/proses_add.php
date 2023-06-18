<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
$txnama= $_POST['txt_nama'];
$txuser = $_POST['txt_user']; // sesuai atribut name pada form
$txtpass = md5($_POST['txt_pasw']);

// query untuk melakukan pengecekan username sudah ada 
$query_cekdata = mysqli_query($koneksidb,"select * from mst_user where username='".$txuser."'");
//
$cekdata = mysqli_num_rows($query_cekdata);
if($cekdata > 0){
    echo "Username sudah ada";
}else{
    $query_simpan = mysqli_query($koneksidb,"insert into mst_user(username,nama,password, is_active) values('".$txuser."','".$txnama."','".$txtpass."', 1)");
    if($query_simpan){
        echo "Tersimpan";
        header("Location:http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user");
    }else{
        echo "Tidak Tersimpan";
    }
}


?>