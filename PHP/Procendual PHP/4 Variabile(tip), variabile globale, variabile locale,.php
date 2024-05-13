<?php 
	echo "Variabile";
	echo "<br/>";
	echo "<br/>";

	$termen1 = 2;
	print " " .$termen1;
	var_dump($termen1);
	print "<br/>";

	$termen2 = $termen1 + 3;
	print "Suma a 2 numere este  " .$termen1;
	var_dump($termen1);
	var_dump($termen2);
	print "<br/>";


	$exemplu = "Iulian ";
	echo "Bine ai venit, ".$exemplu;
	var_dump($exemplu);
	print "<hr/>";
	print "<hr/>";



	
	echo "Tipuri de variabile";
	echo "<br/>";
	echo "<br/>";

	echo "Intreg";
	echo "<br/>";
	// intreger (intreg)

	$intreg1 = 25;
	echo " ".$intreg1;
	var_dump($intreg1);
	print "<br/>";

	$intreg2 = -25;
	echo " ".$intreg2;
	var_dump($intreg2);
	print "<hr/>";

	echo "Real, float";
	echo "<br/>";
	// float (real, cu virgula)

	$float1 = 1/2;
	echo " ".$float1;
	var_dump($float1);
	print "<br/>";

	$float2 = 1.20;
	echo " ".$float2;
	var_dump($float2);
	print "<br/>";

	$float3 = sqrt(2);
	echo " ".$float3;
	var_dump($float3);
	print "<br/>";

	$float4 = "pi ";
	echo " ".$float4;
	var_dump($float4);
	print "<br/>";

	$float5 = "e ";
	echo " ".$float5;
	var_dump($float5);
	print "<hr/>";


	echo "Sir de caractere";
	echo "<br/>";
	//sir de caractere

	echo "Atribuirea variabilelor";
	echo "<br/>";
	echo "<br/>";


	$sir1 = "2018";
	echo "anul nou, ".$sir1;
	var_dump($sir1);


	echo "Concatenarea variabilelor";
	echo "<br/>";
	echo "<br/>";

	$sir2 = 2019;
	echo "anul nou, ".$sir2;
	var_dump($sir2);


	echo "Boolean";
	echo "<br/>";
	//boolean

	$bool0 = 1;
	echo "propozitia 1+1=2 este ".$bool0;
	var_dump($bool0);
	print "<br/>";

	$bool1 = 0;
	echo "propozitia 4:2=1 este ".$bool1;
	var_dump($bool1);
	print "<br/>";

	$bool00 = true;
	echo 'propozitia: "Browser-ul nu ruleaza fara server" este '.$bool00;
	var_dump($bool00);
	print "<br/>";

	$bool11 = false;
	echo 'propozitia: "Masina merge fara roti"  este '.$bool11;
	var_dump($bool11);
	print "<hr/>";

	echo "Array, vector";
	echo "<br/>";
	//arrey, vector

	$materii = array("Matematica" , "Informatica" , "Limba roamana");
	echo "<br/>";
	echo "<br/>";
	echo $materii[1];
	var_dump($materii);

	print "<hr/>";
	print "<hr/>";

	echo "Variabile globale si locale";
	echo "<br/>";
	echo "<br/>";



	echo "Variabile globale";
	echo "<br/>";
	echo "<br/>";


	$a = 10;
	var_dump($a);

	$b = 20;
	var_dump($b);

	echo $a. "<br/>";
	echo $b. "<br/>";

	print "<hr/>";

	echo "Variabile locale";
	echo "<br/>";
	echo "<br/>";

	function exemplu1(){
	$b = 20;
	var_dump($b);
	echo $b;
	};

	function exemplu2(){
	$b = 20;
	echo $b;
	var_dump($b);

	$b = $b+ 20;
	echo $b;
	var_dump($b);
	};

	function exemplu3(){
	$a = 10;
	echo $a;
	var_dump($a);

	$b = $a+ 20;
	echo $b;
	var_dump($b);
	};

	function exemplu4(){
	$b = 20;
	echo $b;
	var_dump($b);

	$a = $b+ 20;
	echo $a;
	var_dump($a);
	};

	echo exemplu1(). "<br/>";
	echo exemplu2(). "<br/>";
	echo exemplu3(). "<br/>";
	echo exemplu4(). "<br/>";

	print "<hr/>";

	echo "Apelari la variabile globale si locale";
	echo "<br/>";
	echo "<br/>";

	echo exemplu1(). "<br/>";
	echo exemplu2(). "<br/>";
	echo exemplu3(). "<br/>";
	echo exemplu4(). "<br/>";

	echo $a. "<br/>";
	var_dump($termen1);

	echo $b. "<br/>";
	var_dump($termen1);

	print "<hr/>";
	print "<hr/>";

?>