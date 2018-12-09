
<?php
session_start();
?><html>
<head>
	<title>Confirm booking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    div.e{
    margin: auto;
    padding: 10px;
    width:400px;
    height: 500;
     background-color:     #F5F5F5;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .navbar {
    overflow: hidden;
    background-color: rgba(100,100,100,0.5);
    font-family: Arial, Helvetica, sans-serif;
}



.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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
  </style>
</head>
<body>
  <div class="bg">
  <div class="w3-container">
    <h4 style="color:red;font-size=10px;float: left;"><b>      EXPLORE AT</b></h4>
  <div class="w3-dropdown-hover w3-right">
  <button  class="w3-button w3-green"><i class="fa fa-user-circle"></i>  <?= $_SESSION['username'] ?> </button>
   <div  class="w3-dropdown-content w3-bar-block w3-border" style="right: 0"> 
     <a href="pwd.php" class="w3-bar-item w3-button">Change Password</a>
     <a href="tourism.php" class="w3-bar-item w3-button">Logout</a>
  </div>

</div>
</div>
<center>
  <div class="e" style="margin-top: 8%">
 <pre> <p style="font-size: 20px">Select payment method</p>	
  <input  type="radio" name="pay" value="credit card" id="b" > Credit Card
    <select id="select1" style='display:none;'>
        	<option value="l1">Choose bank :  </option>
        	<option value="l2">SBI </option>
        	<option value="l3">ICICI </option>
        	<option value="l4">Bank Of Baroda </option>
        	<option value="l5">PNB </option>
        </select>    
  <input type="radio" name="pay" value="debit card" id="t"> Debit Card
   <select id="select2" style='display:none;'>
        	<option value="l1">Choose bank :  </option>
        	<option value="l2">SBI </option>
        	<option value="l3">ICICI </option>
        	<option value="l4">Bank Of Baroda </option>
        	<option value="l5">PNB </option>
        </select></pre>
        <form method="POST" action="rpkg.php">
 <p > <label>*Card no.</label>    <input type="text" name="card" minlength="12"placeholder="Enter card number"></p>  
<p> <label>*CVV</label>         <input type="text" name="cvv"minlength="3" placeholder="Enter cvv"></p>
<p> <label>*Expiredate MMYYYY</label>    <input type="text" name="date" minlength="6" maxlength="6" placeholder="Enter expiry date"></p>
<p><input type="submit" name="pay"  value="Pay"  id="btn"></p>
</form>
</div>
 </center>
    <script>
   		function select1(){
   			document.getElementById("select1").style.display="block";
   			document.getElementById("select2").style.display="none";	
   		}
   		function select2(){
   			document.getElementById("select2").style.display="block";
   			document.getElementById("select1").style.display="none";
   		}
   		document.getElementById("b").onclick=select1;
   		document.getElementById("t").onclick=select2;
   	</script>
   </div>
</body>
</html>