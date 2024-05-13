<?php

	echo "Get";

	print "<br/>";
	print "<br/>";

	//Get

	class Municipiu {
  private $nume = "Mizil";
  private $strada = "Tohani";
  private $numarul = 5;

  public function __get($proprietate) {
		if (property_exists($this, $proprietate))
			echo "Ai incercat sa accesaz valoarea proprietatii ".$proprietate.".";

		} else {
			echo "Proprietatea ".$proprietate." nu exista in clasa aceasta.";
   
		}  		
  	  	
  }


	$Locuinta = new Municipiu();
  $Locuinta->nume; 
  $Locuinta->strada; 
  $Locuinta->numarul;
	}

?>