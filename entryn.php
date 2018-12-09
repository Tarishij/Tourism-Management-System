<?php
session_start();
$train=$_GET['tname'];
$_SESSION['namee']="train";
$_SESSION['nn']=$train;
$src=$_SESSION['src'];
$des=$_SESSION['des'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
     $q1="select * from train where source='$src' and destination='$des' and train='$train';" ;
      $result=mysqli_query($conn,$q1);
$row=mysqli_fetch_array($result);

$amt=$row['non ac'];
$u=$_SESSION['username'];
$arr=$row['start'];
$dep=$row['end'];
$_SESSION['arr']=$arr;
$_SESSION['dep']=$dep;
$nop=1;
$_SESSION['type']="Non AC Class";
$_SESSION['amountf']=$amt;
$mail=$_SESSION['mail'];
$date=$_SESSION['date'];
 $q="insert into trans_detail values ('$u' , '$mail','$src','$des','$train','Non AC','$amt','$arr','$dep','$date','$nop')" ;
      mysqli_query($conn,$q);
      echo $amt;
      header("Location:payment2.php");
  
?>


