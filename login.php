
<?php  require 'login_action.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
<style type="text/css">
	.error{
		color: red;
	}
	label{
		letter-spacing: 1px;font-size: 1em;
	}
	h3,h5{
		letter-spacing: 2px;
	}
	


</style>
		
</head>
<body>
	
	<div class="container-fluid  bg-primary" >
		<center><?php if(isset($_SESSION['logout'])){
			echo $_SESSION['logout'];
			unset($_SESSION['logout']);
		} 
else{

	if (isset($_SESSION['fail_msg'])) {
		echo $_SESSION['fail_msg'];
		unset($_SESSION['fail_msg']);
	}
}

		?></center>
	<center><h3 style="margin-top: 6px;">Welcome To <span style="color: #5cb85c;">LOGIN</span> Zone</h3>
		<h5 >Please fill the valid information</h5></center><hr>
		<div class="row" > 

			<div class="col-md-9 col-md-offset-3">
		
<form  action="login_action.php" method="POST" >
	<div class="form-group">
		<div class="row">
		<div class="col-md-4">
		<label>UserName:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="text" name="username" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"><?php
if(isset($_SESSION['name_error'])){
	echo "<p>";
   echo $_SESSION['name_error'];
   unset($_SESSION['name_error']);
  echo "</p>";

}
else
	{
		if(isset($_SESSION['len_err'])){
	echo "<p>";
   echo $_SESSION['len_err'];
   unset($_SESSION['len_err']);
  echo "</p>";

}
}
?>
	
</span>
</div>
</div>
	</div>
	
	
	<div class="form-group">
	<div class="row">
		<div class="col-md-4">
		<label>Password:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="password" name="password" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"><?php
if(isset($_SESSION['password_error'])){

	echo "<p>";
   echo $_SESSION['password_error'];
   unset($_SESSION['password_error']);
  echo "</p>";

}


?></span>
</div>
</div>
	</div>
		

<div style="padding-bottom: 325px;" >
   
    <input type="submit" class="btn btn-success"  value="Login" name="login"> <span><a href="registration.php" style="color: white;">Not Registered Yet?</a></span>


  </div>
</form>
</div>
</div>

</div>


</body>
</html>