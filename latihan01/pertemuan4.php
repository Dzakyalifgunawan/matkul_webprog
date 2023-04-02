<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <table border = "1" cellpadding = "10">
        <tr>
            <td>id</td>
            <td>judul</td>
            <td>konten</td>
            <td>Action</td>
        </tr>
        <?php
            $data = array (
                array('id'=>'01', 'judul'=>'judul01', 'konten'=> 'isi berita-1'),
                array('id'=>'02', 'judul'=>'judul02', 'konten'=> 'isi berita-2'),
                array('id'=>'03', 'judul'=>'judul03', 'konten'=> 'isi berita-3'),
            );
            foreach($data as $d){
        ?>
        <tr>
            <td><?php echo $d['id'] ?></td>
            <td><?php echo $d['judul'] ?></td>
            <td><?php echo $d['konten'] ?></td>
            <td>
                <a href="?idku=<?php echo $d['id'] ?>">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
<?php
$kata = "Belajar PHP itu Mudah";
echo strlen($kata);

echo "<br>";

$kata2 = explode("itu", $kata);
var_dump($kata2);

$kata3 = implode(" ", $kata2);
echo $kata3;

echo "<br>";

echo ltrim($kata3, "Belajar");

echo "<br>";

echo rtrim($kata3, "Mudah");
$today = date("d-m-Y");
echo "<br> Hari ini: ".$today;

date_default_timezone_set("asia/jakarta");
$hari = date("D, F-d-Y h:i:s");
echo "<br> Hari ini : $hari";

// $tgllahir = date_create("30-05-2004");
// $tglhariini = date("d-m-Y");
// $umur = date_diff($tgllahir, date_create($tglhariini));
// echo "<br> Umur : ".$umur ->format('%y thn %m bln %d day %a days');

function hitungumur(){
    $tgllahir = date_create("30-05-2004");
    $tglhariini = date("d-m-Y");
    $umur = date_diff($tgllahir, date_create($tglhariini));
    return "<br> Umur : ".$umur ->format('%y thn %m bln %d day %a days');
}
echo hitungumur();

$jurusan = "IT";
$nama = "Daud";
$nilai = 90;

function datamhs($nama, $jurusan, $nilai){
    echo "<br> nama: $nama , $jurusan, $nilai";
}
datamhs($nama, $jurusan, $nilai);
?>