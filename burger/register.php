<?php

$db=mysqli_connect("localhost","root","","data");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPAGUNG REGISTER FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
<body>
<form class="kotak" action="login.php" method="post">
<h1 style="text-align:center;text-transform: uppercase;">REGISTER FORM</h1>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault01">Nama</label>
      <input type="text" name="nama" class="form-control" id="validationDefault01" placeholder="Masukan Nama Anda" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" name="username"class="form-control" id="validationDefaultUsername" placeholder="Input Username" value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>"  required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault03">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="password" name="password" class="form-control" id="validationDefault03" placeholder="Input Password" value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>"  required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault04">Email</label>
      <input type="text" name="email" class="form-control" id="validationDefault04" placeholder="Masukan Email Anda" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"required>
    </div>
  </div>
  <br> 
  <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
  <br>
  <br>
  <a href="login.php">Sudah Punya Akun?? Click Here!</a>
</form>

</body>
</html>