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
    <link rel="stylesheet" href="http://localhost/animals_world/style.css">
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

     

 <a href="http://localhost/animals_world/MainPage.php">
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click Here or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">Alphabetical list of countries below in Europe. Choose your country for animals details.<h1></div>

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
				
				}
	 </style>
</head>

<body id="head1">
 <p><h2 class="head4"> <div style="background-color:lightgreen">



A
<ul> 
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albanian.php">Albania     <img src="albania_flag.png" width="50" height="20"> </a>   </li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andora.php">Andorra     <img src="andorra.png" width="50" height="20"></a>   </li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Armenia.php">Armenia      <img src="armenia.png" width="50" height="20"></a>   </li>
<li>Austria</li>
<li>Azerbaizan</li></ul>
B
<ul>
<li>Belarus</li>
<li>Belgium</li>
<li>Bosnia</li>
<li>Bulgeria</li></ul>
C
<ul>
<li>Croatia</li>
<li>Cyprus</li>
<li>Czech Republic</li>
</ul>
D
<ul>
<li>Denmark</li>
</ul>
E
<ul>
<li>Estonia</li>
</ul>
F 
<ul>
<li>Finland</li>
<li><a href="file:///C:/Users/ZUBAER/Desktop/3.1%20xm/WebDevelopment/Animal%20Project/Europe/France.html">France</a>  <img src="France.png" width="50" height="20"></li>
</ul> 
G
<ul>
<li>Germany</li>
<li>Greece</li>
</ul>
H 
<ul>
<li>Hungary</li>
</ul>
I
<ul>
<li>Iceland</li>
<li>Ireland</li>
<li>Italy</li>
</ul>
K 
<ul>
<li>Kazakhastan</li>
<li>Kosovo</li>
</ul>
K
<ul>
<li>Kazakhstan</li>
<li>Kuwait</li>
<li>Kyrgyzstan</li>
</ul>
L
<ul>
<li>Latvia</li>
<li>Liechtenstein</li>
<li>Lithuania</li>
<li>Luxembourgeurge</li></ul>
M 
<ul>
<li>Mecedonia</li>
<li>Malta</li>
<li>Moldova</li>
<li>Monaco</li>
<li>Montenegro</li>
</ul>
N
<ul> 
<li>Netherlands</li>
<li>Norway</li>
</ul>
P
<ul>
<li>Poland</li>
<li>Portugal</li>
<li>Romania</li></ul>

S 
<ul>
<li>San Marino</li>
<li>Serbia</li>
<li>Slovakia</li>
<li>Slovenia</li>
<li>Spain</li>
<li>Sweden</li>
<li>Switzerland</li>
</ul>
T
<ul>
<li>Turkey</li>
</ul>
U 
<ul>  
<li>United Kingdom (UK)</li>
<li>Ukraine</li></ul>
V 
<ul>
<li>Vatican City</li></ul>
 </p>
</body>
</html>