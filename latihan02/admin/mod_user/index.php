<?php
    if(!isset($_GET['aksi'])){
?>
<?php

$qdata = mysqli_query($koneksidb, "select * from mst_user")or die(mysqli_error($koneksidb));

?>
<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="?modul=mod_user&aksi=add">Tambah Data</a>
                <table class="table mt-1">
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($qdata)){//pembuka
                    ?>
                    <tr>
                        <td><?php echo $row['id_user']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pass_user']; ?></td>
                        <td>
                            <a href="?modul=mod_user&aksi=edit&id=<?php echo $row['id_user']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"> Edit</i></a>
                            <a href="mod_user/proses.php?proses=delete&id=<?php echo $row['id_user']; ?>" class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></a>
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
            $query = mysqli_query($koneksidb, "select * from mst_user where id_user=".$_GET['id']."")or die(mysqli_error($koneksidb));
            $data = mysqli_fetch_array($query);
            $nama = $data['username'];
            $exproses = "update";
            $id = $_GET['id'];
            $pass = $data["pass_user"];

        }elseif($_GET['aksi'] == "add"){
            // proses add 
            $exproses = "insert";
            $id = 0;
            $nama = "";
            $pass = "";
        }

?>

<!-- Tampilan Form -->

<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
            <h3>Form Input Data</h3>
                <form action="mod_user/proses.php?proses=<?php echo $exproses; ?>" method="post">
                    <div class="mb-3 row">
                        <!-- <label for="inputPassword" class="col-sm-3 col-form-label">id_user</label> -->
                        <div class="col-sm-9">
                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $id; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_pass" name="txt_pass" value="<?php echo $pass ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9">
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
