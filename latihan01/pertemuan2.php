<?php
    $pembeli = "Daud";
    $uang = 15000000;
    $laptop;
    // if($uang < 10000000){
    //     $laptop = "Laptop Asus";
    // }else{
    //     $laptop = "Laptop HP";
    // }
    // echo "Maka $pembeli membeli $laptop";
    
    //inputan
    $mahasiswa = "Seragam Lengkap";// yang dirubah isi variabel 

    //pengecekan output
    if($mahasiswa == "Seragam Lengkap") {
        echo "Silahkan mengikuti kuliah";
    }else if ($mahasiswa == "Seragam Tidak Lengkap"){
        echo "Laksanakan Hukuman";
    }else {
        echo "Kena SP";
    }
    echo "<br>";

    switch($uang) {
        case $uang <= 10000000 :
            $laptop = "Laptop Asus";
            break;
        case $uang <= 15000000 :
            $laptop = "Laptop HP";
            break;
        default;
    }
    echo "Maka $pembeli membeli $laptop";
?>