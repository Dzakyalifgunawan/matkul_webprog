<?php
    $tokoase = array (
        array('kode'=>'B01', 'barang'=>'buku', 'harga'=> 50000),
        array('kode'=>'B02', 'barang'=>'pulpen', 'harga'=> 10000),
        array('kode'=>'B03', 'barang'=>'penghapus', 'harga'=> 5000),
    );
    $kode = $tokoase[0]['kode'];
    $jumlahdibeli = 3;
    $hasil;
    
    if($kode == $tokoase[0]['kode']){
        if($jumlahdibeli == 3){
            $hasil = $jumlahdibeli * (50000 - 3000);
            echo "Dzaky membeli Buku di Toko ASE <br>";
            echo "B01 Buku ,beli sebanyak : $jumlahdibeli pcs <br>";
            echo "Jumlah diBayar : $hasil";
        }else{
            $hasil = 50000 * $jumlahdibeli;
            echo "Dzaky membeli Buku di Toko ASE <br>";
            echo "B01 Buku ,beli sebanyak : $jumlahdibeli pcs <br>";
            echo "Jumlah diBayar : $hasil";
        }
    }elseif ($kode == $tokoase[1]['kode']){
        if($jumlahdibeli >= 6){
            $hasil = $jumlahdibeli * (10000 - 2000);
            echo "Dzaky membeli Pulpen di Toko ASE <br>";
            echo "B02 Pulpen ,beli sebanyak : $jumlahdibeli pcs <br>";
            echo "Jumlah diBayar : $hasil";
        }else{
            $hasil = 10000 * $jumlahdibeli;
            echo "Dzaky membeli Pulpen di Toko ASE <br>";
            echo "B02 Pulpen ,beli sebanyak : $jumlahdibeli pcs <br>";
            echo "Jumlah diBayar : $hasil";
        }
    }else {
        $hasil = 5000 * $jumlahdibeli;
        echo "Dzaky membeli Penghapus di Toko ASE <br>";
        echo "B03 Penghapus ,beli sebanyak : $jumlahdibeli pcs <br>";
        echo "Jumlah diBayar : $hasil";
    }
    
    echo "<br>";

    foreach($tokoase as $tokoase) {
        foreach($tokoase as $a){
            echo $a." ";
        }
        echo "<br>";
    }  
?>