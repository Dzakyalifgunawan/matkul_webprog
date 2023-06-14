<?php
if($_GET['aksi'] == "tambah"){
?>
<div class="container">
<h3>Input Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_user/proses_add.php" method="post">
        <div class="col">
            <label for="txt_user">Nama</label>
            <input type="text" id="txt_nama" name="txt_nama"
            oninvalid="this.setCustomValidity('Nama Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col">
            <label for="txt_user">Username</label>
            <input type="text" id="txt_user" name="txt_user"
            oninvalid="this.setCustomValidity('Username Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col">
            <label for="txt_pasw">Password</label>
            <input type="password" id="txt_pasw" name="txt_pasw"
            oninvalid="this.setCustomValidity('Password Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col">
            <label for="txt_pasw2">Ulangi Password</label>
            <input type="password" id="txt_pasw2" name="txt_pasw2"
            oninvalid="this.setCustomValidity('Password Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col">
            <button type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php
    }elseif($_GET['aksi'] == "ubah"){
        // variabel untuk menampung value dari variabel user yang dikirim lewat url
        $usernya = $_GET['user'];
        $query_getdata = mysqli_query($koneksidb, "select * from mst_user where username= '".$usernya."'");
        $data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
<h3>Ubah Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_user/proses_edit.php" method="post">
        <div class="col">
            <label for="txt_user">Nama</label>
            <input type="text" id="txt_nama" name="txt_nama"
            oninvalid="this.setCustomValidity('Nama Wajib Diisi!!')" required="true" oninput="setCustomValidity('')" value="<?php echo $data['nama']?>">
        </div>
        <div class="col">
            <label for="txt_user">Username</label>
            <input type="text" id="txt_user" name="txt_user"
            oninvalid="this.setCustomValidity('Username Wajib Diisi!!')" required="true" oninput="setCustomValidity('')" value="<?php echo $data['username']?>">
        </div>
        <div class="col">
            <label for="txt_pasw"> Ganti Password</label>
            <input type="hidden" name="pass_lama" value="<?php echo $data['password']?>">
            <input type="password" id="txt_pasw" name="txt_pasw">
        </div>
        <div class="col">
            <label for="txt_pasw2">Ulangi Password</label>
            <input type="password" id="txt_pasw2" name="txt_pasw2">
        </div>
        <div class="col">
            <button type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php 
}
?>