<?php

include_once("config.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $pesanan=$_POST['pesanan'];
    $telp=$_POST['telp'];


    $result = mysqli_query($mysqli, "UPDATE list SET name='$name',pesanan='$pesanan',telp='$telp' WHERE id=$id");


    header("Location: orderlist.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM list WHERE id=$id");

while($data = mysqli_fetch_array($result)) {
    $name = $data['name'];
    $pesanan = $data['pesanan'];
    $telp = $data['telp'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="orderlist.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Pesanan</td>
                <td><input type="text" name="pesanan" value=<?php echo $pesanan;?>></td>
            </tr>
            <tr> 
                <td>Telp</td>
                <td><input type="text" name="telp" value=<?php echo $telp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>