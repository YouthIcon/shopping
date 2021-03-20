<?php 
include 'conn.php';
if(isset($_POST['done'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
$filename = 	$_FILES["image"]["name"];
$tempname = 	$_FILES["image"]["tmp_name"];
	$folder = "Images/.$filename";
	//echo $folder;
	move_uploaded_file($tempname, $folder);
	//echo "<img src='$folder' height='100' width='100'/>";

	$q = "INSERT INTO `alpha_tbl`(`name`, `email`, `phone` , `picture`) VALUES ('$name','$email','$phone','$folder')";
 		$query = mysqli_query($con , $q);	

 	//$query = mysqli_query($con,$q);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
<?php// header('location:display.php');?>
 <form method="post" action="display.php" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Phone: </label>
 <input type="tel"  name="phone" maxlength="10" class="form-control"> <br>

 <label> Image: </label>
 <input type="file" name="image" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>