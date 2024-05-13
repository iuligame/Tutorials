
<?php

	echo "Redenumirea si stergerea unui fisier";
	//Redenumirea unui fisier

	print "<br/>";
	print "<br/>";


	$file = 'materii redenumirea unui fisier.txt';

	if (file_exists($file)) {
			 if (rename($file, 'discipline.txt')){
					echo "Numele fisierului s-a schimbat.";
			 } else {
					echo "Numele fisierului nu s-a schimbat.";
				}

 }
	
	


	print "<br/>";
	print "<br/>";

	echo "Stergerea unui fisier";
	//Stergerea unui fisier


	print "<br/>";
	print "<br/>";

	$file = 'fisierul sters.txt';

	if(file_exists($file))
	{
			if (unlink($file)){
					echo "Fisierul s-a sters.";
			 } else {
					echo "Fisierul inca esista.";
				}
	}

?>

