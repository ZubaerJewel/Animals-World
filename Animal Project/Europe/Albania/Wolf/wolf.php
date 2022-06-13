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
 <img src ="white-wolf.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Wolf:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Wolf:</h1>

The wolf is thought to be an ice age survivor, dating wolves around 300,000 years ago. The wolf is accepted to be the ancestor of the domestic dog as the wolf is thought to have selectively bred in order to breed appealing traits typical of puppies and to eliminate the not so appealing traits of adult wolves.
The grey wolf is a highly adaptive animal found in all kinds of terrain. Wolves inhabit forests, deserts, mountains, tundras, grasslands and even urban areas with the wolf being a particularly dominant and ruthless predator within it's environment. They vary in color from pure white to pure black and every shade of brown and gray inbetween. At one time the wolf had the widest distribution of any mammal. The biggest wolves on earth live in Alaska and average 125-135 lb. One specimen was taken that weighed 200 lb. The smallest wolves live in Iran and average about 60 lb.
The wolf lives to be approximately 10 years old in the wild. Wolves live in packs that generally consist of the alpha male wolf, his mate the alpha female, and their offspring of various ages. Other wolves may also join, but it is the parents that are the leaders. The wolf has no real natural predators; their biggest threat is other wolf packs on adjacent territories. The wolf has been known to live up to 20 years old in captivity.

<h2>Wolf Facts:</h2>
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
Canis
<br>
Scientific Name:
Canis Rufus<br>
Type:
Mammal<br>
Diet:
Carnivore<br>
Size:
60-91cm (24-36in)<br>
Weight:
25-40kg (55-88lbs)<br>
Top Speed:
75km/h (46mph)<br>
Lifespan:
10-12 years<br>
Lifestyle:
Pack<br>
Conservation Status:
Threatened

Colour:
Black, Brown, Grey, White<br>
Skin Type:
Fu<br>
Favourite Food:
Deer<br>
Habitat:
Grass plains and woodland<br>
Average Litter Size:
4<br>
Main Prey:
Deer, Elk, Moose<br>
Predators:
Human<br>
Special Features:
Thick, warm fur and loud howling noise



</h3></p></body></html>