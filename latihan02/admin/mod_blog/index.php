<?php
    if(!isset($_GET['aksi'])){
?>
<?php
// AS untuk alias seperti mst_blog menjadi a
$qdata = mysqli_query($koneksidb, "SELECT a.*, nm_kategori FROM mst_blog AS a INNER JOIN mst_kategori AS b ON a.id_kategori = b.idkategori")or die(mysqli_error($koneksidb));

?>
<div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="?modul=mod_blog&aksi=add">Tambah Data</a>
                <table class="table table-bordered mt-1">
                    <tr>
                        <td scope="col">Tanggal</td>
                        <td scope="col">Judul</td>
                        <td scope="col">Gambar</td>
                        <td scope="col">isi</td>
                        <td scope="col">Kategori</td>
                        <td scope="col">Aktif</td>
                        <td scope="col">Action</td>
                    </tr>
                    <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($qdata)){//pembuka
                    ?>
                    <tr>
                        <td><?php echo $row['tgl_blog']?></td>
                        <td><?php echo $row['judul']?></td>
                        <td><?php echo $row['file_gmb']?></td>
                        <td><?php echo $row['isi_blog']?></td>
                        <td><?php echo $row['nm_kategori']?></td>
                        <td><?php echo $row['is_aktif']?></td>
                        <td>
                            <a href="?modul=mod_blog&aksi=edit&id=<?php echo $row['id_blog']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"> Edit</i></a>
                            <a href="mod_blog/proses.php?proses=delete&id=<?php echo $row['id_blog']; ?>" class="btn btn-primary"><i class="bi bi-x-lg"> Delete</i></a>
                        </td>
                    </tr>
                    <?php
                        $no++; //untuk mengganti auto increment menjadi urut 
                         }//penutup 
                    ?>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
</div>
<?php 
    }elseif((isset($_GET['aksi']))){
        if($_GET['aksi'] == "edit"){
            $query = mysqli_query($koneksidb, "select * from mst_blog where id_blog=".$_GET['id']."")or die(mysqli_error($koneksidb));
            $data = mysqli_fetch_array($query);
            $judulnya = $data['judul'];
            $isinya = $data['isi_blog'];
            $tanggalnya = $data['tgl_blog'];
            $exproses = "update";
            $kategorinya = $data['id_kategori'];
            $idblog = $_GET['id'];
            $isaktif = $data['is_aktif'];

        }elseif($_GET['aksi'] == "add"){
            // proses add 
            $exproses = "insert";
            $idblog = 0;
            $nama = "";
            $kategorinya = "";
            $judulnya = "";
            $isinya = "";
            $tanggalnya = "";
            $isaktif = 0;
        }
?>

<!-- Tampilan Form -->


<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
            <h3>Form Input Data</h3>
                <form action="mod_blog/proses.php?proses=<?php echo $exproses; ?>" method="post">
                    <input type="hidden" name="idblog" value="<?php echo $idblog; ?>">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Blog</label>
                        <div class="col-sm-7">
                            <select class="form-select" aria-label="Default select example" name="kategori">
                                <option selected>-- Pilih Kategori --</option>
                                <?php
                                   $qkategori = mysqli_query($koneksidb, "select * from mst_kategori")
                                   or die("Gagal simpan".mysqli_error($koneksidb));
                                   while ($cb = mysqli_fetch_array($qkategori)){
                                        if($cb["idkategori"] == $kategorinya){
                                            $pilih = "selected";
                                        }else{
                                            $pilih = "";
                                        }
                                        echo '<option value="'.$cb["idkategori"].'" '.$pilih.'>'.$cb["nm_kategori"].'</option>';
                                   }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judulnya; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" id="isi" rows="3" name="isi"><?php echo $isinya; ?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-7">
                            <input type="file" accept="image/*">choose File</input><span>No file Chosen</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Input</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggalnya; ?>">
                            <input type="checkbox" name="is_aktif" <?php if($isaktif == 1){ echo "checked"; } ?>>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-secondary" type="reset"><i class="bi bi-x-lg"> Delete</i></button>
                    <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>    
<?php 
    }
?>