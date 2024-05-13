<?php

	class Exemplu{

		public $variabila = "Ma aflu in clasa Exemplu";

		public function test() {
			$variabila2 = "Ma aflu in clasa Exemplu";

			return $variabila2;

		}
	}

$tutorial = new Exemplu;

echo $tutorial->variabila;

print "<br/>";

echo $tutorial->test();

print "<br/>";
print "<br/>";




echo "Functia in clasa";

print "<br/>";
print "<br/>";

//Functia in clasa

class Exemplu2{

		public $variabila = "Ma aflu in clasa Exemplu";

		public function test() {
			$variabila2 = "Ma aflu in clasa Exemplu";

			return $variabila2;

		}
	}

$tutorial = new Exemplu2;

echo $tutorial->variabila;

print "<br/>";

echo $tutorial->test();

print "<br/>";
print "<br/>";




echo "Constructor";

print "<br/>";
print "<br/>";

//Constructor

class Constructor {
  public $numar1;
  public $numar2;

	public function __construct($num1, $num2) {
		echo "Aceasta este clasa ".get_class();
    print "<br/>";
    echo "Am creat un constructorul ";

    $this->numar1 = $num1;
    $this->numar2 = $num2;
	}
}

$tutorial = new Constructor(50, 30);

print "<br/>";
echo $tutorial->numar1;
print "<br/>";
echo $tutorial->numar2;

print "<br/>";
print "<br/>";



echo "Mostenirea";
print "<br/>";
print "<br/>";
//Mostenirea

echo "Public";
print "<br/>";
print "<br/>";
//Public


print "<br/>";

class Parinte1 {

  public function afiseaza() {
    return "Aceasta este metoda afiseaza";

  }

}

class Copil1 extends Parinte1 {

  public function exemplu() {
    return "Aceasta este metoda exemplu";
  }

}

$tutorial = new Copil1();


print "<br/>";
echo $tutorial->afiseaza();
print "<br/>";
echo $tutorial->exemplu();

print "<br/>";
print "<br/>";


echo "Vizibilitatea";
print "<br/>";
print "<br/>";
//Vizibilitate

echo "Privat";
print "<br/>";
print "<br/>";
//Privat

class Varsta {

  private $varsta = 50;

  public function __construct($varsta)
  {
      $this->varsta = $varsta;
  }

  public function afiseaza() {

    echo "Varsta: $this->varsta";

  }

}



class Mesaj extends Varsta {

  public function exemplu() {
    return "Aceasta este metoda exemplu";
  }

}


$Iulian = new Mesaj(26);


print "<br/>";
$Iulian->afiseaza();
print "<br/>";
echo $Iulian->exemplu();


echo "Vizibilitate(ierahie)";
print "<br/>";
print "<br/>";

//Vizibilitate(ierahie)


echo "Protected";
print "<br/>";
print "<br/>";

//Protected

class Animal {
  public $nume = 'Rex';
  private $varsta = 12;
  protected $sunet = 'Ham!';

  public function ziVarsta() {
    echo $this->varsta;
  }
}

class Caine extends Animal {
  public function ziSunet() {
    echo $this->sunet;
  }
}

$catel = new Caine;
$catel->ziVarsta();
$catel->ziSunet();

print "<br/>";
print "<br/>";




echo "Static, Set, Get";
//Static, Set, Get

print "<br/>";
print "<br/>";

class Persoana {

  public static $nume;
  public static $varsta;

  public static function set($nume,$varsta){
    self::$nume=$nume;
    self::$varsta=$varsta;
  }

  public static function getNume(){
    return self::$nume;
  }

  public static function getVarsta(){
    return self::$varsta." ani";
  }
}


Persoana::set("Mihai ","30");
echo Persoana::getNume();
echo " ";
echo Persoana::getVarsta();
echo " ";
