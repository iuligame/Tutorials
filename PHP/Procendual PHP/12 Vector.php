<?php 
	echo "Vector";
	print"<br>";
	print"<br>";

	$materii = array("Matematica" , "Informatica" , "Limba roamana");
	echo "<br/>";
	echo "<br/>";
	echo $materii[1];
	var_dump($materii);


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
?>