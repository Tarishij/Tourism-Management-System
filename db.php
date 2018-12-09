<?php
session_start();
$seen=$_POST['seen'];
$daa=$_POST['count'];
$hotel=$_POST['hotel'];

$star=$_POST['star'];
$pimage=$_POST['pimage'];
$image=$_POST['image'];
$amount=$_POST['hamount'];

        
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      
      $pid=$_SESSION['pid'];
     // $daa=$_SESSION['count'];
      
     $q4="insert into hotel values ('$pid','$daa','$seen','$hotel','$star','$amount','$image','$pimage')" ;
      mysqli_query($conn,$q4);
     //$_SESSION['c']++;
      header("Location:admin2.php");
?>