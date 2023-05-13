<?php
    if(!isset($_GET['aksi'])){
?>
<?php

$qdata = mysqli_query($koneksidb, "select * from mst_user")or die(mysqli_error($koneksidb));

?>
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="?modul=mod_user&aksi=add">Tambah Data</a>
                <table class="table table-bordered mt-1">
                    <tr>
                        <td scope="col">id_user</td>
                        <td scope="col">Username</td>
                        <td scope="col">Password</td>
                        <td scope="col">is_Active</td>
                        <td scope="col">Action</td>
                    </tr>
                    <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($qdata)){//pembuka
                    ?>
                    <tr>
                        <td><?php $row['id_user']; ?></td>
                        <td><?php $row['username']; ?></td>
                        <td><?php $row['password']; ?></td>
                        <td></td>
                        <td>
                            <a href="?modul=mod_user&aksi=edit&id=<?php echo $row['id_user']; ?>" class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></a>
                            <a href="mod_user/proses.php?proses=delete&id=<?php echo $row['id_user']; ?>" class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></a>
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
            $query = mysqli_query($koneksidb, "select * from mst_user where id_user=".$_GET['id']."")or die(mysqli_error($koneksidb));
            $data = mysqli_fetch_array($query);
            $nama = $data['username'];
            $pass = $data['password'];
            $exproses = "update";
            $id = $_GET['id'];

        }elseif($_GET['aksi'] == "add"){
            // proses add 
            $exproses = "insert";
            $id = 0;
            $nama = "";
        }    

?>
<div class="container-fluid">
    <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h3>Form Input Data</h3>
                <form action="mod_user/proses.php?proses=<?php echo $exproses; ?>" method="post">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">id_user</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputkategori" name="id_user">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputkategori" name="username" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputkategori" name="password" value="">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">is_active</label>
                    </div>
                    <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Batal</i></button>
                    <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                </form>            
            </div>
            <div class="col-md-2"></div>
    </div>
</div>
<?php
    }
?>