<?php
session_start();
            $conn=mysqli_connect("localhost","root","","db");
    mysqli_select_db($conn,'db');
      $q1="select max(pid) from detail;" ;
      $result=mysqli_query($conn,$q1);
      $row=mysqli_fetch_array($result);
              $m=$row['max(pid)']+1;  
            
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #err{
          color: #FF0000;
          }
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
.container1 {
    position: absolute;
    right: 0;
    margin: 60px;
    max-width: 250px;
    padding: 16px;
    background-color: white;
    margin-top: 10px;
    margin-left: 200px;

}

.container3 {
    margin: 60px;
    max-width: 250px;
    padding: 8px;
    background-color: white;
    margin-top: -10px;
    margin-right: -10px;
    margin-left: 100px;
    float: left;
}

.container2 {
    margin: 60px;
    max-width: 250px;
    padding: 16px;
    margin-top: -10px;
    background-color: white;
    margin-right: -10px;
    margin-left: 100px;
    float: left;
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=E-mail-id] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=E-mail-id]:focus {
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
    <form  method="GET" action="redirect.php">
        <div class="container1">
        <p>
            
        <label >Package Id:</label>
        <input readonly type="text" id="userpwd" value= "<?= $m?>"  name="pkid"/><br>
        <label >Destination:</label>
        <input type="text" id="userpwd" placeholder="Enter Destination" name="dest"/><br>
        <label >No of Days:</label>
        <input type="text" id="days" placeholder="Enter number of days" name="days"/><br>
        <label >No of Nights:</label>
        <input type="text" id="userpwd" placeholder="Enter number of nights" name="night"/><br>
       <label >Travel Expenses:</label>
        <input type="text" id="userpwd" placeholder="Enter amount" name="amount"/><br>
        <label >Image:</label>
        <input type="text" id="userpwd" placeholder="Enter image" name="img"/><br>
        <input type="submit" id="btn"   name="admin2" value="Next">
    </p>
       </div> 
       
       
        
        </form>

</div>
</body>
</html>
