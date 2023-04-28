<?php
    if(!isset($_GET['aksi'])){
?>
<?php

$qdata = mysqli_query($koneksidb, "select * from mst_dosen")or die(mysqli_error($koneksidb));

?>
<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="?modul=mst_dosen&aksi=add">Tambah Data</a>
                <table class="table mt-1">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">KTP Dosen</th>
                        <th scope="col">email Dosen</th>
                        <th scope="col">No.Telepon</th>
                        <th scope="col">Bidang Mengajar</th>
                        <th scope="col">Jadwal Tugas</th>
                        <th scope="col">Opsi</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($qdata)){//pembuka
                    ?>
                    <tr>
                        <td><?php echo $row['no']; ?></td>
                        <td><?php echo $row['ktp_dosen']; ?></td>
                        <td><?php echo $row['nm_dosen']; ?></td>
                        <td><?php echo $row['em_dosen']; ?></td>
                        <td><?php echo $row['nt_dosen']; ?></td>
                        <td><?php echo $row['bd_dosen']; ?></td>
                        <td><?php echo $row['jt_dosen']; ?></td>
                        <td>
                            <a class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></a>
                            <a class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></a>
                        </td>   
                    </tr>
                    <?php }//penutup ?>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>
<?php 
    }elseif((isset($_GET['aksi']))){
?>

<!-- Tampilan Form -->

<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
            <h3>Form Input Data</h3>
                <form action="mod_kategori/proses.php?aksi=insert" method="post">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">KTP Dosen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ktp_dosen" name="ktp_dosen">  
                        </div>
                        <label for="inputPassword" class="col-sm-3 col-form-label">Nama Dosen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nm_dosen" name="nm_dosen">  
                        </div>
                        <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="em_dosen" name="em_dosen">  
                        </div>
                        <label for="inputPassword" class="col-sm-3 col-form-label">No Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nt_dosen" name="nt_dosen">  
                        </div>
                        <label for="inputPassword" class="col-sm-3 col-form-label">Bidang Mengajar</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="bd_dosen" name="bd_dosen">  
                        </div>
                        <label for="inputPassword" class="col-sm-3 col-form-label">Jadwal Tugas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jt_dosen" name="jt_dosen">  
                        </div>
                        <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Batal</i></button>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                    </div>
                </form>            
            </div>
            <div class="col-md-2"></div>
        </div>
</div>
<?php
    }
?>