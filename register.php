
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
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

    height: 100%;

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
    margin: 60px;
    width: 300px;
    padding: 16px;
    background-color:     #F5F5F5;

}

/* Full-width input fields */
input[type=text], input[type=password], input[type=Email-id] {
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
     <?php 
               if(!empty($_SESSION["empty"])){
                  echo "<script>alert('Fields marked are mandatory!')</script>";
               
                    }
             ?>
            
       
        <?php 
        
        unset($_SESSION["empty"]);
        unset($_SESSION["username"]);
        unset($_SESSION["pwd"]);
         ?>
    <form  method="POST" class="container"> 
    <p>
        <label >*Username:</label>
        <p>
        <input type="text" id="userpwd" placeholder="Enter username" name="username"/></p>
    </p>
    <p>
        <label >*Password:</label>
        <p>
        <input type="password" id="userpwd" placeholder="Enter password" name="password"/></p>
    </p>
    <?php 
               if(!empty($_SESSION["wrongpwd"])){
                 echo "<script>alert('Password didnt match!')</script>";
                    }
             ?>
         
         <?php
         unset($_SESSION["wrongpwd"]);
         ?>
    <p>
        <label >*Confirm Password:</label>
        <p>
          
        <input type="password" id="verifypwd" placeholder="Re-enter password" name="passwordre"/></p>
   </p>
    <label >*Email-id:</label>
    <p>
        <input type="Email-id" id="mail" placeholder="Enter e-mail id" name="mail"/></p>
    </p>
   <p><input type="submit" id="btn" formaction="process1.php"  name="register" value="Register"></p>
  

    </form>

    
</div>
</body>
</html>






