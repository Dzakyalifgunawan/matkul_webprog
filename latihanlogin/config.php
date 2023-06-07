<?php 
function securtiylogin(){
    
    //ini untuk cek, bahwa user harus login terlebih dahulu. jika belum maka kembali ke index (halaman login)
    if(!isset($_SESSION['namalog'])){  
        return header("location: index.php");
    }else{
        return $_SESSION['namalog'];
    }
}

?>