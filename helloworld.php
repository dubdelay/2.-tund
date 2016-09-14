<?php
	//muutuja ette dolla dolla ja semikoolon lõpetab käsu
	$firstname = "Alari";
	$lastname = "Pennar";
	//echo trükib välja muutuja väärtuse
	
	/*
	echo $firstname;
	echo $lastname;
	*/
	
	//punkt liidab stringe
	echo $firstname." ".$lastname;
?>

<br>

<?php

	$age = 5;
	
	if ($age >= 130) 
	{
		//kui vastus tõene (true)
		echo "tatikas";
	} 
	else 
	{
		//kui vastus väär (false)
		echo "muld";
	}
?>

<br>

<?php
	/*
	for (1;2;3)
	{sisu+n} korda | 1) Enne 1. korda ($i = 0)| 2) Enne igat korda ($i < $age)| 3) Pärast igat korda ($i = $i + n)
	*/
	for ($i = 1; $i < $age; $i = $i +1)
	{
		echo /*$i.*/ "palju ";
	}
	echo "õnne";
?>

 <br>
 
 <?php
 
	echo date("d/m/Y"). " ning ".date("z"). ". päev aastas. ";
	echo "Kell on ". date("G:i");
?>