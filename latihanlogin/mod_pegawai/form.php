<?php
if($_GET['aksi'] == "tambah"){
?>
<div class="container">
<h3>Input Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_pegawai/proses_add.php" method="post" enctype="multipart/form-data">
        <div class="col-md">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" id="txt_nama" name="txt_nama"
            oninvalid="this.setCustomValidity('Nama Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col-md">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" name="op_jk" value="wanita"> Wanita
            <input type="radio" name="op_jk" value="pria"> Pria
        </div>
        <div class="col-md">
            <label for="tx_divisi">Divisi Jabatan</label>
            <select name="tx_divisi" class="form-select">
                <option value="">-- Pilih Divisi</option>
                <?php
                    $qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");
                    while($c = mysqli_fetch_array($qdivisi)){
                        echo "<option value=".$c['iddivisi'].">".$c['nama_divisi']."</option> ";
                    }
                ?>
            </select>             
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" id="tx_jabatan" name="tx_jabatan">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <input type="checkbox" name="st_kontrak" value="kontrak"> Kontrak
            <input type="checkbox" name="st_tetap" value="tetap"> Tetap
        </div>
        <div class="col-md">
            <label for="tx_tgl">Tanggal Bergabung</label>
            <input type="date" id="tx_tgl" name="tx_tgl"> 
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea id="tx_alamat" name="tx_alamat" cols="50" rows="3"></textarea> 
        </div>
        <div class="col-md">
            <label for="tx_file">Upload Foto</label>
            <input type="file" id="tx_file" name="tx_file"> 
        </div>
        <div class="col-md">
            <button class="button" type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php
    }elseif($_GET['aksi'] == "ubah"){
        // variabel untuk menampung value dari variabel user yang dikirim lewat url
        $usernya = $_GET['id'];
        $query_getdata = mysqli_query($koneksidb, "select * from mst_pegawai where idpegawai= '".$usernya."'");
        $data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
<h3>Input Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_pegawai/proses_edit.php" method="post" enctype="multipart/form-data">
        <div class="col-md">
            <input type="hidden" name="idpegawai" value="<?php echo $data['idpegawai']; ?>">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" id="txt_nama" name="txt_nama" value="<?php echo $data['nama_peg']; ?>">
        </div>
        <div class="col-md">
            <label for="jk">Jenis Kelamin</label>
            <?php
                $jk = $data['jk'];
                $cek_lk = "";
                $cek_wn = "";
                if($jk == "pria"){
                    $cek_lk = "checked";
                }elseif($jk == "wanita"){
                    $cek_wn = "checked";
                }
            ?>
            <input type="radio" name="op_jk" value="wanita" <?php echo $cek_wn?>> Wanita
            <input type="radio" name="op_jk" value="pria" <?php echo $cek_lk?>> Pria
        </div>
        <div class="col-md">
            <label for="txt_divisi">Divisi Jabatan</label>
            <select name="tx_divisi" class="form-select">
                <?php
                    $qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");

                    while($c = mysqli_fetch_array($qdivisi)){
                        if($c['iddivisi'] == $data['divisi']){
                            $pilih = "selected";
                        }else{
                            $pilih = "";
                        }
                        echo "<option value=".$c['iddivisi']."'.$pilih.'>".$c['nama_divisi']."</option> ";
                    }
                ?>
            </select>             
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" id="tx_jabatan" name="tx_jabatan" value="<?php echo $data['jabatan']; ?>">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <?php
                $status = $data['status'];
                $cek_kontrak = "";
                $cek_tetap = "";
                if($status == "kontrak"){
                    $cek_kontrak = "checked";
                }elseif($status == "tetap"){
                    $cek_tetap = "checked";
                }
            ?>
            <input type="checkbox" id="st_kontrak" name="kontrak" value="kontrak" <?php echo $cek_kontrak; ?>> Kontrak
            <input type="checkbox" id="st_tetap" name="tetap" value="tetap" <?php echo $cek_tetap; ?>> Tetap
        </div>
        <div class="col-md">
            <label for="status">Tanggal Bergabung</label>
            <input type="date" id="tx_tgl" name="tx_tgl" value="<?php echo $data['tgl_masuk']; ?>"> 
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea id="tx_alamat" name="tx_alamat" cols="50" rows="3"><?php echo $data['alamat']; ?></textarea> 
        </div>
        <div class="col-md">
            <input type="hidden" name="tx_filelama" value="<?php echo $data['foto']; ?>">
            <label for="tx_file">Upload Foto</label>
            <input type="file" id="tx_file" name="txt_files">
            <img src="filefoto/<?php echo $data['foto'];?>" width="100px" height="100px"> 
        </div>
        <div class="col-md">
            <button class="button" type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php 
}
?>