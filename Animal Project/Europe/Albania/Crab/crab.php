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
 <img src ="crab-png-4.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Crab :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Crab:</h1>



The crab is a type of crustacean similar to prawns, shrimpand lobster. There are more than 6,700 known species of crab found in waters worldwide and these many crab species are split into around 93 different crab groups.

Most crab species are found in the shallower ocean waters where the crabs tend to inhabit rocky pools and coral reefs. There are however, a number of species of freshwater crab that inhabit the waters in rivers and lakes and some species of tropical crab have been known to spend a great deal of time on land.

Generally, crabs don't get bigger than 40 cm in size, with the exception of the Japanese spider crab that has been known to have a leg span of over 4 meters long! The smallest type crab is the pea crab with this tiny species of crab only growing to a few millimetres.

Crabs have a thick armoured shell which protects the crab from immediate danger. The crab also has two front armoured claws which the crab uses to catch its prey.

The crabs hunt by sitting in a dark hole and catching potential prey that swims past. This allows the crab to feed effectively as well as staying hidden from those that would want to eat the crab.

<h2>Crab Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Arthropoda<br>
Class:
Crustacea<br>
Order:
Decapoda<br>
Family:
Brachyura<br>

Scientific Name:
Brachyura<br>
Type:
Arthropod<br>
Diet:
Carnivore<br>
Size (L):
1cm-400cm (0.4in-157in)<br>
Weight:
100g-2,000g (3.5oz-704oz)<br>
Top Speed:
19km/h (12mph)<br>
Lifespan:
1-100 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Threatened<br>

Colour:
Red, Brown, Orange, Blue<br>
Skin Type:
Shell<br>
Favourite Food:
Shrimp<br>
Habitat:
Coral reefs and coastline<br>
Average Litter Size:
2<br>
Main Prey:
Shrimp, Fish, Mussels<br>
Predators:
Birds, Otter, Octopus<br>
Distinctive Features:
Hard, armoured shell and eight legs











</h3></p></body></html>