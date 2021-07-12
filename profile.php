<?php
session_start();
include 'connection.php';
error_reporting(0);
$name = $_SESSION['email'];
$psw = $_SESSION['password'];
if($name==false)
{
  header('location:login.php');
}
$query = "select * from register where email='$name' and password='$psw'";
$data =  mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
echo "Welcome ".$result['name'];
?>
<img align = 'left' hspace = '20' src='<?php echo $result['picsource'];  ?>' alt="picture" height="200" width="200">
<br>
<a href="logout.php">Signout</a>
