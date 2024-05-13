<?php

	echo "Instructiune de conditie if else";
	print "<br/>";
	print "<br/>";

	/*
	if (condiie) {
		//bloc de instructiuni 1;
	} else {
		//bloc de instructiuni 2;
	}*/


	/*
	if (condiie) {
		//bloc de instructiuni 1;
	} if else (conditie) {
		//bloc de instructiuni 2;
	} if else (conditie) {
		//bloc de instructiuni 3;


		....
	}  else {
		//bloc de instructiuni n;
	}*/

	
	$var1=30;
	$var2=10;



	if ($var2!=0) {
		echo " ".$var1/$var2;
	} else {
		echo " Fractia nu se poate calcula ";
		echo " ".$var1/$var2;
	}
	

	$var3=16;

	if ($var3 >= 0) {
		echo " ".sqrt($var3);
	} else {
		echo " Numarul nu este real ";
		echo " ".sqrt($var3);
	}


	print "<br/>";


	$var4=20;

	if ($var4==20) {
		echo $var4." este egal cu 20 ";
	} else if($var>20) {
		echo $var4." este mai mare cu 20 ";
	} else if($var<20) {
		echo $var4." este mai mic cu 20 ";
	} else {
		echo $var4." nu este egal cu 20 ";
	}
	
 ?>