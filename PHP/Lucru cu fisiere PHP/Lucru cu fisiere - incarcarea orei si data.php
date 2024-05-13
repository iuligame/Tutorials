<?php

	data_defauld_timezone_set('Europe/Bucharest');

	$secunde = time();

	echo data('d-m-Y H:i:s' , strtozone());

?>