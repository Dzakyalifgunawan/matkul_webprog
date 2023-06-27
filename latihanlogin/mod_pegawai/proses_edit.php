<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
$txnama= $_POST['txt_nama'];
$jabatan = $_POST['tx_jabatan']; // sesuai atribut name pada form
$idpegawai = $_POST['idpegawai'];
$alamat = $_POST['alamat'];


$query_update = mysqli_query($koneksidb, "update mst_pegawai set nama_peg='".$txnama."', jabatan='".$jabatan."'");

if($query_update){
    echo "Data Berhasil di Update";
    header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai");
}
?>