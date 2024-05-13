<?php

	echo "instructiuni repetitive";
	print "<br/>";
	print "<br/>";


	//Instructiuni repetative  

	// While
	// Do while
	// For
	// Forech

	echo "While";
	print "<br/>";
	print "<br/>";


	//While
	/*while (conditie) {
		//bloc de instructiuni;
	};*/

	$numar = 10;


	echo $numar." ";
	while ($numar > 0) {
		echo"<br/>";
		echo $numar." ";
		$numar--;

	}
	echo"<br/>";
	echo"unlimul numar obtinut este ".$numar;
	echo"<br/>";
	echo"<br/>";


	echo "Do while";
	print "<br/>";
	print "<br/>";


	//Do While
	/*While do {
		//bloc de instructiuni;
	} while (conditie );*/



	$numar = 10;


	echo $numar." ";
	 do {
		echo" <b/r>";
		echo $numar." ";
		$numar--;
	} while ($numar > 0);


	echo"<br/>";
	echo"unlimul numar obtinut este ".$numar;
	echo"<br/>";
	echo"<br/>";


	echo "For";
	print "<br/>";
	print "<br/>";

	

	//For
	/*for ($i=; $i < ; $i++) { 
		//bloc de instructiuni
	};*/



	$numar = 10;


	for ($numar=0; $numar>0 ; $numar-1) { 
		echo"< br/>";
		echo $numar." ";
		$numar--;
	}

	echo"<br/>";
	echo"unlimul numar obtinut este ".$numar;
	echo"<br/>";
	echo"<br/>";


	$numar = 10;


	for ($numar=0; $numar>0 ; $numar++) { 
		echo"< br/>";
		echo $numar." ";
		$numar++;
	}

	echo"<br/>";
	echo"unlimul numar obtinut este ".$numar;
	echo"<br/>";
	echo"<br/>";



	echo "Forech";
	print "<br/>";
	print "<br/>";


	//Fprech
	/*foreach ($variable as $key => $value) {
		//bloc de instructiuni
	}*/

	/*foreach ($variable as &$key => $value) {
		//bloc de instructiuni
	}*/

	print "<br/>";
	$array=['rosi','ardei','crtofi','morcovi'];

	for ($i=0; $i < count($array) ; $i++) { 
		echo $array[$i]."<br/>";
	}

	print "<br/>";
	foreach ($array as $legume) {
		echo $legume."<br/>";
	}

	print "<br/>";
	foreach ($array as $legume) {
		$legume = "pizza";
		echo $legume."<br/>";
	}

	print "<br/>";
	foreach ($array as &$legume) {
		$legume = "pizza";
		echo $legume."<br/>";
	}

	print "<br/>";
	foreach ($array as $legume => $pizza) {
		echo $legume."<br/>";
	}

	print "<br/>";
	foreach ($array as $legume => &$pizza) {
		echo $legume." ".$pizza."<br/>";
	}


//Instructiunea Switch

	/*

	switch(variabila )
	{
		case valoare1:
			//	bloc de instrctuni 1
			break;
		case valoare2:
			//	bloc de instrctuni 2
			break;
		case valoare3:
			//	bloc de instrctuni 3
			break;
		default:
			// bloc de instructiuni default
	}

	*/

	print "<br/>";

	$numar=5;

	switch($numar )
	{
		case 5:
			echo '5';
			break;
		case 10:
			echo '10';
			break;
		case 15:
			echo '15';
			break;
		default:
			echo 'numarul nu este gasit in cazurile de mai sus.';

	}

	print "<br/>";

	$numar=10;

	switch($numar )
	{
		case 5:
			echo '5';
			break;
		case 10:
			echo '10';
			break;
		case 15:
			echo '15';
			break;
		default:
			echo 'numarul nu este gasit in cazurile de mai sus.';

	}

	print "<br/>";

	$numar=15;

	switch($numar )
	{
		case 5:
			echo '5';
			break;
		case 10:
			echo '10';
			break;
		case 15:
			echo '15';
			break;
		default:
			echo 'numarul nu este gasit in cazurile de mai sus.';

	}

	print "<br/>";

	$numar=20;

	switch($numar )
	{
		case 5:
			echo '5';
			break;
		case 10:
			echo '10';
			break;
		case 15:
			echo '15';
			break;
		default:
			echo 'numarul nu este gasit in cazurile de mai sus.';

	}

	$numar=20;

	switch($numar )
	{
		case 5:
			echo '5';
			break;
		case 10:
			echo '10';
			break;
		case 15:
			echo '15';
			break;
		
	}
?>
