<?php
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
    echo "Proses Tambah";
    $judulx = $_POST['judul'];
    $kategorix = $_POST["kategori"];
    $isix = $_POST["isi"];
    $tgl = $_POST["tanggal"];
    if(isset($_POST['is_aktif'])){ // input checkbox untuk mendapatkan hasil 
        $isaktif = 1;
    }else{
        $isaktif = 0;
    }

    echo $kategorix. " , ".$isaktif;

    $exsave = mysqli_query($koneksidb, "insert into mst_blog(judul, file_gmb, isi_blog, tgl_blog, penulis, id_kategori, is_aktif) values ('".$judulx."', '', '".$isix."', '".$tgl."', '', '".$kategorix."', '".$isaktif."')")
    or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
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
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
    }
}elseif($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $id = $_GET['id'];
    $exsave = mysqli_query($koneksidb,"delete from mst_user where id_user= $id") or die("Gagal simpan".mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
    }
}

?>