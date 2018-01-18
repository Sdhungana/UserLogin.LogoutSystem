<?php require 'config.php'; ?>

<?php


if(isset($_POST['submit']))
{

if(empty($_POST['username'])  || empty($_POST['password']) || empty($_POST['retypepassword'])) {

if(empty($_POST['username'])){

$_SESSION['name_error']='* UserName is required';
header('location:registration.php');
}

	
if(empty($_POST['password'])){

$_SESSION['password_error']='* Password is required';
header('location:registration.php');
}

if(empty($_POST['retypepassword']))
{

$_SESSION['retype_error']='*Re-typePassword field is empty';
header('location:registration.php');
}

}


else{

if(strlen($_POST['username'])<5)
	{
		$_SESSION['len_error']='* Must be 5 characters long';
		header('location:registration.php');
	}
else
	{
		if($_POST['password']!= $_POST['retypepassword']){
$_SESSION['mismatch_error']='*Password mismatched';
header('location:registration.php');
}

else{


$Username=$_POST['username'];
$Password = md5($_POST['password']);
$Retype_Password = md5($_POST['retypepassword']);
	$query="select Username from registration where Username='$Username'";
	$res=mysqli_query($con,$query);
	$count=mysqli_num_rows($res);
	if($count==0)
	{
		$result= "INSERT INTO registration(Username,Password,Retype_Password)
	VALUES ('$Username','$Password','$Retype_Password')";
	mysqli_query($con,$result);
	header('location:registration.php');
	$_SESSION['msg']='<h2 style="color: #5cb85c;">REGISTRED SUCCESSFULLY!! </h2>';

	}
	else
	{
	header('location:registration.php');
	$_SESSION['msg']='<h2 style="color: red;">USER ALREADY EXISTS!!! </h2>';

	}}}}}
	




?>