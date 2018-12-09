<!DOCTYPE html>
<html>
<head>
    <title>Images :</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="image.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #696969;
}

  
  div.e{
    margin: auto;
    padding: 10px;
    width:450px;
    height: 300px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.active{
  background-color: red;
}
</style>
</head>
<body>

<div class="navbar">
  <a  href="holiday1.php">View Detail</a>
  <a class="active" href="image.php">Images</a>
  <a href="book.php">Book</a>
</div>
</body>
</html>

<?php 
session_start();
$value = $_SESSION['select'];
$pkg=$_SESSION['pkg'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
    $res=mysqli_query($conn,"select * from detail where destination='$value' and pid='$pkg'") or die("failed");
        $r=mysqli_fetch_assoc($res);
    $pid= $r['pid'];
    $res=mysqli_query($conn,"select * from hotel where pid='$pid'") or die("failed");
    $image=array();
    $key=0;
    while($r=mysqli_fetch_assoc($res)){
               $image[$key]=$r['pimage']; 
               $key=$key+1;    
     } 
          $size=$key;
          $key=0;
           
     while($key!=$size){
     $img=$image[$key];
     echo" <div class='e'><img src='$img' width='450' height='300'>";
     echo "<br></div><p>";
     $key=$key+1;
    }
    

?> 
