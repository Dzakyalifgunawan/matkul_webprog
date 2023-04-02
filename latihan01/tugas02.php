<?php
    $data = array (
        array ('no' => '01', 'keliling' => 'baju'),
        array ('no' => '02', 'keliling' => 'olahraga'),
        array ('no' => '03', 'keliling' => 'pidato'),
    );
    $kegiatan = $data[0]['keliling'];

    if($kegiatan == $data[0]['keliling']){
        echo kata1();
        foreach($data as $k){
            echo $k."";
        }    
    }elseif($kegiatan == $data[1]['keliling']){
        echo kata2();
    }else{
        echo kata3();
    }

    function kata1(){
        $jam = date("d-m-Y, h:i:s");
        $nama = "Puan";
        $kata = "$jam, $nama sedang membagikan baju kepada masyarakat setempat";            
        echo "Hari ini $kata";
    }

    function kata2(){
        $jam = date("d-m-Y, h:i:s");
        $nama = "Puan";
        $kata = "$jam, $nama sedang berolahraga di gedung DPR";            
        echo "Hari ini $kata";
    }

    function kata3(){
        $jam = date("d-m-Y, h:i:s");
        $nama = "Puan";
        $kata = "$jam, $nama sedang Berpidato didepan Pak Jokowi";            
        echo "Hari ini $kata";
    }
?>