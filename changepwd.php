<?php
session_start();
    $pass1=$_POST['old'];
     $pass2=$_POST['new'];
     
        if(!empty(($_SESSION['username']) and ($_SESSION['pwd']))){
             if($_SESSION['pwd']==$pass1){
                $_SESSION['pwd']=$pass2;
             	$na=$_SESSION["mail"];
                $n=$_SESSION["username"];
                 $con=mysqli_connect("localhost","root","","db");
                 mysqli_select_db($con, 'db');
                 $q1="update log set password= '$pass2' where mail='$na'" ;
    	         mysqli_query($con,$q1);
                 header("Location:tms.php?n=".$n);
             }
             else{
                $_SESSION['oldwrong']="Old password is incorrect!";
                header("Location:pwd.php");
             	

             }
         }
         
    ?>