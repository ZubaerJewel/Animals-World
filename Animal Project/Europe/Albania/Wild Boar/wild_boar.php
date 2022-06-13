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
 <img src ="wild-boar.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Wild Boar:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Wild Boar :</h1>

Wild Boar Classification and Evolution
The Wild Boar is a species of Wild Pig, native to the forests of Europe, north-west Africa and it is also found throughout Asia. The Wild Boar has an extremely wide distribution with the number of estimated Wild Boar subspecies ranging from 4 to 25. Naturally, it is hard to classify them all as they can easily interbreed, so it is widely agreed that there are four main subspecies which are determined by their location. They are all very similar in size and appearance, but tend to vary somewhat in colour, depending on their geographic location. The Wild Boar is an extremely adaptable animal as it is found in a variety of different habitats, eats almost anything that will fit in its mouth and not only runs fast, but also swims well too. They are also commonly known as European Wild Pigs, Hogs or simply Boars.

Wild Boar Anatomy and Appearance
The Wild Boar is a medium-sized mammal with a large head and front end, that leads into a smaller hind. They have a thick and course double coat of fur, that consists of a harder, bristly top layer, with a softer undercoat beneath it. The hair that runs along the ridge of the Wild Boar's back is also longer than the rest. The Wild Boar varies from brown, to black, to red or dark grey in colour, something which generally depends on the individual's location. For example Wild Boar individuals found in Western Europe tend to be brown, where those inhabiting the forests of Eastern Europe can be completely black in colour. The Wild Boar has incredibly poor eyesight due to its very small-sized eyes, but they also have a long, straight snout which enables them to have an incredibly acute sense of smell.

Wild Boar Distribution and Habitat
The Wild Boar is the most widely distributed land mammal on Earth as its native range extends from Western Europe, right across to Japan to the east, and down to the rainforests of Indonesiain the south. The four separate subspecies are determined by their location with one inhabiting Europe, north-western Africa and western Asia; another is found across northern Asia and in Japan; the third inhabits the tropical jungles of India, South East Asia and the Far East, with the last being found only in Indonesia. Wild Boars are found in a variety of different habitatsincluding tropical jungles and grasslands, but they tend to favour deciduous broad-leafed forests where the vegetation is incredibly dense.

Wild Boar Behaviour and Lifestyle
Wild Boar are nocturnal animals that only come out at night to forage for food. They spend around 12 hours sleeping in a dense nest of leaves during the day, before waking up to find a meal under the cover of night. Female Wild Boars are relatively sociable animals, inhabiting loose territories in groups known as sounders which can contain between 6 and 30 individuals. Sounders consist of breeding females and their young and can often be found in the same area as other groups, although the two tend not to mix. Males however, are solitary for the majority of the year, with the exception of during the breeding season when they can be found in close proximity of both the sounders, and indeed other males. Male Wild Boar compete with one another by fighting for the chance to mate with a female.

<h2>Wild Boar Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Artiodactyla<br>
Family:
Suidae<br>
Genus:
Sus<br>
Scientific Name:
Sus scrofa<br>
Common Name:
Wild Boar<br>
Other Name(s):
Wild Pig, Wild Hog, Boar<br>

Group:
Mammal<br>
Number Of Species:
4<br>
Location:
Throughout Europe and Asia<br>
Habitat:
Deciduous broad-leaf forests<br>

Colour:
Brown, Red, Black, Grey<br>
Skin Type:
Fur<br>
Size (H):
55cm - 100cm (21.6in - 39.3in)<br>
Weight:
80kg - 175kg (176lbs - 386lbs)<br>
Top Speed:
48kph (30mph)<br>

Diet:
Omnivore<br>
Prey:
Berries, Roots, Worms<br>
Predators:
Tiger, Wolves, Humans
<br>
Lifestyle:
Nocturnal<br>
Group Behaviour:
Sounder
<br>
Lifespan:
15 - 20 years<br>
Age Of Sexual Maturity:
7 - 10 months<br>
Gestation Period:
3 - 4 months<br>
Average Litter Size:
5<br>
Name Of Young:
Piglet<br>
Age Of Weaning:
2 - 3 months
<br>
Conservation Status:
Least Concern<br>
Estimated Population Size:
Sustainable<br>
Biggest Threat:
Habitat loss<br>

Most Distinctive Feature:
Long, hard and straight snout



</h3></p></body></html>