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
 <img src ="red-fox.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Red Fox :<h1></div>

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
				text-align:justify;
				padding-right:20px;
				padding-left:20px;
				
				}
	 </style>
</head>

<body id="head1">
 <p><h4 class="head4"> <div style="background-color:lightgreen">
<h1 style="text-align:center;color:red">Information about the Red fox:</h1>



The Red Fox (Vulpes vulpes) has the widest range of any land carnivore, spannin from North America to Eurasia and parts of North Africa.
 Subspecies exist in Japan. They vary greatly in size, with adults weighing from 2.7-6.8 kilograms, depending on their region. In Europe,
 the red foxes tend to be larger than in North America. Their diet consists of rodents and other small animals, insects, varied with fruits,
 and also birds. In Britain, the foxes have adapted to the urban life, scavenging on garbage. When Red foxes reproduce, the female has her own
 "maternity den" and the male will supply her with food up to and after birthing. They are not considered to be endangered, and are the most 
 widespread and abundant wild carnivore in the world.



<h2>Some facts about the
Red fox :</h2>
Adult weight : 4.132 kg (9.0904 lbs)<br>
Maximum longevity : 21 years<br>
Female maturity :304 days<br>
Male maturity : 304 days<br>
Gestation : 52 days<br>
Weaning : 48 days<br>
Litter size : 5<br>
Litters per year : 1<br>
Interval between litters : 365 days<br>
Weight at birth : 0.1 kg (0.22 lbs)<br>
Weight at weaning : 1.397 kg (3.0734 lbs)<br>
Basal metabolic rate : 14 W<br>
Body mass : 4.58 kg (10.076 lbs)<br>
Temperature : 38.85 C (101.93 F)<br>






</h3></p></body></html>