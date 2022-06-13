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
 <img src ="Brown-Bear-PNG-Photo.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Brown Bear::<h1></div>

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


<h1 style="text-align:center;color:red">Information about the Brown Bear:</h1>





	
	

Brown Bears are found in many parts of North America and Eurasia, where the bears inhabit wooded and mountainous areas. The brown bear is also the national animal for a number of states in North America, Europe and Asia.

Brown bears tend to feed on vegetation, fish and small land mammals, but the bears will only occasionally hunt bigger mammals like deer. Brown bears don't seem to be a great threat towards humans, although the mother brown bears will protect their young bear cubs.

Brown bears generally grow to about 2 - 3m tall, looking enormous when the bear stands on its hind legs. Brown bears have sadly been the target of taxidermists over the years resulting in the brown bear population declining. Today there is more in the way of Animal Rights meaning that the brown bear population can grow once again.

The brown bear is one of the largest species of bear with only the grizzly bear and the polar beargetting to bigger sizes. Both the grizzly bear and the polar bear however, are distant sub-species of the brown bear that have today adapted to living in a different environment.

The brown bear is an extremely dominant predator in its environment, with only threats from human hunters posing any real dominance over the brown bear's predatory rights. The brown bear has an enormous muscle between the brown bear's shoulder blades that makes the brown bear stand out above other bear species.

The enormous shoulder muscle that the brown bear has means that the brown bear has immensely strong forearms and allows the bear to break animal bones with one simple swipe. The brown bear has massive paws with claws that can grow longer than 15cm in length.

There are thought to be around 200,000 brown bear individuals left in the wild over half of which are found in Russia. Around 95% of the brown bear population found in the USA is in the northernmost state of Alaska. Most of the brown bears that inhabit regions of Canada are found in the west of the country in the Rocky Mountain range.

<h2>Brown Bear Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Carnivora<br>
Family:
Ursidae<br>
Genus:
Ursus<br>

Scientific Name:
Ursus Arctos<br>
Type:
Mammal<br>
Diet:
Omnivore<br>
Size (H):
1.5m-2.8m (5ft-9.2ft)<br>
Weight:
136kg-390kg (300lbs-860lbs)<br>
Top Speed:
56km/h (35mph)<br>
Lifespan:
20-30 years<br>
Lifestyle:
Solitary<br>
Conservation Status:
Endangered<br>

Colour:
Brown, Black, Tan<br>
Skin Type:
Fur<br>
Favourite Food:
Fish<br>
Habitat:
Forest and mountainous regions.<br>
Average Litter Size:
3<br>
Main Prey:
Fish, Fruit, Insects<br>
Predators:
Huan, Wolf, Cougar


</h3></p></body></html>