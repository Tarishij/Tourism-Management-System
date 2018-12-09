<?php

$source=$_POST['source'];
$dest=$_POST['dest'];
$flname=$_POST['flname'];
$eco=$_POST['economy'];
$bus=$_POST['business'];
$arr=$_POST['arr'];
$dep=$_POST['dep'];
        
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="insert into flight values ('$source' , '$dest','$flname','$eco' , '$bus','$dep','$arr')" ;
      mysqli_query($conn,$q1);
      header("Location:choose.php");
     

?>