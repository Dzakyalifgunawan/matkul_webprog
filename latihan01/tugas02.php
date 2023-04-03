<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" cellpadding = "10">
        <tr>
            <td>No</td>
            <td>Kegiatan</td>
        </tr>
        <?php
            $data = array (
            array ('no' => '01', 'kegiatan' => 'Puan membagikan baju'),
            array ('no' => '02', 'kegiatan' => 'Puan berolahraga'),
            array ('no' => '03', 'kegiatan' => 'Puan berpidato'),
            );
            $kegiatan = $data[0]['kegiatan'];

            if($kegiatan == $data[0]['kegiatan']){
                echo kata1();    
            }elseif($kegiatan == $data[1]['kegiatan']){
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