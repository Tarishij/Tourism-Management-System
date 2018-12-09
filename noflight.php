<?php
session_start();
//echo "<script>alert('No flight found for this route')</script>";
$_SESSION['noflight']="No flight found for this route";
header("Location:viewflight.php");

?>