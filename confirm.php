<?php
ob_start();
session_start(); 
include 'db.php';
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$medicine_name=$_SESSION['medicine_name'];
$sql="insert into `medicine_order_223` (username,email,medicine) values ('$username','$email',' $medicine_name')";        
$result=mysqli_query($con,$sql);
header('location:user.php');
?>
