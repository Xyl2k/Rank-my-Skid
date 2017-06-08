<?php

	// SQL db info
	define('MYSQL_HOST',  'localhost');
	define('MYSQL_USER',  'root');
	define('MYSQL_PASS',  '');
	define('MYSQL_DB',    'rank');

	try {
		$mysql = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASS);
	}
	catch (Exception $e) {
        die('MySQL error: ' . $e->getMessage());
	}

	$hidereferer = "https://privatelink.de/?";
