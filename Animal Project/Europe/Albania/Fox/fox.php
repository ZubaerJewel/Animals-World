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
 <img src ="Fox-PNG-8.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Fox:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Fox :</h1>

The fox is a scavenger carnivours dog, generally found in urban city areas in the northern Hemisphere. The fox is a nocturnal mammal, meaning that the fox only goes out a night to hunt for prey.
Wild foxes tend live for around 6-7 years, but some foxes have been known to be older than 13 in captivity. The wild fox hunts for the mouse and other small mammals and birds, but foxes appear to enjoy all species of insect.
A fox is generally smaller than other members of the dogfamily like wolves, jackals and domestic dogs. Foxes can be a pest in the cities as foxes are often seen tearing into rubbish.


<h2>Fox Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Carnivora<br>
Family:
Canidae<br>
Genus:
Vulpini<br>

Scientific Name:
Vulpes vulpes<br>
Type:
Mammal<br>
Diet:
Carnivore<br>
Size (L):
40cm - 83cm (16in - 33in)<br>
Weight:
5kg-11kg (11lbs-24lbs)<br>
Top Speed:
48km/h (29mph)<br>
Lifespan:
3-11 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Threatened<br>

Colour:
Brown, Black, Tan, Red<br>
Skin Type:
Fur<br>
Favourite Food:
Rabbit<br>
Habitat:
Woodland areas and urban parks<br>
Average Litter Size:
5<br>
Main Prey:
Rabbits, Birds, Lizards<br>
Predators:
Human, Bears, Eagles<br>
Distinctive Features:
Pointed ears and long bushy tail





</h3></p></body></html>