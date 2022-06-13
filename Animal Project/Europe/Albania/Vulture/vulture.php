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
 <img src ="Vulture.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Vulture:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Vulture :</h1>

The vulture is a large, carnivorous bird that is most well known for its scavenging nature. The vulture is one of the few types of bird that is found distributed so widely around the world, as vultures are found on every continent excluding the Antarctic and Australia and the islands that surround it.

 species of vultures of firstly classified into two groups, the old world vultures and the new world vultures. There are thought to be nearly 30 different species of vulture that are found worldwide.

The old world vultures are found in Asia, Europe and Africa with these species of vulture thought to be most closely related to eagles and hawks. The old world vulture is not thought to be closely related to the new world vulture and the old world vulture uses its spectacular sight alone in order to find food.

The new world vultures are found in the Americas and although there are definitive similarities between the old world vulture and the new world vulture, they are believed to be connected through evolutionary status rather than DNA. The new world vultures tend to be slightly smaller than the old world vultures and use both sight and their excellent sense of smell in order to find their food.

All species of vulture are similar in the sense that they scavenge for their food whenever possible rather than killing it themselves. Vultures feed on the remains of dead animals and are never too fussy about what is left. Vultures are known to strip meat, skin and even feathers, leaving only the skeleton of the animal remaining.
<h2>Vulture Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Aves<br>
Order:
Accipitriformes<br>
Family:
Accipitridae<br>
Genus:
Aegypiinae<br>

Scientific Name:
Aegypius Monachus<br>
Type:
Bird<br>
Diet:
Carnivore<br>
Size (H):
64cm - 81cm (25in - 32in)<br>
Wingspan:
130cm - 183cm (51in - 72in)<br>
Weight:
0.85kg - 2.2kg (1.9lbs - 5lbs)<br>
Top Speed:
48km/h (30mph)<br>
Lifespan:
20 - 30 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Endangered
<br>
Colour:
Black, White, Grey, Tan, Brown<br>
Skin Type:
Feathers<br>
Favourite Food:
Rats<br>
Habitat:
Deserts, savannah and grassland near water<br>
Average Clutch Size:
2<br>
Main Prey:
Rats, Small and large animal carcasses<br>
Predators:
Hawks, Snakes, Wild cats<br>
Distinctive Features:
Large wings and sharp, curved beak

</h3></p></body></html>