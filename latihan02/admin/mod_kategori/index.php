<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">    
    <title>Kategori Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            
            </div>
            <div class="col-md mt-3">
                <a class="btn btn-primary btn-sm" href="form.php">Tambah Data</a>
                <table class="table">
                    <tr>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mbolang</td>
                        <td>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
                        </td>   
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kuliah</td>
                        <td>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"> Edit</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>