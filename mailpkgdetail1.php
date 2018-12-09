 
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

$nam=$_SESSION['namee'];
$_SESSION['done']="Payment Successfull";
header("Location:tms.php");
$src = $_SESSION['src']; //taken from holiday1 file
$dest = $_SESSION['des'];    //taken from book
$total=$_SESSION['amountf']; 
$namef=$_SESSION['nn'];    
$type=$_SESSION['type']; 
$mail=$_SESSION['mail'];
$user=$_SESSION['username'];
$arr=$_SESSION['arr'];
$dep=$_SESSION['dep'];
$d=$_SESSION['date'];
$nop=$_SESSION['nop'];
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
          
          <h3>Thanks for booking ".$nam."..!</h3>
          <h3>Your ".$nam." details are:</h3>
   <table  cellspacing='4' cellpadding='4' border='1' align='center' style='width:50%' >
  
  <tr>
  <th>Name</th>
  <th>Source</th>
    <th>Destination</th>
    <th>".$nam." Name</th> 
    <th>Departure</th>
    <th>Arrival</th>
    <th>Date of Journey</th>
    <th>Type</th>
    <th>Number of Persons</th>
    <th>Amount</th>
  </tr>
  <tr>
  <td style='white-space:nowrap;'>".$user."</td>
    <td style='white-space:nowrap;'>".$src."</td>
    <td style='white-space:nowrap;'>".$dest."</td> 
    <td style='white-space:nowrap;'>".$namef."</td>
    <td style='white-space:nowrap;'>".$arr."</td
     <td style='white-space:nowrap;'>".$dep."</td>
     <td style='white-space:nowrap;'>".$d."</td>
    <td style='white-space:nowrap;'>".$type."</td>
    <td style='white-space:nowrap;'>".$nop."</td>
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

