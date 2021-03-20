<?php
//$mysqli = new mysqli ('localhost' , 'root' , '' , 'alpha_db') or die(mysqli_error($mysqli));


 $con = mysqli_connect('localhost' , 'root');
 mysqli_select_db($con , 'alpha_db');
// if($con){
// 	echo "connected";
// }else{
// 	echo "not connected";
// }
?>
