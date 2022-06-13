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
 <img src ="Wolverine.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Wolverine:<h1></div>

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
<h1 style="text-align:center;color:red">Information about the Wolverine:</h1>





The wolverine is a medium sized mammal that despite its bear-like appearance (and its name) is most closely related to the weasel. The wolverine is known to be strong and vicious and is said to have immense strength in comparison to its size.

The wolverine is found throughout Canada, Europe, parts of North America and the Arctic Circle where the wolverines inhabit mountainous regions and dense forests. Wolverines are also known to venture into more open areas such as plains and farmland when they are in search of food.

The wolverine generally eats mice, rats and other small mammals, birds and eggs during the summer months when these small animals are in abundance. During the bitter winter however, when snow covers the ground, the wolverine tends to hunt larger animals such as reindeer(caribou), sheep and moose. Despite the fact that the wolverine is known to be capable of hunting down and killing animals that are so much bigger than itself, the wolverine tends to prefer to scavenge the kills of other animals such as wolves and bears. The wolverine will let the larger predators hunt the prey down and the wolverine then chases the hunter away by showing its teeth and growling fiercely. Then the wolverine is left to eat the kill.
<h2>Wolverine Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Carnivora<br>
Family:
Mustelidae<br>
Genus:
Gulo<br>

Scientific Name:
Gulo Gulo<br>
Type:
Mammal<br>
Diet:
Carnivore<br>
Size:
65-87cm (25-34in)<br>
Weight:
10-31kg (22-70lbs)<br>
Top Speed:
48km/h (30mph)<br>
Lifespan:
10-15 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Threatened<br>

Colour:
Sandy, White, Black, Brown<br>
Skin Type:
Fur<br>
Favourite Food:
Caribou<br>
Habitat:
Mountainous regions and dense forest<br>
Average Litter Size:
3<br>
Main Prey:
Caribou, Moose, Sheep, Eggs<br>
Predators:
Human, Wolves, Bears<br>
Special Features:
Long, sharp claws and bear-like appearance



</h3></p></body></html>