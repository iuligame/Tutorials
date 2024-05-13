<?php

	echo "Functii prestabilite(prenedefinite)";
	print "<br/>";
	print "<br/>";

	echo "strlen(string)";
	print "<br/>";
	print "<br/>";

	$var = "Exemplu ";
	echo strlen($var)." ";

	$var1 = "Exemplu, Exemplu";
	echo strlen($var1)." ";

	print "<hr/>";


	echo "str_word_count(string)";
	print "<br/>";
	print "<br/>";

	$var2 = "Exemplu";
	echo str_word_count($var2);

	$var3 = "Exemplu, Exemplu";
	echo str_word_count($var3);

	print "<hr/>";


	echo "strrev(string)";
	print "<br/>";
	print "<br/>";

	$var5 = "Valentin";
	echo strrev($var5);

	print "<hr/>";


	echo "strpos(haystack, needle)";
	print "<br/>";
	print "<br/>";

	$var6 = "Iulian ia licenta in ultimul an";
	$caut = "en";
	echo strpos ($var6, $caut);

	print "<hr/>";	


	echo "str_replace(search, replace, subject)";
	print "<br/>";
	print "<br/>";

	$subject = "Iulian a luat 4 la engleza la examen";
	$search = "4";
	$replace = "10";
	echo str_replace($search, $replace, $subject);


	print "<hr/>";
	print "<hr/>";

	echo "Functii definite de utiizator";
	print "<br/>";
	print "<br/>";

	/*
		function nume($var1, $var2)
		{
			// bloc de instructiuni
		}

		$vatiabila = function ($var1, $var2)
		{
			// bloc de instructiuni
		};		
	*/

	function calculeaza1($var1, $var2)
	{
		$total=$var1+$var2;
		return $total;
		echo $total."";
	}

	print "<hr/>";


	$total = calculeaza1(10, 20);
	echo $total."";


	function afiseaza($var="CEVA")
	{
		echo $var."";	
	}


	$exemplu = "Exemplu";
	afiseaza($exemplu);

	$exemplu2 = "Exemplu2";
	afiseaza($exemplu2);

	print "<hr/>";
	print "<hr/>";




	echo "Instructiune return";	
	print "<br/>";
	print "<br/>";


	function calculeaza2($var1, $var2)
	{
		$total2=$var1+$var2;
		return $total2;
	}

	$total2 = calculeaza2(10, 20);

	echo $total2."";

	print "<br/>";


	$total3 = function ($var1, $var2)
	{
		$total3 = $var1 + $var2;
		return $total3;
	};

	echo $total3(10, 20)."";		

	print "<br/>";


	$total4 = function ($var1, $var2)
	{
		$total4 = $var1 + $var2;
		return $total4;
	};

	echo $total4(20, 30)."";

	print "<hr/>";
	print "<hr/>";

?>