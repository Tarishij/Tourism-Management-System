<?php
session_start();
if(isset($_SESSION['err']))
echo "<script>alert('Enter valid destination')</script>";
if(isset($_SESSION['done']))
echo "<script>alert('Your payment is succesfull.')</script>";
unset($_SESSION['done']);
unset($_SESSION['err']);
?>

<!DOCTYPE html>
<html>
<title>User</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
body, html {
    height: 100%;
    margin: 0;
}
.navbar {
    overflow: hidden;
        background-color:rgb(150,150,150);
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
.bg {
    /* The image used */
    background-image: url("https://clickhowto.com/wp-content/uploads/2017/11/Sights-of-London.jpg");

   height: 70%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.active{
  background-color:  #111;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color:#696969;
}
</style>
</head>
<body>

<div class="bg">
  <div class="w3-container">
     <h4 style="color:red;font-size=10px;float: left;"><b>      EXPLORE AT</b></h4>

  <div class="w3-dropdown-hover w3-right">
  <button  class="w3-button w3-green"><i class="fa fa-user-circle"></i>  <?= $_SESSION['username'] ?> </button>
   <div  class="w3-dropdown-content w3-bar-block w3-border" style="right: 0"> 
     <a href="pwd.php" class="w3-bar-item w3-button">Change Password</a>
     <a href="tourism.php" class="w3-bar-item w3-button">Logout</a>
  </div>

</div>
</div>
</div>
<div class="navbar" >
  <a class= "active" href="tms.php">Holidays</a>
  <a href="viewflight.php">Flight</a>
  <a href="viewtrain.php">Train</a>

</div>

  
  <?php
    $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="select distinct(destination) from detail;" ;
      $result=mysqli_query($conn,$q1);
      $dest=array();
      $key=0;
      while($row=mysqli_fetch_array($result)){
               $dest[$key]=$row['destination'];
               $key=$key+1;
          }
          $size=$key;
          $key=0;
         
  ?>
  <pre>
  <form method=POST action="holiday.php" style="display: inline;" >
    <center><label>Destination: </label>
      <select name="select" style='display :block;'>
          <option  >To..</option>
           <?php 
               while($key!=$size){
               echo "<option>".$dest[$key]."</option>";
               $key=$key+1;
          }
           ?>
        </select><input type="submit" id="btn" name="search" value="Search" ></center>
  </form>
</pre>
<script>
  function func(){
    document.getElementById("lo").classList.toggle("show");
  }
  window.onclick=function(event){
    if(!event.target.matches('.drop')){
      var dropdowns = document.getElementsByClassName("drop-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
    }
  }
</script>

</body>
</html>
