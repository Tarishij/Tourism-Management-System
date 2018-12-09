<?php
$card=$_POST['card'];
$cvv=$_POST['cvv'];
$date=$_POST['date'];
if(empty($card)|| empty($cvv)||empty($date)){
 echo "<script> alert('Marked fields are mandatory...!!!'); </script>";
 echo "<script>  window.history.back(); </script>";
}
else{
  $flag=0;
$conn=mysqli_connect("localhost","root","","db");
   mysqli_select_db($conn,'db');
   $res=mysqli_query($conn,"select * from pay") or die("failed");
    while( $r=mysqli_fetch_assoc($res))
    {
    	if($card==$r['cardno'] && $cvv==$r['cvv'] && $date==$r['date']){
     		$flag=1; 
        break;
    	}
    }
    if($flag==1){
      header("Location:mailpkgdetail.php");
    }
        else{
         echo "<script> alert('Some fields were not correct,try again!'); </script>";
         echo "<script>  window.history.back(); </script>";
     
       }
     }
 
  
?>
