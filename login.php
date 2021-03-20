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

   <div class="container">
   	<div class="row">
   		<div class="col-lg-6">
   			<h2>Login Form</h2>
   			<form action="validation.php" method="post">
   				<div class="form-group">
   					<label>Username</label>
   					<input type="text" name="username" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Password</label>
   					<input type="password" name="password" class="form-control">
   				</div>
   				<button  type="submit" class="btn btn-primary">Login</button>
   				
   			</form>
   			
   		</div>
   		<div class="col-lg-6">
   			<h2>Signin Form</h2>
   			<form action="registration.php" method="post">
   				<div class="form-group">
   					<label>Username</label>
   					<input type="text" name="username" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Password</label>
   					<input type="password" name="password" class="form-control">
   				</div>
   				<button type="submit" class="btn btn-primary">Signin</button>
   				
   			</form>
   			
   		</div>
   	</div>
   </div>
</body>
</html>