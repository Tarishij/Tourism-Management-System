<?php
session_start();
$nop=$_POST['nop'];
$_SESSION['nop']=$nop;
$src = $_SESSION['src']; //taken from holiday1 file
$dest = $_SESSION['des'];
$namef=$_SESSION['nn']; 
$conn=mysqli_connect("localhost","root","","db");
mysqli_select_db($conn,'db');
$q="select * from trans_detail where source='$src' and destination='$dest' and transport='$namef'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);
$_SESSION['amountf']=$row['amount'];//price of 1 traveller

$_SESSION['amountf']=$_SESSION['amountf']*$nop;

if(isset($_POST['s'])){
  $_SESSION['show']="shown";
header("Location:payment2.php");
}


if(isset($_POST['p'])){

$card=$_POST['card'];
$cvv=$_POST['cvv'];
$date=$_POST['date'];
if(empty($card)|| empty($nop)||empty($cvv)||empty($date)){
 echo "<script> alert('Marked fields are mandatory!'); </script>";
 echo "<script>  window.history.back(); </script>";
}
else{
$flag=0;
$res=mysqli_query($conn,"select * from pay") or die("failed");
    while( $r=mysqli_fetch_assoc($res))
    {
      if($card==$r['cardno'] && $cvv==$r['cvv'] && $date==$r['date']){
        $flag=1; 
        break;
      }
    }
        
     if($flag==1){
      $amt=$_SESSION['amountf'];

    $q="update trans_detail set amount='$amt',no_of_people='$nop' where source='$src' and destination='$dest' and transport='$namef'" ;
      mysqli_query($conn,$q);
      header("Location:mailpkgdetail1.php");

     }
     else{
         echo "<script> alert('Some fields were not correct,try again!'); </script>";
         echo "<script>  window.history.back(); </script>";
        
       
     }
 }



















}
?>