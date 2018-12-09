<?php
session_start();
        
        $pkid=$_GET['pkid'];
$dest=$_GET['dest'];
$day=$_GET['days'];
$night=$_GET['night'];
$img=$_GET['img'];
$amount=$_GET['amount'];
$_SESSION['pid']=$pkid;
$_SESSION['das']=$day;
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="insert into detail values ('$dest' , '$pkid','$day','$night' , '$amount','$img')" ;
      mysqli_query($conn,$q1);

        header("Location:admin2.php");
        ?>