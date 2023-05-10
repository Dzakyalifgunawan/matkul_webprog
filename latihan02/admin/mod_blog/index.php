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
                        <td>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
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
            // $query = mysqli_query($koneksidb, "select * from mst_kategori where idkategori=".$_GET['id']."")or die(mysqli_error($koneksidb));
            // $data = mysqli_fetch_array($query);
            // $nama = $data['nm_kategori'];
            $exproses = "update";
            $id = $_GET['id'];

        }elseif($_GET['aksi'] == "add"){
            // proses add 
            $exproses = "insert";
            $id = 0;
            $nama = "";
        }
?>

<!-- Tampilan Form -->


<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
            <h3>Form Input Data</h3>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Blog</label>
                        <div class="col-sm-7">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>-- Pilih Kategori --</option>
                                <option value="1">Kuliah</option>
                                <option value="2">Mbolang</option>
                                <option value="3">Rebahan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputjudul" name="judul">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                            <input type="date" class="form-control" id="inputtanggal" name="tanggal">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
                    <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>    
<?php 
    }
?>