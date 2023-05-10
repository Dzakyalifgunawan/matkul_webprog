<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="form.php">Tambah Data</a>
                <table class="table table-bordered mt-1">
                    <tr>
                        <td scope="col">id_user</td>
                        <td scope="col">Username</td>
                        <td scope="col">Password</td>
                        <td scope="col">is_Active</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
                <h3>Form Input Data</h3>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">id_user</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputkategori">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputkategori">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputkategori">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">is_active</label>
                </div>
                <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Batal</i></button>
                <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>            
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
