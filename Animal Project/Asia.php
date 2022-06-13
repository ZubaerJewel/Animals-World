<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="../style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    <h1><b style= "font-size:260%">ANIMALS WORLD</b>.</h1>
    </div>


    <p>
	     <b onclick="history.go(-1);"><h1 class="btn btn-danger">Go Back<br><<--------<<</h1></b>
        <a href="http://localhost/animals_world/reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="http://localhost/animals_world/login.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="http://localhost/animals_world/login.php" class="btn btn-warning">Sign In of Your Account</a>
    </p>
</body>
</html>
































































































































































































































































































































































































































































<html>
<head>

     

 <a href="../MainPage.php">
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click HERE or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">Alphabetical list of countries below in Asia. Choose your country for animals details.<h1></div>

<style>
     #head1{background-color: green;}
	 .head2{
	            color:green;
				text-align: center;
				}
				.head3{
	            
				text-align: center;
				}
			
				.head4{
	            color:black;
				text-align:left;
				}
	 </style>
</head>

<body id="head1">
 <p><h2 class="head4"> <div style="background-color:lightgreen">
A
<ul> 
<li>Afghanistan</li>
<li>Armenia</li>
<li>Azerbaijan</li>
</ul>
B
<ul>
<li>Bahrain</li>
<li><a href="http://localhost/animals_world/Animal%20Project/Bangladesh.php">Bangladesh</a></li>
<li>Bhutan</li>
<li>Brunei</li>
</ul>
C
<ul>
<li>Cambodia</li>
<li>China</li>
<li>Cyprus</li>
</ul>
G
<ul>
<li>Georgia</li>
</ul>
I
<ul>
<li>India</li>
<li>Indonesia</li>
<li>Iran</li>
<li>Iraq</li>
<li>Israel</li>
</ul>
J
<ul>
<li>Japan</li>
<li>Jordan</li>
</ul>
K
<ul>
<li>Kazakhstan</li>
<li>Kuwait</li>
<li>Kyrgyzstan</li>
</ul>
L
<ul>
<li>Laos</li>
<li>Lebanon</li>
</ul>
M 
<ul>
<li>Malaysia</li>
<li>Maldives</li>
<li>Mongolia</li>
<li>Myanmar (formerly Burma)</li>
</ul>
N
<ul> 
<li>Nepal</li>
<li>North Korea</li>
</ul>
O 
<ul>
<li>Oman</li></ul>
P
<ul>
<li>Pakistan</li>
<li>Palestine</li>
<li>Philippines</li></ul>
Q 
<ul>
<li>Qatar</li>
</ul>
R 
<ul>
<li>Russia</li>
</ul>
S 
<ul>
<li>Saudi Arabia</li>
<li>Singapore</li>
<li>South Korea</li>
<li>Sri Lanka</li>
<li>Syria</li></ul>
T
<ul>
<li>Taiwan</li>
<li>Tajikistan</li>
<li>Thailand</li>
<li>Timor-Leste</li>
<li>Turkey</li>
<li>Turkmenistan</li></ul>
U 
<ul>  
<li>United Arab Emirates (UAE)</li>
<li>Uzbekistan</li></ul>
V 
<ul>
<li>Vietnam</li></ul>
Y
<ul>
<li>Yemen</li>
</ul>

 </p>
</body>
</html>