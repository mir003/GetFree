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
$query = "select * from register";
$data =  mysqli_query($conn,$query);
for ($x = 0; $x <= 3; $x++) {
    $result = mysqli_fetch_assoc($data);
    ?>
    <img align = 'left' hspace = '20' src='<?php echo $result['picsource'];  ?>' alt="picture" height="200" width="200">
    <br>
<?php
}
?>
