<?php

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

?>
