<?php
    $jam = date("d-m-Y, h:i:s");

    function kata($jam){
        if($jam == date("s : 5")){
            $nama = "Puan";
            $kata = "$jam, $nama sedang membagikan baju kepada masyarakat setempat";            
            echo "Hari ini $kata";
        }    
    }
    kata($jam);
    
?>