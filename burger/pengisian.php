<!DOCTYPE html>
<html lang="en">
<title>Burger Store</title>

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
      <a class="navbar-brand" href="#">PAPAGUNG</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
     </div>
  </nav>
  <header class="masthead" style="background-image: url('img/bg2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          <center>
<h1>Tambahkan Data</h1>

<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr> 
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr> 
            <td>Pesanan</td>
            <td><input type="text" name="pesanan"></td>
        </tr>
        <tr> 
            <td>Telp</td> 
            <td><input type="text" name="telp"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
    <h7>Kembali ke Home??<a href="index.php">Click Here!</a></h7>
</form>
</center>
            </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>
</html>