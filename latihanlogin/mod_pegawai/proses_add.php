<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
$txnama= $_POST['txt_nama'];
$jk = $_POST['op_jk']; // sesuai atribut name pada form
$txdivisi = $_POST['tx_divisi'];
$txjabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$tgl = $_POST['tx_tgl'];
$file = $_POST['tx_file'];

if($_GET['aksi'] == 'tambah'){
    
}else{
    
}


?>