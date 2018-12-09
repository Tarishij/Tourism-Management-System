<?php
session_start();
$train=$_GET['tname'];
$_SESSION['nn']=$train;
$src=$_SESSION['src'];
$des=$_SESSION['des'];
$_SESSION['namee']="train";
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
     $q1="select * from train where source='$src' and destination='$des' and train='$train';" ;
      $result=mysqli_query($conn,$q1);
$row=mysqli_fetch_array($result);

$amt=$row['ac'];
$arr=$row['start'];
$dep=$row['end'];
$_SESSION['arr']=$arr;
$_SESSION['dep']=$dep;

$_SESSION['type']="AC Class";
$_SESSION['amountf']=$amt;
$u=$_SESSION['username'];
$mail=$_SESSION['mail'];
$date=$_SESSION['date'];
$nop=1;
 $q="insert into trans_detail values ('$u' , '$mail','$src','$des','$train','AC','$amt','$arr','$dep','$date','$nop')" ;
      mysqli_query($conn,$q);
header("Location:payment2.php");

?>

