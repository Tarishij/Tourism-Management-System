<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
          body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg {
    /* The image used */
    background-image: url("https://images.yourstory.com/2017/07/72-travel-and-tourism.jpg?auto=compress");

height:100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 0;
    margin: 20px;
   width: 300px;
    padding: 16px;
    background-color:     #F5F5F5;


}

/* Full-width input fields */
input[type=text], input[type=password],input[type=Email-id] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    
}

input[type=text]:focus, input[type=password]:focus,input[type=Email-id]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
.con{
    align="right";
}
.btn:hover {
    opacity: 1;
}

.navbar {
    overflow: hidden;
    background-color: rgba(100,100,100,0.5);
    font-family: Arial, Helvetica, sans-serif;
}



.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}


    </style>
</head>


<body>

    <div class="bg">

<div class="navbar">

  <pre><h2 style="color:red;font-size=30px">      EXPLORE AT</p></pre>
 
</div>
            
  <form method="POST" class="container">
    
        
          <?php
             if(!empty($_SESSION['oldwrong'])){
                echo "<script>alert('Old password is incorrect!')</script>";
                
             }
             unset($_SESSION["oldwrong"]);

          ?>
        
        <p>
        <label >Old Password:</label>
        <p>
        <input type="password"  placeholder="Enter old password" name="old"/></p>
    </p>
    <p>
        <label >New Password:</label>
        <p>
        <input type="password"  placeholder="Enter new password" name="new"/></p>
    </p>

     <p>
        <input type="submit" formaction="changepwd.php"  id="btn" value="Change Password"> 
        </p>
   
    </form>  
</div>
</body>
</html>