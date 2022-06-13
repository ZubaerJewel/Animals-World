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
 <img src ="deer_PNG10179.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">about the Albanian Deer:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Deer :</h1>


The deer is found in the forests of Europe, Asia and North America, where most deer grow to an average of about 1 meter tall. Deer-like creatures are found in Africa, however they are all antelope and not deer.
Deer stay in herds of approximately 25 deers per herd, mainly female deer and a dominant male deer known as a stag. The male deer are protective deer and will often fight other stags to protect their herd of female deer and to protect their pride.
The male deer horns shed and regrow every year, a little like the skin on a snake. The only species of deer with exception to this annual horn shedding is the Chinese water deer.
There are around 40 different species of deer found in the woodlands of the Northern Hemisphere. There are roughly six different species of deer found in the UK alone, however, only the red deer and the roe deer are truly native to the Isles.
<h2>Deer Facts :</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Artiodactyla<br>
Family:
Cervidae<br>

Scientific Name:
Odocoileus virginiana<br>
Type:
Mammal<br>
Diet:
Herbivore<br>
Size (H):
60cm-105cm (24in-206in)<br>
Weight:
10kg-450kg (22lbs-990lbs)<br>
Top Speed:
70km/h (43mph)<br>
Lifespan:
10-20 years<br>
Lifestyle:
Herd<br>
Conservation Status:
Threatened<br>

Colour:
Brown, Tan, White, Orange<br>
Skin Type:
Fur<br>
Favourite Food:
Acorns<br>
Habitat:
Dense forest and planted areas<br>
Average Litter Size:
1<br>
Main Prey:
Acorns, Fruit, Grass<br>
Predators:
Wolf, Bear, Cougar<br>
Distinctive Features:
Long ears and some male species have antlers



</h3></p></body></html>