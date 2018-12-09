<?php

$source=$_POST['source'];
$dest=$_POST['dest'];
$tname=$_POST['tname'];
$ac=$_POST['ac'];
$nonac=$_POST['nonac'];
$arr=$_POST['arr'];
$dep=$_POST['dep'];
        
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="insert into train values ('$source' , '$dest','$tname','$ac' , '$nonac','$dep','$arr')" ;
      mysqli_query($conn,$q1);
      header("Location:choose.php");
     

?>