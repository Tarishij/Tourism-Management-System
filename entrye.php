<?php
session_start();
$flight=$_GET['fname'];

$_SESSION['namee']="flight";
$_SESSION['nn']=$flight;
$src=$_SESSION['src'];
$des=$_SESSION['des'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
     $q1="select * from flight where source='$src' and destination='$des' and flight='$flight';" ;
      $result=mysqli_query($conn,$q1);
$row=mysqli_fetch_array($result);
$amt=$row['economy'];
$arr=$row['start'];
$dep=$row['end'];
$_SESSION['arr']=$arr;
$_SESSION['dep']=$dep;
$date=$_SESSION['date'];
$_SESSION['amountf']=$amt;
$_SESSION['type']="Economy Class";
$nop=1;
$u=$_SESSION['username'];
$mail=$_SESSION['mail'];
 $q="insert into trans_detail values ('$u' , '$mail','$src','$des','$flight','Economy','$amt','$arr','$dep','$date','$nop')" ;
      mysqli_query($conn,$q);
      
header("Location:payment2.php");
?>

