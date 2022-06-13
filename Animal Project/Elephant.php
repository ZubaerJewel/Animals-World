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
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click Here or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About Elephants in Bangladesh:<h1></div>

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
 <p><h3 class="head4"> <div style="background-color:lightgreen">
<h1 style="text-align:center;color:red">Information About the Bengal Elephants:</h1>

Approximately 200 years ago, elephants were abundant throughout the area of modern Bangladesh. Today however they are listed as critically endangered and are one of the most threatened elephant populations in the range states. Up to 30% of Bangladesh’s elephant population is transient, migrating over the borders into neighboring India or Burma.
<h2>Bangladesh Elephant Population Figures:</h2>
Elephant Range:	1,800 (km)2 approx<br>
Country Ranking:	12th of 13<br>
Total Wild Elephants:	196-227<br>
Country Ranking:	11th of 13<br>
Total Captive Population:	100<br>
<h2>Physical description:</h2>
Asian elephants are the continent's largest terrestrial mammals. They can reach 6.4m in length and 3m at the shoulder, and weigh as much as 5 tonnes.

They are smaller than African elephants and have proportionally smaller ears, which they keep in constant motion in order to cool themselves. They also have a single 'finger' on the upper lip of their trunks as opposed to African elephants, which have a second one on the lower tip.

Their skin ranges from dark grey to brown, with patches of pink on the forehead, the ears, the base of the trunk and the chest.

A significant number of male Asian elephants are tuskless. The percentage of males with ivory varies from just 5% in Sri Lanka to aound 90% in southern India - possibly reflecting the intensity of past ivory hunting.
 <h2>Wild Elephants in Bangladesh:</h2>
Wild elephants in Bangladesh are limited to areas generally inaccessible to humans such as the isolated Chittagong Hill tracts or national parks, of which Himchari National Park and the Mainimukh and Pablakhali Wildlife Sanctuaries are protected areas.
<h2>The biggest threats to the wild elephants are:</h2>
1.	Habitat loss and fragmentation – Bangladesh’s human population has exploded over the past 30 years and the competition for land is intense – even more so since approximately 30% of the country floods during monsoon season.
2.	Scarcity of fodder – related to the above point, but also an indication of problems that arise during the dry season when natural food sources become more difficult to find. Elephant fodder represents only 14% of the total local plant species.
3.	Disturbed Corridors – A 2001-2003 IUCN study found that there were 15 important elephant corridors in Bangladesh involving the native elephants and migratory populations from India and Myanmar.
The above factors have had a serious effect on human elephant relations. Bangladesh is an exceptionally poor country and the government does not have the resources to effectively manage the conservation of wildlife. There are virtually no active conservation projects in Bangladesh.
<h2>Domesticated Elephants in Bangladesh:</h2>
 There are around 100 captive elephants in Bangladesh. Of these, about 75% are employed in the logging industry hauling timber while the remaining 25% work in the circus. Conditions are likely to be very difficult for both groups.
<h2>Summary:</h2>
The lack of financial resources and a dedicated government department as well as the almost total absence of any conservation work means the elephants of Bangladesh are reliant on their survival by living in areas isolated from human beings.
Bangladesh’s elephant population is possibly the most threatened in Asia. A major commitment to securing the existing corridors seems to be the elephants’ only chance of sustainable survival. Given the lack of resources available within the country, it requires a major commitment by the international community.
Bangladesh’s elephants may be the most threatened in Asia.
<h2>Reference:</h2> http://www.eleaid.com/country-profiles/elephants-bangladesh/ <br>
http://wwf.panda.org/knowledge_hub/endangered_species/elephants/asian_elephants/

</h3></p></body></html>