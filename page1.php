
<?php require 'login_action.php' 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>

</head>
<body>
	
	<div class="container-fluid  bg-primary" >
		<center><h2 style="color: red;">
			<?php 
			if(isset($_SESSION['er'])){

	echo "<p>";
   echo $_SESSION['er'];
   unset($_SESSION['er']);
  echo "</p>";

} ?>
</h2></center>
	
<div style="padding-bottom: 530px;" >
   
  <center><button class="btn btn-success" onclick="javascript:window.location.href='logout.php'; ">Logout</button></center>


  </div>

</div>
</body>
</html>