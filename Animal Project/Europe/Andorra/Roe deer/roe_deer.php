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
 <img src ="Roe-deer.jpg" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Roe-deer :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Roe-deer :</h1>




The Roe deer (Capreolus capreolus) (sometimes called the Western Roe Deer) is a medium sized to smallish deer species that has an 
average body weight of anywhere between 40-70lbs (15-31kg) and is usually around 3 to 41/2 feet in length (0.9-1.6 meters) and 
can bet 2 to 21/2 feet tall at the shoulder (0.6 to 0.8 meters). Its antlers are somewhat short and erect, 
while its facial coloring is a red to grey, while its coat overall is reddish. They do seasonally change
 colorings as in the summer it is more of a yellowish to golden red while during the winter it can be brown
 or even nearly black, while the underside is lighter. The tail is small, almost going without notice upon the
 first viewing, and only the males of the Roe deer have antlers. They live throughout Western Europe, from Spain to Turkey,
 and all the way up to Scandinavia and are also present in England, Scotland and Ireland. 

The antlers are lost in the winter time and re-grow each mating season. When a juvenile male grows its first set they are 
without any branching and are short at just 2-5 inches (5-14cm), while after their second set have been lost they begin to branch.
 If a healthy adult male called a buck has plenty of food their antlers will be branched and can grow up to nearly a foot 
 at 8-10 inches being the average (20-25cm) with two, three, and maybe even four tips. When the antlers regrow they are usually covered in 
 a fine fur, and that fur vanishes after the antlers have matured – additionally the Roe deer is the only known species of deer that regrows its antlers during winter. 

The Roe Deer’s binomial name is Capreolus capreolus, as their Genus is Capreolus which has one other species called the Siberian Roe Deer
 (sometimes Eastern Roe Deer). The Genus belongs to the Subfamily Capreolinae, which contains New World Deer (a misnomer as although all of 
 these deer originated in the Western Hemisphere, migrations many thousands of years ago distributed them to the Eastern Hemisphere) and 
 contains many species, such as Marsh Deer, Moose (Elk), Brocket, and the famous Reindeer. Capreolinae belongs to the family Cervidae of 
 which three other subfamilies of deer exist. Cervidae belongs to the Infraorder Pecora, of which there are six living families and includes
 species like the cow, the giraffe, antelope, sheep, and many more. Pecora belongs to the Suborder Ruminantia, of which only one other
 Infraorder exists, with all of its members extinct except for the Mouse Deer. Ruminantia belongs to the order Artiodactyla which contains

 three other orders that includes the Hippo, Camels, and pigs. It is thought that Whales may belong in this scheme however the ranking is 
 as of yet not established. Artiodactyla belong to the Superorder Laurasiatheria, of which members include bats, carnivores, anteaters, 
 moles, and many extinct orders. This Superorder belongs to the Infraclass Eutheria (placental mammals and extinct close relatives)
 which belongs to Theria (Placental + Marsupials) and that belongs to the Class Mammal. 


<h2>Some facts about the
Western roe deer :</h2>
Adult weight : 21.667 kg (47.6674 lbs)<br>
Maximum longevity : 18 years<br>
Female maturity :413 days<br>
Male maturity : 655 days<br>
Gestation : 153 days<br>
Weaning : 89 days<br>
Litter size : 2<br>
Litters per year : 1<br>
Interval between litters : 365 days<br>
Weight at birth : 1.01 kg (2.222 lbs)<br>
Weight at weaning : 8.693 kg (19.1246 lbs)<br>
Basal metabolic rate : 46 W<br>
Body mass : 21.5 kg (47.3 lbs)<br>Temperature : 37.85 C (100.13 F)<br>
Source: AnAge, licensed under CC



</h3></p></body></html>