<?php

include_once("config.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama',username='$username',password='$password',email='$email' WHERE id=$id");

    header("Location: akun.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($data = mysqli_fetch_array($result)) {
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];
    $email = $data['email'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index2.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit3.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>