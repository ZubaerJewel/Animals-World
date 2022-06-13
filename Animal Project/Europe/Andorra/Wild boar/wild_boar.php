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
<h1 class="head2"><div style="background-color:black">About the Albanian Wild Boar :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Wild boar :</h1>





The Wild Boar (Sus scrofa) is the ancestor of the domestic pig. Its weight can reach up to 300 kilograms! Although 'boar' usually means male pig, the Wild boar is the name of the species. The males have both upper and lower tusks, while females have none. When in a group of pig, the pigs are called 'sounders'. Before the invention of synthetic fibers, toothbrushes were made from the hair on the back of a boar, although they contained lots of bacteria...

The Wild boar is listed as Least Concern (LR/lc), lowest risk. Does not qualify for a more at risk category. Widespread and abundant taxa are included in this category, on the IUCN Red List of Threatened Species


The wild boar is a bulky, massively built suid with short and relatively thin legs. The trunk is short and massive, while the hindquarters are comparatively underdeveloped. The region behind the shoulder blades rises into a hump and the neck is short and thick to the point of being nearly immobile. The animal's head is very large, taking up to one-third of the body's entire length.[3] The structure of the head is well suited for digging. The head acts as a plough, while the powerful neck muscles allow the animal to upturn considerable amounts of soil:[33] it is capable of digging 8–10 cm (3.1–3.9 in) into frozen ground and can upturn rocks weighing 40–50 kg (88–110 lb).[9] The eyes are small and deep-set and the ears long and broad. The species has well developed canine teeth, which protrude from the mouths of adult males. The middle hooves are larger and more elongated than the lateral ones and are capable of quick movements.[3] The animal can run at a maximum speed of 40 km/h and jump at a height of 140–150 cm (55–59 in).[9]Sexual dimorphism is very pronounced in the species, with males being typically 5–10% larger and 20–30% heavier than females. Males also sport a mane running down the back, which is particularly apparent during autumn and winter.[34] The canine teeth are also much more prominent in males and grow throughout life. The upper canines are relatively short and grow sideways early in life, though they gradually curve upwards. The lower canines are much sharper and longer, with the exposed parts measuring 10–12 cm (3.9–4.7 in) in length. In the breeding period, males develop a coating of subcutaneous tissue, which may be 2–3 cm (0.79–1.18 in) thick, extending from the shoulder blades to the rump, thus protecting vital organs during fights. Males sport a roughly egg-sized sack near the opening of the penis, which collects urine and emits a sharp odour. The function of this sack is not fully understood.[3]








<h2>Some facts about the
Wild boar:</h2>
Adult weight : 180 kg (396 lbs)<br>
Maximum longevity : 27 years<br>
Female maturity :334 days<br>
Male maturity : 768 days<br>
Gestation : 115 days<br>
Weaning : 56 days<br>
Litter size : 7<br>
Litters per year : 2<br>
Interval between litters : 230 days<br>
Weight at birth : 0.96 kg (2.112 lbs)<br>
Weight at weaning : 5.7 kg (12.54 lbs)<br>
Basal metabolic rate : 104 W<br>
Body mass : 135 kg (297 lbs)<br>



</h3></p></body></html>