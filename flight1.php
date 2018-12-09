<?php
session_start();
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
    $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="select * from flight where source='$src' and destination='$dest';" ;
      $result=mysqli_query($conn,$q1);
      
if(mysqli_num_rows($result)==0){

header("Location:noflight.php");

}
else{
      $flight=array();
      $economy=array();
      $business=array();
      $start=array();
      $end=array();
      $key=0;
      while($row=mysqli_fetch_array($result)){
               $flight[$key]=$row['flight'];
               $economy[$key]=$row['economy'];
               $business[$key]=$row['business'];
               $start[$key]=$row['start'];
               $end[$key]=$row['end'];
               $key=$key+1;
          }
          $size=$key;
          $key=0;
        }
?>

<html>
<head>
	<title>Flight detail</title>
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
    background-image: url("https://salva-tours.com/wp-content/uploads/2018/01/%D8%A8%D9%84%D9%8A%D8%B7-%D8%A7%D8%B1%D8%B2%D8%A7%D9%86-%D9%87%D9%88%D8%A7%D9%BE%D9%8A%D9%85%D8%A7-%DA%AF%D8%B1%D8%AC%D8%B3%D8%AA%D8%A7%D9%86-2.jpg");

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
    height: 250;
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
               <form method=GET action='entrye.php'><center>".$flight[$key]."</center>
                <br>
             <pre>    Arrival      Departure</pre>
                <pre>    ".$start[$key]."        ".$end[$key]."</pre><br>
             Economy class : Rs.".$economy[$key]."(per person)<button class='btn' name='fname' style ='float: right;' type='submit'    value='$flight[$key]'>Book Economy</button><br>
               </form>
               <form method=GET action='entryb.php'>
                 <br>
             "."Business class : Rs.".$business[$key]."(per person)<button class='btn' name='fname' style ='float: right;'  type='submit'    value='$flight[$key]'>Book Business</button><br>
               </form></div><p>";
               $key=$key+1;

             
           }
           ?>
         </div>
</p></div>






</body>
</html>