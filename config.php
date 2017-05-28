<?php

	// SQL db info
	define('MYSQL_HOST',  'localhost');
	define('MYSQL_USER',  'root');
	define('MYSQL_PASS',  '');
	define('MYSQL_DB',    'rank');
	
	$mysql = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
	
	/* Vérification de la connexion */
	if (mysqli_connect_errno()) {
    printf("Mysql fail: : %s\n", mysqli_connect_error());
    exit();
	}
	
	$hidereferer = "https://privatelink.de/?";
	
?>
<!-- Rate my lame v0.2 alpha -->
