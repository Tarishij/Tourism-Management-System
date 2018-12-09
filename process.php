<?php
session_start();
$user=$_POST['username'];
$pwd=$_POST['password'];
$mail=$_POST['mail'];


$conn=mysqli_connect("localhost","root","","db");
if(!$conn)
die("connection failed");
else
{

$result=mysqli_query($conn,"select * from log where mail='$mail'") or die("failed");
 $row=mysqli_fetch_array($result);

 /*$redirect_location = "login.php";*/
if(!isset($user) || trim($user) == '' ||!isset($pwd) || trim($pwd) == ''){
  	$_SESSION["empty"]="Fields marked are mandatory!";
   header("Location:overview.php");
    
}
 else if($row['username']==$user && $row['password']==$pwd){
  
  $_SESSION['username']=$user;
  $_SESSION['pwd']=$pwd;
  $_SESSION['mail']=$mail;
  header("Location:tms.php");  /* another way of sharing variables among pages */
  die();
  /*$redirect_location="tm.php";*/
}
  
  else{
   $_SESSION["incorrect"]="Invalid username or password!";
   header("Location:overview.php");
      } 
}
?>