<!DOCTYPE html>
<html lang="en">

<head>

  <title>Burger Store (Admin)</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#">PAPAGUNG (Admin Server)</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index2.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orderlist2.php">Order List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="akun.php">Account List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about2.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact2.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Fast Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead" style="background-image: url('img/bg2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
           <h1><span class="font-weight-bold">PAPAGUNG BURGER</span></h1>
           <p class="lead">Best Indonesia Burger Ever!</p>
           <h2><p class="font-weight-bold">Hello Admin:D</p></h2>
          </div>
        </div>
      </div>
    </div>
  </header>
  <center>
<h1 class="font-weight-bold">LIST ORDER</h1>
<h3>-------------------------</h3>
<br>
<table width="75%" border='1'>
<tr>
        <th>Nama</th> 
        <th>Username</th> 
        <th>Password</th> 
        <th>Email</th> 
        <th>Aksi</th>
    </tr>
    </center>
    <?php
include "koneksi.php";

$query = "SELECT * FROM user";

$sql = mysqli_query($connect, $query);

while ($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td><button><a href='edit3.php?id=".$data['id']."'>Ubah<a></button>
    <button><a href='delete3.php?id=".$data['id']."'>Hapus<a></button></td>";
    echo "</tr>";
}
?>
</table>
<br>
<br>
    <a href="index2.php">Kembali Ke Home</a><br/><br/>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>