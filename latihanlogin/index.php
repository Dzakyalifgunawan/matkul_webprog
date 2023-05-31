<?php

require_once("koneksi_db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerlogin">
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
            <div class="col">
                <label for="txt_user">Username</label>
                <input type="text" id="txt_user" name="txt_user">
            </div>
            <div class="col">
                <label for="txt_pasw">Password</label>
                <input type="password" id="txt_pasw" name="txt_pasw">
            </div>
            <div class="col">
                <button type="submit" name="btn_login">Login</button>
            </div>     
        </form>
    </div>
</body>
</html>
