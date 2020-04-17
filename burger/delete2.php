<?php

include_once("config.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM list WHERE id=$id");


header("Location: orderlist2.php");
?>