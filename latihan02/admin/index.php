<?php

require_once("../koneksidb.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <section>
        <div class="col-md">
          <h2 class="title">Login</h2>
        </div>
        <form action="checklogin.php" method="post">
          <?php
            session_start();
            session_destroy(); 
            if(isset($_SESSION['pesan'])){
                echo $_SESSION['pesan'];
            }else{
                session_unset();
            }
            
          ?>       
          <div class="mb-3 row">
            <div class="col-md-3 chi"></div>
            <div class="col-md-2">Username</div>
            <div class="col-md">
              <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
            </div>
            <div class="col-md-2"></div>
          </div>
          <div class="mb-3 row">
            <div class="col-md-3 chi"></div>
            <div class="col-md-2">Password</div>
            <div class="col">
              <input type="password" class="form-control" type="text"  name="password" id="password" placeholder="Masukan Password" aria-label="default input example">
            </div>
            <div class="col-md-2"></div>
          </div>
          <div class="mb-3 row">
            <div class="col-md-3"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2 d-grid gap-2 d-md-block">
              <button class="btn btn-primary" type="submit" name="buttonlogin" id="buttonlogin" onclick="checklogin('home.html')"><i class="bi bi-save2"></i> Simpan</button>
            </div>
            <div class="col-md-1"></div>
          </div>
        </form>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>