<?php  

	if (isset($_GET['disciplina']))
	 {

		$materie = $_GET['disciplina'];

		echo "Materia <u>".$materie."</u> a fost adaugat in lista";

		$f = fopen('materii2.txt','a');

	  	fwrite($f, $materie ."\n");

	  	fclose($f);
	} 


	

?>