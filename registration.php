<?php
//$mysqli = new mysqli ('localhost' , 'root' , '' , 'alpha_db') or die(mysqli_error($mysqli));

session_start();  

header('location:login.php');

 $con = mysqli_connect('localhost' , 'root');
 mysqli_select_db($con , 'alpha_db');

$name = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM `admin_tbl` WHERE  username = '$name' && password ='$password'";

$result =  mysqli_query($con , $q);

$num = mysqli_num_rows($result);

if($num ==1){
	echo "duplicate data";
}else{
	$qw = "INSERT INTO `admin_tbl`( `username`, `password`) VALUES ('$name' , '$password')";
	mysqli_query($con , $qw);
}
?>