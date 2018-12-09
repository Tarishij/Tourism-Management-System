<?php
session_start();
if(isset($_POST['select1'])){
$src=$_POST['select1'];
$dest=$_POST['select2'];
if($src=='From..'){
     $_SESSION['err']="Enter valid entries";
     header("Location:tms.php");
    }
if($dest=='To..'){
     $_SESSION['err']="Enter valid entries";
     header("Location:tms.php");
    }  


$_SESSION['date']=$_POST['date'];
$_SESSION['src']=$src;
$_SESSION['des']=$dest;
}
else{
  $src=$_SESSION['src'];
  $dest=$_SESSION['des'];
}
    $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="select * from train where source='$src' and destination='$dest';" ;
      $result=mysqli_query($conn,$q1);
if(mysqli_num_rows($result)==0){

header("Location:notrain.php");

}

      $train=array();
      $ac=array();
      $nonac=array();
      $start=array();
      $start=array();
      $end=array();
      $key=0;
      while($row=mysqli_fetch_array($result)){
               $train[$key]=$row['train'];
               $ac[$key]=$row['ac'];
               $nonac[$key]=$row['non ac'];
               $start[$key]=$row['start'];
               $end[$key]=$row['end'];
               $key=$key+1;
          }
          $size=$key;
          $key=0;
?>

<html>
<head>

  <title>Train detail</title>
  <style>
.btn{
    background-color: #58D68D;
    color: white;
  margin-top:10px;
    padding:7px;
    cursor:pointer;
  font-size:15px;
  font-weight: bold;
}
.bg {
    /* The image used */
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/VRB_H_1-2_bei_Freibergen.jpg/1200px-VRB_H_1-2_bei_Freibergen.jpg");

height:100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
     opacity: 3;

}

div.e{
  background-color: #F5F5F5  ;
    margin: auto;
    padding: 10px;
    width:50%;
    height: 280;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
</style>
</head>
<body>
  <div class='bg'>
    <br>
  <h2 style="color:red;font-size=30px"><center><?= $src ?> to <?= $dest ?> :</center></h2><br> 
<div class="container">
<?php 
               while($key!=$size){
                
                echo " <div class='e'>
               <form method=GET action='entrya.php'><center>".$train[$key]."</center>
                 <br>
             <pre>    Arrival      Departure</pre>
                <pre>    ".$start[$key]."        ".$end[$key]."</pre>
                <br><br>

             AC : Rs.".$ac[$key]."(per person)<button class='btn' name='tname' style ='float: right;' type='submit'    value='$train[$key]'>Book AC</button><br>
               </form>
               <form method=GET action='entryn.php'>
                 <br>
             "."Non AC : Rs.".$nonac[$key]."(per person)<button class='btn' name='tname' style ='float: right;'  type='submit'    value='$train[$key]'>Book Non AC</button><br>
               </form></div><p>";
               $key=$key+1;

             }
           ?>
         </div>
</p></div>
</body>
</html>