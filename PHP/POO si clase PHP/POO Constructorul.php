<?php

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

?>
