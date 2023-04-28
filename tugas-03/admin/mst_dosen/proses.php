<?php
require_once("../../koneksidb.php");

if($_GET['aksi'] == "insert"){
    echo "Proses Tambah";
    $ktp = $_POST['ktp_dosen'];
    $nama = $_POST['nm_dosen'];
    $email = $_POST['em_dosen'];
    $telepon = $_POST['nt_dosen'];
    $bidang = $_POST['bd_dosen'];
    $jadwal = $_POST['jt_dosen'];
    $exsave = mysqli_query($koneksidb, "insert into mst_dosen(ktp_dosen, nm_dosen, em_dosen, nt_dosen, bd_dosen, jt_dosen) values('.$ktp.','".$nama."','".$email."','".$telepon."','".$bidang."','".$jadwal."')") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/tugas-03/admin/home.php?modul=mst_dosen");
    }
}elseif($_GET['aksi'] == "update"){
    echo "Proses Update";
}elseif($_GET['aksi'] == "delete"){
    echo "Proses Delete";
}

?>