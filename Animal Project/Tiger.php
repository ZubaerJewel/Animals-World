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
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click HERE or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About Tigers in Bangladesh:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Bengal tiger:</h1>
The Bengal tiger, also known as the Royal Bengal Tiger or the Indian tiger, is the subspecies with the largest population. It is the national animal of India, place where its image is part of the traditions and the culture. In Bangladesh, it is also the national animal present even in the bills.
,<br>Order: Carnivora<br>
Family: Felidae<br>
Genre: Panthera<br>
Species: Panthera tigris<br>
Subspecies: Panthera tigris tigris
 
<h2>PHYSICAL DESCRIPTION:</h2>
The morphology of the Bengal tiger is beautiful and imposing. It is a mammal with thick legs, strong teeth and jaws and coat with the characteristic coloration pattern. In this regard, its skin shows a yellow to light orange color that in the belly and the internal areas of the legs becomes white or cream. Black, gray or brown stripes run vertically down all its body before the tail, where they become rings. There is a rare variant of the Bengal tiger. Due to a genetic mutation, some specimens exhibit a white coat with dark stripes and blue eyes, but it is important to know that they are not albino tigers, just a genetic variety.
The coat of these felines is useful for camouflage but differs from individual to individual. In fact, there are not two Bengal tigers with the dark stripes arranged in the same way, but they make up a uniquely identifiable pattern such as fingerprints in humans.
Males are typically larger and heavier than females. While the former have a length of 106-122 inches including the tail, the latter measure from 94 to 104 inches in length. Only the tail is between 33 and 43 inches long. The weight of males can range between 400 to 550 pounds, while that of females is 220-353 lbs.
<h2>DISTRIBUTION AND HABITAT:</h2>
The largest populations of Bengal tigers are in India, but there are some smaller groups in Bangladesh, Nepal, and Bhutan. It may also be present in areas of China and Burma. An estimate of the World Tiger Recovery Program indicates that there are about 440 individuals in Bangladesh, about 155 in Nepal and about 75 in Bhutan. The approximate number of specimens is less than 2,500.
However, the latest census of 2016 indicates that there are 106 tigers in Bangladesh, 103 in Buthan, 198 in Nepal and 2,226 in India. This information is from government sources and is not confirmed by independent organizations.
Bengal tiger habitats usually are tropical rainforests, marshes, and tall grasses.
<h2>FEEDING:</h2>
The power of the Bengal tiger is evident when observing its effectiveness at the time of hunting. This carnivorous animal search for medium or large prey, mainly ungulate mammals. In their diet, predominates the gaur, water buffalo, sambar, chital or mottled deer, wild boar and other species of deer. They occasionally consume small prey such as rabbits and porcupines, and may also attack domestic livestock; This is a consequence of the invasion of their habitat. Bengal tigers can ingest up to 40 kilograms of food on a single occasion, although they usually consume a smaller amount.
Since they can not follow prey for long distances, they use a strategy that combines stealth and camouflage. In the sunlight, the tiger hides in the tall grass to stalk an animal. Camouflage can be so effective that the unsuspecting prey can be just a few meters away from the tiger. When it is ready, it attacks silently by the side or behind the victim, jumps quickly and strikes with a blow with its retractable claws or a bite in the neck. Then drag the animal several meters to consume it or can even transport the body through to the water.
<h2>BEHAVIOR:</h2>
Like most tigers, Panthera tigris tigris is a solitary animal that rests in the shade during the day and hunts at dusk or dawn. Bengal tigers have been spotted in the shade or around bodies of water to cool off.
The search for food is entirely individual, and both sexes are territorial unless food conditions become tough. Transient contacts are possible in these situations. To mark their terrain, they spray the trees and rocks with a mixture of urine and musk.
The individual areas provide them sufficient supply of water and food, protection, tranquility and the possibility to contact with other tigers and in the case of females, the development of their young.
<h2>REPRODUCTION:</h2>
As mentioned, the Bengal tigers are individuals who perform most of their activities alone, except, of course, breeding. In this sense, the only social interactions occur during courtship, copulation, and parental care.
The basic social unit is that of the mother with her cubs. There is no mating season, but most of the offspring are born in the months of December to April. The sexual maturity in males occurs between 4 and five years of age, being earlier in females as they mature between 3 and four years.
The gestation period is on average 104-106 days, although they may be as less as 98 days, or a little more, up to 110 days. The female gives birth to 1 to 4 puppies in a place between the vegetation or in caves or crevices and begins to breastfeed them during 3-6 months after birth. At an age between 5 and six months, they start learning how to hunt, and at the age of 2 or 3 years, they begin their solitary life.
 

<h2>THREATS AND CONSERVATION:</h2>
The Bengal tiger is in danger of extinction, according to the International Union for Conservation of Nature (IUCN). Although it is the most populated species, its numbers keep decreasing rather than increasing, which has worried environmental organizations.
The Bengal tiger is in danger of extinction.
The main threats to this species are two: poaching and conflicts with humans over the territories. Poaching aim is to illegally trade the products obtained from tigers, such as decorative objects or the active ingredient of “drugs” to cure various diseases, but which have no proven efficacy. Their habitat, severely degraded by logging, and the invasion of humans in their territories keeps reducing. When tigers attack domestic animals or even humans, they unleash the wrath of people who in retaliation kill them.
Fortunately, since the 1970s India began to establish reserves through the Tiger Project that helped stabilize the Number of tigers. Also, the Indian Wildlife Protection Act of 1972 empowers the government to take conservation measures.
What is also interesting is that there is about 1% which are DNA verified hybrids. They have one parent that is a Bengal Tiger and one that is a Siberian Tiger. These hybrid tigers seem to do quite well in the wild with most of the males being sterile. Some think that this genetic link though was the result of mistakes in breeding while in captivity and then released into the wild.
The Wildlife Protection Society of India continues watching all allegations of tiger poaching. They have confiscated large amounts of tiger parts and pelts, but it is often hard for them to get to the source of who is responsible for killing and shipping them. Even though they arrest those caught with them, there are more people involved in the process than they can catch.
To get away with poaching though many of these hunters have shifted to poisoning the Tigers. Then they are found already dead, and they can’t be held responsible for killing them which is also the same practice that many farmers do to protect their livestock.
 
<h2>Reference:</h2> https://www.tigers-world.com/bengal-tiger/

</h4></p></body></html>