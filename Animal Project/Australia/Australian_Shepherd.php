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
 <img src ="Australian Shepherd.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About Australian Shepherd:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Australian Shepherd:</h1>

The Aussie breed is an energetic dog that requires exercise and mental stimulation to be happy and to avoid becoming destructive. They need a minimum of 20 min hard running twice per day. Aussies love working, whether it is herding livestock, performing tricks, competing in dog agility, or any other canine sport. They do exceptionally well in frisbee catching competition, and they love to retrieve items from water.

Aussies want to accompany their favorite humans and see and do whatever you are doing. After sufficient exercise they enjoy being couch potatoes. It is usually a sweet and affectionate dog which is faithful to its owners and great with children if raised with them. They typcially are friendly with the owner's friends and family that they see often but protective when strangers are around. Socialization from puppyhood is necessary to get the very best from them.

Most Australian Shepherds make wonderful family dogs, provided there is a human pack leader to guide them. They generally get along with other dogs and are not quarrelsome.








<h3>Australian Shepherd Facts:</h3>

Common Name:
Australian Shepherd<br>
Origin:
North America<br>
Average Size:
58cm (23in)<br>
Average Weight:
32kg (70lbs)<br>
Average Lifespan:
14 years<br>
Group:
Herd Dog<br>

Colour:
Tan, Red, Black, Brown, Grey<br>
Average Litter Size:
7<br>
Temperament:
Confident and independent yet loving and responsive,<br>
Training:
Should be trained from an early age and they are easy to train but it takes time<br>







<h3>Reference:</h3> https://a-z-animals.com/animals/australian-shepherd/

</h4></p></body></html>