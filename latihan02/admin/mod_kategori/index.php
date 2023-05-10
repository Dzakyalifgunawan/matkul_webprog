<?php
    if(!isset($_GET['aksi'])){
?>
<?php

$qdata = mysqli_query($koneksidb, "select * from mst_kategori")or die(mysqli_error($koneksidb));

?>
<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="?modul=mod_kategori&aksi=add">Tambah Data</a>
                <table class="table mt-1">
                    <tr>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($qdata)){//pembuka
                    ?>
                    <tr>
                        <td><?php echo $row['idkategori']; ?></td>
                        <td><?php echo $row['nm_kategori']; ?></td>
                        <td>
                            <a href="?modul=mod_kategori&aksi=edit&id=<?php echo $row['idkategori']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"> Edit</i></a>
                            <a href="mod_kategori/proses.php?proses=delete&id=<?php echo $row['idkategori']; ?>" class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></a>
                        </td>   
                    </tr>
                    <?php
                        $no++; //untuk mengganti auto increment menjadi urut 
                         }//penutup 
                    ?>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>
<?php 
    }elseif((isset($_GET['aksi']))){
        if($_GET['aksi'] == "edit"){
            $query = mysqli_query($koneksidb, "select * from mst_kategori where idkategori=".$_GET['id']."")or die(mysqli_error($koneksidb));
            $data = mysqli_fetch_array($query);
            $nama = $data['nm_kategori'];
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
                <form action="mod_kategori/proses.php?proses=<?php echo $exproses; ?>" method="post">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Nama Kategori</label>
                        <div class="col-sm-9">
                            <input type="hidden" id="txt_id" name="txt_id" value="<?php echo $id; ?>">
                            <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="<?php echo $nama ?>">
                            <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Batal</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                        </div>
                    </div>
                </form>            
            </div>
            <div class="col-md-2"></div>
        </div>
</div>
<?php
    }
?>
