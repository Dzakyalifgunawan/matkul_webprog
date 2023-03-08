<?php
    echo "<b>Hello kampret</b>";
    print_r("Mantab");
    $nama = 'Dzaky';
    $nama2 = 'Alif';
    echo $nama ." ".$nama2; 
    // (.) untuk menggabungkan variabel dan ($) adalah pengganti let/var/const ({}) sama seperti spasi  
    // echo menampilkan nilai varibel 
    $nilaitugas = 80;
    $nilaiQuiz = 70;
    $penjumlahan = $nilaiQuiz + $nilaitugas;
    $perkalian = $nilaiQuiz * $nilaitugas;
    $pembagian = round($nilaiQuiz / $nilaitugas);
    $pengurangan = $nilaiQuiz - $nilaitugas;
    $sisabagi = $nilaiQuiz % $nilaitugas;
    $eksponen = $nilaiQuiz ** 2; // pangkat
    echo "<br> Hasil Penjumlahan : $penjumlahan";
    echo "<br> Hasil Pengurangan : $pengurangan";
    echo "<br> Hasil Perkalian : $perkalian";
    echo "<br> Hasil Pembagian : $pembagian";
    echo "<br> Hasil Sisa Bagi : $sisabagi";
    echo "<br> Hasilnya : $nilaiQuiz  $nilaitugas";
    echo "<br> Hasil pangkat : $eksponen";
?>