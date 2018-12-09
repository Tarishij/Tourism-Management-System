
<?php
session_start();
$total=0;
?>

<html>
<head>
  <title>Booking Detail</title>
  <link rel="stylesheet" type="text/css" href="package.css">
  <link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="image.css">
<style>

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #696969;
}

  
  div.e{
    margin: auto;
    padding: 10px;
    width:450px;
    height: 300px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
.active{
  background-color: red;
}
</style>
</head>
<body>
  <div class="navbar">
  <a  href="holiday1.php">View Detail</a>
  <a  href="image.php">Images</a>
  <a class="active" href="book.php">Book</a>
</div>
<p></p>
<center>
  <form method="POST" action="enter.php" style="margin-top: 8%">
    <label>Enter no. of people</label>
    <input type="number" name="people" min = "1" max= "10" ><br><br>
    <label>Enter tour start date:</label>
    <input type="date"  min = "21-11-2018"name="date">
    
  <p><button id="btn"  name="submit">Show Amount</button>
      </p>

      </form>
      </center>



</body>
</html>

