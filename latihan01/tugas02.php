<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "2" cellpadding = "10">
        <tr>
            <td>No</td>
            <td>Kegiatan</td>
        </tr>
        <?php
            $data = array (
            array ('no' => '01', 'kegiatan' => 'Puan membagikan baju'),
            array ('no' => '02', 'kegiatan' => 'Puan berolahraga'),
            array ('no' => '03', 'kegiatan' => 'Puan berpidato'),
            array ('no' => '04', 'kegiatan' => 'Pulang pulang kampung'),
            );
            $kegiatan = $data[3]['kegiatan'];
            $jumlah = 5;

            if($kegiatan == '01'){
                if($jumlah == 3){
                    echo kata(p == 1);  
                }else{
                    $jam = date("d-m-Y, h:i:s");
                    echo "$jam, Bu Puan tidak membagi 3 baju kepada masyarakat";
                }    
            }elseif($kegiatan == $data[1]['kegiatan']){
                if($jumlah == 5){
                    echo kata(p == 2);
                }else{
                    $jam = date("d-m-Y, h:i:s");
                    echo "$jam, Bu Puan tidak berolahraga 5 putaran di gedung DPR";
                }    
            }elseif($kegiatan == $data[2]['kegiatan']){
                if($jumlah == 10){
                    echo kata3(p == 3);
                }else{
                    $jam = date("d-m-Y, h:i:s");
                    echo "$jam, Bu Puan tidak berpidato 10 kalimat di depan Pak Jokowi";
                }
            }else{
                echo kata(p);
            }

            function kata($p){
                if($p == 1){
                    $jam = date("d-m-Y, h:i:s");
                    $nama = "Puan";
                    $kata = "$jam, $nama sedang membagikan 3 baju kepada masyarakat setempat";            
                    echo "Hari ini $kata";
                }elseif($p == 2){
                    $jam = date("d-m-Y, h:i:s");
                    $nama = "Puan";
                    $kata = "$jam, $nama sedang berolahraga 5 putaran di gedung DPR";            
                    echo "Hari ini $kata";
                }elseif($p == 3){
                    $jam = date("d-m-Y, h:i:s");
                    $nama = "Puan";
                    $kata = "$jam, $nama sedang Berpidato 10 kalimat didepan Pak Jokowi";            
                    echo "Hari ini $kata";
                }else{
                    $jam = date("d-m-Y, h:i:s");
                    echo "$jam, Bu Puan pulang kampung";
                }
            }

            foreach($data as $d){
            ?>
        <tr>
            <td><?php echo $d['no']?></td>
            <td><?php echo $d['kegiatan']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>