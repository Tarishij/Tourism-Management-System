
<?php
session_start();
$value = $_SESSION['select'];   
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
    $res=mysqli_query($conn,"select * from detail where destination='$value'") or die("failed");
      $r=mysqli_fetch_assoc($res);

      if(isset($_POST['people'])&&isset($_POST['date'])){

    $pamount=$r['amount']*$_POST['people']; 
    $pid= $r['pid'];
    $res1=mysqli_query($conn,"select * from hotel where pid='$pid'") or die("failed");
    $amt=0;
    while($r1=mysqli_fetch_assoc($res1)){
   $amt=$amt+$r1['amount'];
  } 
  $total=$amt+$pamount;
  $_SESSION['tot']=$total;
  $_SESSION['person']=$_POST['people'];
   $_SESSION['date']=$_POST['date'];

}
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  <style>
    .bg {
    /* The image used */
    background-image: url("https://www.apec.org/-/media/Images/NewsRelease/2017/0620_Tourism.jpg?h=533&w=730&la=en&hash=5A182FDF8B299D339BDA4BFE8AE494656C615AB0");
opacity: 1;
height:100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  .container {
    
    margin:auto;
   width: 300px;
    padding: 16px;
    background-color:     #F5F5F5;
vertical-align: middle;

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

<form class="container" style="margin-top: 8%">
  <center><label> Amount: Rs.<?= $total?></label>
<br>
  <input type="submit" name="book" id="btn" value="Confirm Booking"  formaction="payment.php">
</center>
</form>



  </div>
  </body>
</html>
