
<?php

if (isset($_POST['submit'])) {
  include "koneksi.php";
  $nama=$_POST['nama'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  
  $sql = mysqli_connect('localhost', 'root', '', 'data');
  $query = "INSERT INTO user (nama, username, password, email) VALUES ('$nama', '$username', '$password','$email')";
  
  if ( mysqli_query($sql, $query) ) {
      echo 'berhasil tersimpan';
    }else{
      echo 'gagal tersimpan';
    }
}else{
echo"";
}
?>
<?php
session_start();
require('koneksi.php');
    if (isset($_POST["login_btn"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_login  = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $hasil = mysqli_fetch_array($result);
        if($username == "agungsiadmin" && $password="admin123"){
            header("Location: index2.php");
          }else{
          if(mysqli_num_rows($result) == 0){
              header("Location: login.php");
          }else{
              if ($password <> $hasil['password']){
                  header("Location: login.php");
              }else{
                  $_SESSION['username'] = $hasil['username'];
                  header ("Location: index.php");
                  exit;
              }
          }
          $error = true;
      }
      }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPAGUNG LOGIN FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="form">
    <h1>LOGIN FORM</h1>
    <form action="" method="post">
        <label for="" >USERNAME</label>
        <br>
            <div class="col-auto">
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="username" placeholder="Username">
            </div>
    <br>
    <label>PASSWORD</label>
    <br>
    <div class="col-auto">
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>
    <br>
    <center><button type="submit" name="login_btn" class="btn btn-outline-primary btn-block">LOGIN</button>
    <br>
    </form>
    <a href="register.php">Belum Punya Akun?? Click Here!</a></center>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>