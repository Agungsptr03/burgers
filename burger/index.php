<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location: login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

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
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orderlist.php">Order List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section_title text-center mb-80">
                <h1><span class="font-weight-bold">Burger Menu</span></h1>
                <p>----------------------------------------</p><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 col-lg-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/1.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Beefy Burgers</h3>
                    <p>Burger dengan Komposisi Extra Beef yang mengandung Extra Protein yang pas bagi tubuh anda. Tanpa lebih dan kurang sedikitpun</p>
                    <h5><span>Rp 20.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/2.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Burger Boys</h3>
                    <p>Sesuai dengan namanya Boys. Selera yang pas untuk para remaja lelaki sejati. Yeah bisa dibilang Boys Lovers.</p>
                    <h5><span>Rp 30.000,00</span></h5></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/3.png" alt=""><br>
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Burger Bizz</h3>
                    <p>Burger yang dibuat dengan cara style HypeBIZZ, rasa HypeBizz ini akan muncul saat anda memakan Burger Bizz ini.</p>
                    <h5><span>Rp 65.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-lg-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/4.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Crackles Burger</h3>
                    <p>Burger dengan komposisi yang sangat rare, yang terdiri dari telur naga yang dikumpulkan oleh Tuan Son Goku.</p>
                    <h5><span>Rp 55.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/5.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Bull Burgers</h3>
                    <p>Bull artinya Seekor Banteng. Jika anda sudah memakan Burger ini maka dijamin anda akan merasakan apa yang dirasakan banteng tersebut.</p>
                    <h5><span>Rp 42.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/6.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Rocket Burgers</h3>
                    <p>Khusus para orang yang ingin bercita - cita menjadi astronot, nah Burger ini sangat cocok bagi anda.</p>
                    <h5><span>Rp 70.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/7.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Smokin Burger</h3>
                    <p>Buat anda yang bosan dengan merokok atau vape, Burger Smoke ini lah yang cocok sebagai pengganti roko / vape anda, dan rasanya tidak kalah jauh kok.</p>
                    <h5><span>Rp 64.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="img/burger/8.png" alt="">
                </div>
                <div class="info">
                    <h3 class="font-weight-bold">Boecin Burger</h3>
                    <p>Rekomendasi nih untuk orang - orang yang sulit mendapatkan pacar yang diinginkan, dengan memakan burger ini maka dijamin auto deh dapet.</p>
                    <h5><span>Rp 55.000,00</span></h5><br><br>
                </div>
            </div>
        </div>
    </div>
    <br><center><a href="pengisian.php" class="btn btn-outline-secondary">Order Now!</a></center><br>
</div>
  <hr>

  <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                                Malang
                        </h3>
                        <p>Jl.Danau Bucin, No.03<br> 
                                Sawojajar <br>
                                <a href="#">papagung@burger.com</a></p>
                        <a class="number" href="#">+62 821 362 1003</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Banyuwangi
                        </h3>
                        <p>Jl.Masa Depan, No.12A<br> 
                                Banyuwangi Kota <br>
                                <a href="#">papagung@burger.com</a></p>
                        <a class="number" href="#">+62 821 362 1003</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Stay Connected!
                                </h3>
                                <form action="logout.php" class="newsletter_form">
                                    <input type="text" placeholder="Klik For Logout --->">
                                    <button type="submit">LOGOUT</button>
                                </form>
                                <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                            </div>
                </div>
            </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Jangan Copyright ya nanti dosa!:)&copy; Agung Saputra</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>