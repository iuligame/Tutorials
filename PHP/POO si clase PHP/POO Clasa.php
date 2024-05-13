<?php
	/*

	class ClassName extends AnotherClass
	{

		function __construct(argument)
		{
			# code...
		}
	}

	*/


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
?>
