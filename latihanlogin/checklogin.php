<?php
require_once("koneksi_db.php");
session_start();
$user =$_POST['txt_user']; 
$pass = md5($_POST['txt_pasw']);
$query_login = mysqli_query($koneksidb, "SELECT * FROM mst_user where password = '".$pass."' AND BINARY username = '".$user."' and is_active = 1")or die(mysqli_error($koneksidb));
$checkhasil = mysqli_num_rows($query_login);
// BINARY untuk perbedaan penggunaan huruf besar dan huruf kecil
$hasil = mysqli_fetch_array($query_login);//variabel yg menampung hasil query
if($checkhasil > 0){
    echo "Selamat Anda dapat sepeda";
    $_SESSION['userlog'] = $user;//menampung 
    $_SESSION['namalog'] = $hasil['nama'];//menampung 
    header('location: home.php');
}else{
    $_SESSION['pesan'] = "Username atau password salah Bego";
    // echo "Kapok";
    header("Location: index.php");
}
echo $checkhasil;
echo $user."<br>";
echo $pass."<br>";
?>