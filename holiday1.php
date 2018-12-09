
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}

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
.bg {
    /* The image used */
    background-image: url("https://cdn.londonandpartners.com/visit/london-organisations/tower-bridge/63730-640x360-tower-bridge-cam-640.jpg");

    max-width:100%;
max-height:100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

  img{
    float:left;
  }
  div.e{
    margin: auto;
    padding: 10px;
    width:60%;
    height: 230px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.active{
  background-color: red;
}
</style>
</head>
<body>


<div class="navbar">
  <a class="active" href="holiday1.php">View Detail</a>
  <a href="image.php">Images</a>
  <a href="book.php">Book</a>
</div>

</body>
</html>


<?php 
session_start();
if(isset($_POST['package'])){
$package = $_POST['package'];
$_SESSION['pkg']=$package;
}
$value = $_SESSION['select'];
$no=$_SESSION['pkg'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
    $res=mysqli_query($conn,"select * from detail where destination='$value' and pid='$no'") or die("failed");
    	$r=mysqli_fetch_assoc($res);
    $pid= $r['pid'];
   // $_SESSION['night']=$r['night'];
    $res=mysqli_query($conn,"select * from hotel where pid='$pid'") or die("failed");

    $day=array();
    $sight=array();
    $hotel=array();
    $amount=array();
    $star=array();
    $image=array();
    $key=0;
    while($r=mysqli_fetch_assoc($res)){
    	       $day[$key]=$r['day'];
               $sight[$key]=$r['sight'];
               $hotel[$key]=$r['hotel'];
                $image[$key]=$r['image'];
               $star[$key]=$r['star'];
               $key=$key+1;
          } 
          $size=$key;
          $key=0;  
               while($key<$size){
                $img=$image[$key];
                $str=$star[$key];
                $not=5-$str;
                echo" <div class='e'>
                    <img src='$img' style='width:200px;height:200px;margin-right:15px;'>
                    Day:  ".$day[$key]." <br>
                Sightseen: ".
               $sight[$key]." <br>
                Hotel : ".
               $hotel[$key].
                "<br>Star:  ".$star[$key].
                "<br>";
                 while($str!=0){
                echo "<span class='fa fa-star checked'></span>";
                $str--;
              }
              while($not!=0){
                echo "<span class='fa fa-star '></span>";
                $not--;
              }

              echo "</div><p>"; 
               $key=$key+1;
                
               } 

?>

