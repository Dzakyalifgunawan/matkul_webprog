<?php

require_once("../koneksidb.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <h3>Logo Perusahaan</h3>
            <center>
                <h3>Dzaky</h3>
            </center>
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="menu col-md-3 mt-3">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="?modul=mod_kategori">Blog kategori</a></li>
                        <li class="list-group-item"><a href="?modul=mod_blog">Data Blog</a></li>
                        <li class="list-group-item"><a href="?=modul_user">Data user</a></li>
                        <li class="list-group-item"><a href="">Data Menu</a></li>
                    </ul>
                </div>
                <div class="konten col-md"></div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>