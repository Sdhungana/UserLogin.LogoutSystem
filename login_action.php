<?php require 'config.php'; ?>

<?php
if(isset($_POST['login']))
{

if(empty($_POST['username'])  || empty($_POST['password'])) {

if(empty($_POST['username'])){

$_SESSION['name_error']='* UserName is required';
header('location:login.php');
}

	

if(empty($_POST['password'])){

$_SESSION['password_error']='* Password is required';
header('location:login.php');
}

}


else{


	if(strlen($_POST['username']) < 5)
	{
		$_SESSION['len_err']='* Must be 5 characters long';
		header('location:login.php');
	}
	else
{
$Username=$_POST['username'];
$Password = md5($_POST['password']);
	$query="SELECT  Username,Password from registration WHERE Username='$Username' && Password='$Password' ";
	$res=mysqli_query($con,$query);
	$count=mysqli_num_rows($res);
if($count==1)
	{
		
	
	$_SESSION['er']='<h2 style="color: #5cb85c;">LOGIN SUCCESSFUL!! </h2>';
	header('location:page1.php');

	}
	else
	{  
		 $_SESSION['fail_msg']='<h2 style="color: red;">INCORRECT USERNAME or PASSWORD!!! </h2>';
		 header('location:login.php');
	}
}

} }


?>