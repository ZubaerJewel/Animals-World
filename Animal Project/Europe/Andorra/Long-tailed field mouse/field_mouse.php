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
 <img src ="rat.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Field Mouse :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the 
Long-tailed field mouse  :</h1>



The long-tailed field mouse (Apodemus Sylvaticus), also called the wood mouse belongs to the Muridae, a family of rodents and is commonly found in almost all parts of the world. They are similar to the yellow-necked mouse but with the difference that they do not have the typical yellow fur band around the neck. Also the wood mouse is smaller in size and has smaller ears. A typical feature of the wood mouse is that it can shed off its tail, if caught by it and this never grows back.

Although the name wood mouse is associated with the field mouse, yet actually it prefers the hedgerows and inhabits grasslands, forests and cultivated fields. The long-tailed field mouse is a common species and is found throughout Western Europe with the exception of Finland and northern Scandinavia. As it is a widespread species it is also found in Asia, northwestern Africa, Himalayas, British Isles and in nearby islands. They can cohabitate with the humans if adequate shelter is not available. Otherwise they live in burrows and tunnels built below the ground, either by themselves or by other animals.

The behavioral patterns of the field mice depict that they are terrestrial and nocturnal, becoming more active during the night. Basically seed eaters, they also store them, if found in abundance.
 When the seeds are least available they also eat small invertebrates like insects and snails and also eat fruits, berries and roots.

Physically, the long-tailed field mouse is a small rodent with an average body mass of 23.4 g or 0.82 oz. It has a head and body length of 60-150 mm and the length of the tail is between 70 to 145 mm. Although, the field mouse is moderately haired, its fur is soft and has a grayish brown or pale sand body color. It has large eyes and ears allowing vigilance and good vision at night. These rodents have a highly developed sense of smell and so do not dig for seeds randomly. 

Months from February to October are the breeding months of the field mouse. Females usually produce four litters in the breeding months and each litter has four to seven young mice. The gestation period is between 21-26 days. The body mass of these rodents at birth is a meager 2.5g and are weaned away after three weeks and they reach sexual maturity at about two months.

If we look at the economic importance of these rodents, there is usually a mixed response. The negative aspect lies in the fact that they are considered as pests as these rodents inflict serious damage to vegetable and cultivated farmlands. They dig up seeds before germination and completely destroy crop grasses. However, sometimes they are also considered as carriers of tree seeds and transport and bury these seeds. But this aspect is yet to be studied in detail. On the disease front, the African variant of the wood mouse is known to transmit the Hantavirus to the humans which is a life threatening virus.

Picture of the long-tailed field mouse by Pethan October 9, 2005 The Netherlands, licensed under Attribution ShareAlike 3.0
Keywords: yellow
The Long-tailed field mouse, wood mouse is listed as Least Concern. Does not qualify for a more at risk category. Widespread and abundant taxa are included in this category, on the IUCN Red List of Threatened Species



<h2>Some facts about the
Old World wood and field mouse  :</h2>

<bl>Adult weight :<bl>   0.023 kg (0.0506 lbs)<br>
<b>Maximum longevity :<b>   6 years<br>
<b>Female maturity : <b>  71 days<br>
<b>Male maturity :  <b> 65 days<br>
<b>Gestation :  <b> 23 days<br>
<b>Weaning :   <b>21 days<br>
<b>Litter size :<b>   5<br>
<b>Litters per year : <b>  4<br>
<b>Interval between litters :<b>   41 days<br>
<b>Weight at birth : <b>  0.002 kg (0.0044 lbs)<br>
<b>Body mass : <b>  0.024 kg (0.0528 lbs)<br>
<b>Temperature :  <b> 36.85 C (98.33 F)<br>



</h3></p></body></html>