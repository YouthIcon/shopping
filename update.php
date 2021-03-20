<?php

 include 'conn.php'; 

 $id = $_GET['id'];

$q = "SELECT * FROM `alpha_tbl` WHERE id=$id";
 $query = mysqli_query($con,$q);

 $result = mysqli_fetch_assoc($query);

 if(isset($_POST['done'])){

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $filename = 	$_FILES["image"]["name"];
$tempname = 	$_FILES["image"]["tmp_name"];
	$folder = "Images/.$filename";
	//echo $folder;
	move_uploaded_file($tempname, $folder);

 $q = " UPDATE `alpha_tbl` set id=$id, name='$name', email='$email' , phone='$phone' , picture='$folder' where id=$id  ";

 	$query = mysqli_query($con,$q);
header('location:display.php');
 	if ($q){
 		?>
 		<script>
 			alert('Updated');
 		</script>
 	<?php
 	}else{
 		?>
 		<script>
 			alert('Not Updated');
 		</script>
 		<?php
 	}
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
 
 <form   method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" value="<?php echo $result['name'];?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" value="<?php echo $result['email'];?>" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" maxlength="10" name="phone" value="<?php echo $result['phone'];?>" class="form-control"> <br>

<label> Image: </label>
 <input type="file" name="image" value="<img src='<?php echo $res['picture'];?>' height='100' width='100'/>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>