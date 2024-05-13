<?php

	if (!empty($_FILES['bicicleta']['name'])) {
		echo "OK ";
		echo "<br/>";
		print_r($_FILES['bicicleta']['name']);
		$name = $_FILES['bicicleta']['name'];
		$tmp_name = $_FILES['bicicleta']['tmp_name'];
		$size = $_FILES['bicicleta']['size'];
			if($size <= 100000){
						move_uploaded_file($tmp_name, 'imagine/'.$name);
						echo "iamgina a fost incarcata cu succes";
						echo "<br/>";
				 } else {
				 	echo "iamgina nu are spatiu de incarcat";
						echo "<br/>";
				 }
	} else {
		echo " Imagina nu a fost incarcata";
	}

?>