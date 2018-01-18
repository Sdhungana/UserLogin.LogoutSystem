<?php
$con=new mysqli("localhost","root","","logbook");
/*$sql="CREATE DATABASE logbook ";
$run= mysqli_query($con,$sql);
mysqli_select_db($con,"logbook");
$table="CREATE TABLE userinfo(
Id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FirstName VARCHAR(255) NOT NULL,
LastName VARCHAR(255) NOT NULL,
Email VARCHAR(20) NOT NULL,
Address VARCHAR(30) NOT NULL,
PhoneNo int(20) NOT NULL,
Password VARCHAR(50) NOT NULL)";
mysqli_query($con,$table); //Object-oriented way of runing query
$alter="ALTER TABLE userinfo 
ADD Gender ENUM('Male','Female')";
if($con->query($alter)===TRUE){ //$con->query($alter)=Procedural way of running query
	die("Error".mysqli_errno($alter));
}*/
session_start();



?>