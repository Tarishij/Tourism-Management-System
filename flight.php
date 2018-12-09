<?php
session_start();
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
.container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;

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
    <form class="container" method="POST">
        <p>
        <label >Source</label>
        <input type="text" id="userpwd" placeholder="Enter source" name="source"/><br>
        <label >Destination:</label>
        <input type="text" id="userpwd" placeholder="Enter destination" name="dest"/><br>
        <label >Flight Name:</label>
        <input type="text" id="userpwd" placeholder="Enter flight name" name="flname"/><br>     
       <label >Departure Time:</label>
        <input type="text" id="userpwd" placeholder="Enter departure time" name="dep"/><br>
        <label >Arrival Time:</label>
        <input type="text" id="userpwd" placeholder="Enter arrival time" name="arr"/><br>
        <label >Economy Class Amount</label>
        <input type="text" id="userpwd" placeholder="Enter economy class amount" name="economy"/><br>
        <label >Business Class Amount:</label>
        <input type="text" id="userpwd" placeholder="Enter buisness class amount" name="business"/>
        <input type="submit" id="btn" formaction="flightinfo.php"  name="admin" value="Done"></p>
    </form>
</div>
</body>
</html>