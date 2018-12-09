 <?php
session_start();

 $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
     
if(isset($_GET['var'])){
    
     
$user=$_SESSION['username'];
$pwd=$_SESSION['pwd'];
$mail=$_SESSION['mail'];
 $q1="insert into log(username, password,mail) values ('$user' , '$pwd','$mail')" ;
      mysqli_query($conn,$q1);
      
    header("Location:tms.php");  /* another way of sharing variables among pages */
      die();
}
else{

$user=$_POST['username'];
$pwd=$_POST['password'];
$pwd1=$_POST['passwordre'];
$mail=$_POST['mail'];
    /*$redirect_location = "login.php";*/
if(!isset($user) || trim($user) == '' ||!isset($pwd) || trim($pwd) == ''){
    $_SESSION["empty"]="Fields marked are mandatory!";
   header("Location:register.php");
    
}
else if($pwd!=$pwd1){
  $_SESSION["wrongpwd"]="Password didn't match!";
   header("Location:register.php");
}
else{

   
$_SESSION['username']=$user;
      $_SESSION['pwd']=$pwd;
      $_SESSION['mail']=$mail;


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
          $email->Subject = 'Explore At:Registration link';
          $email->Body    = "<a href='http://localhost/tourism/process1.php?var=1'>Click here to confirm your registration to Tourism Management System</a> ";

          $email->AltBody = 'Error Occured';

          if(!$email->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $email->ErrorInfo;
          } 
echo "<center>Please check your email to confirm registration!</center>";



}
       
    }
?>
