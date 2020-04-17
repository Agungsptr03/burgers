<?php
if(isset($_POST['Submit'])) {
include "koneksi.php";
$name=$_POST["name"];
$pesanan=$_POST["pesanan"];
$telp=$_POST["telp"];

$query= "INSERT INTO list (name, pesanan, telp) VALUES ('$name','$pesanan','$telp')";
$result= mysqli_query($connect, $query);
$num=mysqli_affected_rows($connect);
if($num > 0){
    echo "Penambahan Data Berhasil";
} else{
    echo "Penambahan Data Gagal: ".mysqli_connect_error($connect);
}
echo "";
}
?>
<br>    
    <a href="orderlist.php">Melihat Hasil</a>
    </center>