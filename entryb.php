<?php
session_start();
$_SESSION['namee']="flight";
$flight=$_GET['fname'];
$_SESSION['nn']=$flight;
$src=$_SESSION['src'];
$des=$_SESSION['des'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
     $q1="select * from flight where source='$src' and destination='$des' and flight='$flight';" ;
      $result=mysqli_query($conn,$q1);
$row=mysqli_fetch_array($result);
$amt=$row['business'];
$arr=$row['start'];
$dep=$row['end'];
$date=$_SESSION['date'];
$_SESSION['arr']=$arr;
$_SESSION['dep']=$dep;
$_SESSION['amountf']=$amt;
$_SESSION['type']="Business Class";
$u=$_SESSION['username'];
$mail=$_SESSION['mail'];
$nop=1;
 $q1="insert into trans_detail values ('$u' , '$mail','$src','$des','$flight','Business','$amt','$arr','$dep','$date','$nop')" ;
      mysqli_query($conn,$q1);
      echo $amt;
header("Location:payment2.php");
?>