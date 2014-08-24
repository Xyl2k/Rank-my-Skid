<?php

	require('config.php');
	
?>

<html>
<head>
	<title>Rank My Lame</title>
	<link rel="stylesheet" media="screen" type="text/css" title="Designed" href="design.css" />
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<script src="script.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
</head>
<body onload="default_page();">
	<div id="header"></div>
	<div id="slogan">
	
		Le ridicule ne tue pas, mais il laisse des traces.
	</div>
	<div id="search">
		<label for="search">Recherche (nick/board): </label>
		<input type="text" id="input_search" value="Search..."/>
	</div>
	
	<div id="list_fail">
	</div>
	
</body>
</html>