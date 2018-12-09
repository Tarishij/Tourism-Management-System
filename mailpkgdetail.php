 
<html>
<head>
  <style>
  table {
    border-collapse: collapse;
    table-layout: auto;
}

table td {
    border: 1px solid #333;
}
</style>
</head>
</html>
<?php 
session_start();
$_SESSION['done']="Payment Successfull";
header("Location:tms.php");
$value = $_SESSION['select']; //taken from holiday1 file
$no = $_SESSION['person'];    //taken from book
$total=$_SESSION['tot'];      //from book 
$date=$_SESSION['date'];      //from book
$mail=$_SESSION['mail'];
//$night=$_SESSION['night'];
$user=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
    $res=mysqli_query($conn,"select * from detail where destination='$value'") or die("failed");
      $r=mysqli_fetch_assoc($res);
      $days=$r['day'];
      $night=$days-1;
$q="insert into final values ('$mail', '$value','$no', '$days', '$date','$total')" ;
      mysqli_query($conn,$q);

      require 'PHPMailerAutoload.php';
          //require 'class.smtp.php';

          $email = new PHPMailer;
          //$mail->SMTPDebug = 3;                               // Enable verbose debug output
          $email->isSMTP();                                      // Set mailer to use SMTP
          $email->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $email->SMTPAuth = true;                               // Enable SMTP authentication
          $email->Username = '2016ucp1443@mnit.ac.in';                 // SMTP username
          $email->Password = '*tANu*@17';                           // SMTP password
          $email->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $email->Port = 587;                                    // TCP port to connect to  ,B2622098  Justshootmelnvotech@gmail.com 'Visualmodel@Lnvotech.in','visualmodel','2016ucp1476@mnit.ac.in','narru' akashbansal303@gmail.com Newpassword@2018)
          $email->SMTPDebug = 0;


          $email->setFrom('2016ucp1443@mnit.ac.in', 'Tourism Management System');
          $email->addAddress( $mail ,$user);
          $email->isHTML(true);                                  // Set email format to HTML
          $email->Subject = 'Explore At:Payment Successfull';
          $email->Body    = "
          
          <h3>Thanks for booking your trip here..!</h3>
          <h3>Your trip details are:</h3>
   <table  cellspacing='4' cellpadding='4' border='1' align='center' style='width:50%' >
  
  <tr>
  <th>Name</th>
    <th>Destination</th>
    <th>No. of people</th> 
    <th>Tour Plan</th>
    <th>Tour Start Date</th>
    <th>Amount</th>
  </tr>
  <tr>
  <td style='white-space:nowrap;'>".$user."</td>
    <td style='white-space:nowrap;'>".$value."</td>
    <td style='white-space:nowrap;'>".$no."</td> 
    <td style='white-space:nowrap;'>".$days."Days ".$night."Nights</td>
    <td style='white-space:nowrap;'>".$date."</td>
    <td style='white-space:nowrap;'>Rs.".$total."</td>
  </tr>
</table>
<br>
<h4>For any further queries, feel free to contact here:<br><br>
Tarishi Jain<br>
9218882210<br>
Anmola Kumari<br>
9231047385
";

          $email->AltBody = 'Error Occured';

          if(!$email->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $email->ErrorInfo;
          } 
?>

