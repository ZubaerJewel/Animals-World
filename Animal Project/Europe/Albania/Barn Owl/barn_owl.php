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
 <img src ="barn-owl.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">about the Albanian Barn Owl:<h1></div>

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


<h1 style="text-align:center;color:red">Information about the Albanian Barn Owl :</h1>

Barn owls are one of the most widely distributed birdsfound everywhere around the world apart from the polar and desert regions. Although this is the case, the barn owl population is more predominant in the Southern Hemisphere due to better climate conditions for the barn owl.

Barn owls tend to measure between 25 and 40cm tall and adult barn owls can have a wingspan of up to 110cm long. The wing span of the barn owl is however dependent on the species of barn owl so some owls may be smaller, where other species of barn owl may be much bigger.

<h2>Barn Owl Facts:</h2>

Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Aves<br>
Order:
Strigiformes<br>
Family:
Tytonidae<br>
Genus:
Tyto<br>

Scientific Name:
Tyto Alba<br>
Type:
Bird<br>
Diet:
Carnivore<br>
Size (H):
25cm - 45cm (9.8in - 18in)<br>
Wingspan:
75cm - 110cm (30in - 43in)<br>
Weight:
300g - 550g (10oz - 19.4oz)<br>
Top Speed:
80km/h (50mph)<br>
Lifespan:
5 - 10 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Least Concern<br>

Colour:
Black, White, Grey, Orange, Brown<br>
Skin Type:
Feathers<br>
Favourite Food:
Small mammals<br>
Habitat:
Open plains and low-lying woodland<br>
Average Clutch Size:
4<br>
Main Prey:
Small mammals, Fish, Birds<br>
Predators:
Fox, Raccoon, Wild dogs<br>
Distinctive Features:
White heart-shaped face and large, dark eyes.



</h3></p></body></html>