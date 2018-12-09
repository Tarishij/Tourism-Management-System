<?php
    session_start();
    $value=$_POST['select'];
    if($value=='To..'){
     $_SESSION['err']="Enter valid destination";
     header("Location:tms.php");
 
    }
    $_SESSION['select'] = $value;
     
    $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
    $result=mysqli_query($conn,"select * from detail where destination='$value'") or die("failed");
 

		        //  echo "<script>alert('e')</script>";
    ?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  img{
    float:left;
  }
  #h{
    text-align: center;
  }
  div.e{
    margin: auto;
    padding: 10px;
    width:60%;
    height: 230;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
</style>
</head>
<body>
  
	 <?php 



   echo'<div class="w3-container"><h4 style="color:red;font-size=10px;float: left;"><b>      EXPLORE AT</b></h4>
  <div class="w3-dropdown-hover w3-right">
  <button  class="w3-button w3-green"><i class="fa fa-user-circle"></i>  '.$_SESSION["username"].' </button>
   <div  class="w3-dropdown-content w3-bar-block w3-border" style="right: 0"> 
     <a href="pwd.php" class="w3-bar-item w3-button">Change Password</a>
     <a href="tourism.php" class="w3-bar-item w3-button">Logout</a>
  </div>

</div>
</div>';
echo "<p id='h'><b>";
    echo $value;
    echo "</b></p>";
	 $i=1;

         while($row=mysqli_fetch_array($result)){
             //select image of packages:
         	$id=$row['pid'];
         	$day=$row['day'];
         	$night=$row['night'];
         	$amt=$row['amount'];
         	$res=mysqli_query($conn,"select image from detail where pid='$id'") or die("failed");
         	$r=mysqli_fetch_assoc($res);
         	$res1=mysqli_query($conn,"select sum(amount) from hotel where pid='$id'") or die("failed");
            $d=mysqli_fetch_assoc($res1);
            $amt=$amt+$d['sum(amount)'];
            $img=$r['image'];
           // $img=mysqli_fetch_object($res)->image;
           // mysqli_free_result($res);

      		echo "<form method='POST' action='holiday1.php'>

          <div class='e'  >
          
             <img src='$img' style='width:200px;height:200px;margin-right:15px;'>

         <button type='submit' id='btn' name='package' value='$id'>Package: $i</button><p>".$day."Days ".$night."Nights</p>
              <p>Amount starting at: Rs.$amt</p>
              
              </div>
		     </form>
		     ";
		     $i++;
               //echo $row['pid'];
          }
       ?>
          


</body>
</html>