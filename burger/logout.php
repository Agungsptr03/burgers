<?php
   session_start();
   session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPAGUNG LOGOUT FORM</title>

    <link rel="stylesheet" type="text/css" href="logout.css">
</head> 
<body>
<h1>Matur Nuwun:)</h1>
<div class="box">
	<a class="button" href="#popup1">Click Here to Logout</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>From PAPAGUNG BURGER</h2>
		<a class="close" href="login.php">&times;</a>
		<div class="content">
			Terimakasih atas berkunjung ke PAPAGUNG BURGER STORE, Anda menikmati, kami pun ikut senang:D.
		</div>
	</div>
</div>
</body>
</body>
</html>