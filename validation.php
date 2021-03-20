<?php
//$mysqli = new mysqli ('localhost' , 'root' , '' , 'alpha_db') or die(mysqli_error($mysqli));

session_start();  


 $con = mysqli_connect('localhost' , 'root');
 mysqli_select_db($con , 'alpha_db');

$name = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM `admin_tbl` WHERE  username = '$name' && password ='$password'";

$result =  mysqli_query($con , $q);

$num = mysqli_num_rows($result);

if($num ==1){
  
  $_SESSION['username'] = $name;

  header('location:home.php');
}else{
	header('location:login.php');
}
?>