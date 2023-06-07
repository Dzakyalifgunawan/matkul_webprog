<div class="container">
<h3>Input Data</h3>
    <form action="" method="post">
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
            <button type="submit" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>