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
 <img src ="bat.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Barbastelle Bat :<h1></div>

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
<h1 style="text-align:center;color:red">Information about the Barbastelle Bat:</h1>




The Western barbastelle (Barbastella barbastellus) is a unique European bat, notable not only for its wide, forward-facing ears which are connected across its forehead-the "unibrow" of the bat world, so to speak-but also for its singular way of sneaking up on the moths that make up the majority of its diet. Like all bats, barbastelles use echolocation to navigate in flight, emitting high-frequency sounds that bounce off objects and echo back to them, indicating relative position. Unlike other bats, however, the barbastelles call is so soft that their prey, which are primarily moths, don.t hear them coming until they are just about 10 feet away. By comparison, eared moths can hear the echolocation calls of most other bats when they are about 100 feet away.

Barbastelles are of medium size, typically between 40 to 55 mm long, or 1-1/2 to 2-1/3 inches, not counting its large tail, which, at between 36 to 52 mm (about 1-1/2 to 2 inches) is nearly the length of its body. Their average weight varies between 6 to 13 grams, or about 1/5 oz. to just under 1/2 oz., and the females are larger than the males. Typical wingspans run about 245 mm to 300 mm, or 9-1/2 to nearly 12 inches. Their colors are dark brown to black, and as they mature their fur becomes lighter at the outer tips.
 This "frosting" of the hairs tends to appear in clusters on their throat and upper chest; in fact, their name originated from the Latin words meaning "star beard."

Though the barbastelle has developed a remarkable evolutionary trait in its ability to quietly hunt prey, it’s a relatively rare species, its population having dwindled due to causes thought to be related both to deforestation and the widespread use of insecticides. In 2008, the most recent assessment, this species was classified as Near Threatened by the International Union for Conservation of Nature (IUCN).

These bats can be found in southern England and areas in Italy, Germany, Norway, Switzerland and other parts of Europe. Their favorite habitats are in older forests, in hollow, loose-barked or storm-cracked trees. Some can be found roosting in caves and even in spaces under residential roofs and near cellars. When hunting, they prefer to fly about 10 to 20 feet above the ground-relatively low in bat terms-because their uniquely soft echolocation calls don’t travel as great a distance as those of their louder bat brethren.
The Western barbastelle is listed as Vulnerable (VU), considered to be facing a high risk of extinction in the wild, on the IUCN Red List of Threatened Species

The barbastelle has, like the rest of the animal kingdom of this world, participated in an evolutionary arms race. The foe for the bat order Chiroptera is its prey, the moth order Lepidoptera. To minimize the risk of the bats' echolocation, moths [and in rarest examples, butterflies] have evolved to detect the echolocation calls of hunting bats, and evoke evasive flight manoeuvres, or reply with their own ultrasonic clicks to confuse the bat's echolocation. The Arctiidae subfamily of Noctuid moths uniquely respond to bat echolocation in three prevailing hypotheses: startle, sonar jamming, and acoustic aposematic defence. All these differences depend on specific environmental settings and the type of echolocation call; however, these hypotheses are not mutually exclusive and can be used by the same moth for defence.
In response, to continue the race, some bat families are known to use clicks at frequencies above or below moths' hearing ranges. This is known as the allotonic frequency hypothesis. It argues that the auditory systems in moths have driven their bat predators to use higher or lower frequency echolocation to circumvent the moth hearing. Barbastelle bats have evolved to use a quieter mode of echolocation, calling at a reduced volume and further reducing the volume of their clicks as they close in on prey moths. The lower volume of clicks reduces the effective successful hunting range, but results in a significantly higher number of moths caught than other, louder bat species. Moths have further evolved the ability to discriminate between high and low echolocation click rates, which indicates whether the bat has just detected their presence or is actively pursuing them. This allows them to decide whether or not defensive ultrasonic clicks are worth the time and energy expenditure.




<h2>Some facts about the
Western barbastelle:</h2>

Adult weight : 0.01 kg (0.022 lbs)<br>
Maximum longevity : 23 years<br>
Litter size : 2<br>
Interval between litters : 365 days



</h3></p></body></html>