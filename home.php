<?php 
	session_start();
	if(!isset($_SESSION['username']))
		header('location:login.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="container">
	<h3 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h3>
	
<td> <button class="btn-warning btn"> <a href="logout.php"class="text-white"> Logout Data </a>  </button> </td>
	<td> <button class="btn-success btn"> <a href="insert.php" class="text-white"> Insert Data </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="display.php" class="text-white">Display Data </a> </button> </td>
</div>	