<?php
session_start();
//echo "<script>alert('No flight found for this route')</script>";
$_SESSION['notrain']="No train found for this route";
header("Location:viewtrain.php");

?>