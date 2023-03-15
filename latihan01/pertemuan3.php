<?php
    $calonsukses = array('Fero', 'Daud', 'Syarif', 'Dzaky');
    
    echo "$calonsukses[3]";
    echo "<br>";
    var_dump($calonsukses);
    // Associate Array 
    $calonbos = array('daud'=>'UI Designer', 'fero'=>'BE Developer', 'dzaky'=>'FE Developer', 'syarif'=>'analis sykul');
    
    echo $calonbos['daud'];
    // Multidimensial Array 
    $startup = array(
        array('nama'=>'Daud', 'jabatan'=>'Bandar Narkoba', 'gaji'=> 10000),
        array('nama'=>'Fero', 'jabatan'=>'Bandar Rental PS', 'gaji'=> 10000),
        array('nama'=>'Syarif', 'jabatan'=>'Bandar Foto', 'gaji'=> 10000),
        array('nama'=>'Dzaky', 'jabatan'=>'CEO Youtube', 'gaji'=> 10000000),
    );
    sort($startup);
    echo "<br>startup: ".$startup[3]['nama']." , jabatan ".$startup[3]['jabatan'].", gaji ".$startup[3]['gaji'];
    echo "<br>startup: ".$startup[0]['nama']." , jabatan ".$startup[0]['jabatan'].", gaji ".$startup[0]['gaji'];
    echo "<br>startup: ".$startup[2]['nama']." , jabatan ".$startup[2]['jabatan'].", gaji ".$startup[2]['gaji'];
    echo "<br>startup: ".$startup[1]['nama']." , jabatan ".$startup[1]['jabatan'].", gaji ".$startup[1]['gaji'];
    echo "<br>";

    for($i = 1; $i <= 50; $i++){
        if($i % 2 == 0){
            echo $i;
        }
    }

    $a = 1;
    while($a <= 20) {
        if($a % 2) {
            echo $a.", ";
            $a++;
        }
    }

    echo "<br>";

    foreach($calonsukses as $d){
        echo $d.", ";
    }
    for($x = 0; $x < count($calonsukses); $x++){
        echo $x;
        echo $calonsukses[$x];
    }
?>