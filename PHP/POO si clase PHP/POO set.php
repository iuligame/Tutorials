<?php 
	echo "Set";
	//Set, Get

	print "<br/>";
	print "<br/>";

	class Municipiu {
	  private $nume = "Mizil";
	  private $strada = "Tohani";
	  private $numarul = "5";

	  public function __set($proprietate, $valoare) {
  		if (property_exists($this, $proprietate)) {
  			echo "Valoarea proprietate {$proprietate} a fost schimbata din {$this->$proprietate} in {$valoare}<br/>";

  			$this->$proprietate = $valoare;
  		} else {
  			echo 'Proprietatea '.$proprietate.' nu exista in clasa aceasta.';
  		}  		
	  	  	
	  }

	}

	$Locuinta = new Municipiu();
	$Locuinta->nume = "Ploiesti";
	$Locuinta->strada = "Garii";
	$Locuinta->numarul = "8";
?>

