<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
$idpeg = $_POST['idpegawai'];
$txnama= $_POST['txt_nama'];
$txdivisi = $_POST['tx_divisi'];
$txjabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";

// ini untuk mendapatkan value dari radio button 
//  dan agar tidak muncul error ketika tidak dipilih 
if(isset($_POST['op_jk'])){
    $jk = $_POST['op_jk'];
}

// ini untuk mendapatkan value dari checkbox
if(isset($_POST['st_kontrak'])){
    $status = "kontrak";
}elseif(isset($_POST['st_tetap'])){
    $status = "tetap";
}

echo $idpeg;
$file = $_FILES['txt_files']; 
$filelama = $_POST['tx_filelama'];
$ceknamafile = "";
if(!empty($file['nama'])){
    $data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai where idpegawai = $idpeg");
    $lihat = mysqli_fetch_array($data);
        if($filelama){
            $path = "../filefoto/".$lihat['foto'];
            unlink($path);
        }
    $target_folder = "../filefoto/";
    // ini cara lain: $_FILES['tx_file']['name'];

    // tujuan Penyimpanan file, direktori dan nama file
    $target_file = $target_folder.$file["name"];
    echo $target_file."<br>";

    // untuk mendapatkan tipe file yang diupload
    $type_file = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    echo $type_file."<br>";

    // buat variabel untuk menampung hasil validasi, apakah file oleh diupload atau tidak, jika 1 maka boleh diupload, 
    // jika 0 maka tidak dapat upload
    $boleh_upload = 1;
    // cek batas limit file maks.3MB
    if($file['size'] > 1000000){
        $boleh_upload = 0;
        notif("Jangan Upload, file kebesaran");
    }

    // cek tipe file: 
    if($type_file != "jpg" && $type_file != "png" && $type_file != "jpeg"){
        $boleh_upload = 0;
        notif("Tipe file anda berbahaya!!!");
    }
    if($boleh_upload == 1){
        //if ini melakukan proses dan sekaligus 
        if(move_uploaded_file($file['tmp_name'], $target_file)){
            $ceknamafile = $file['name']; 
        }else{
            notif('Gagal Upload File');
        }
        
        
    }
}else{
    $ceknamafile = $filelama;
}

$query_update = mysqli_query($koneksidb, 
"UPDATE 'mst_pegawai' SET nama_peg = '$txnama', jk = '$jk',
 divisi = '$txdivisi', jabatan = '$txjabatan', tgl_masuk = '$tgl',
  alamat = '$alamat', foto = '$ceknamafile' WHERE idpegawai = '$idpeg'");
if($query_update){
    notif('Upload Berhasil');
}

function notif($pesan){
    echo '<script language = "javascript">';
    echo "alert('".$pesan."')";
    echo "</script>";
    //<meta http-quiv="refresh" content="0;url=">;
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}
?>
