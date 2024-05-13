<?php

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

?>
