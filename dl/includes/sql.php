<?php

error_reporting(E_ERROR);

$sql = "INSERT INTO `files`(
	`userid`, 
	`filename`, 
	`filesize`, 
	`filetype`, 
	`filepath`
	) 
	VALUES 
	(\"". get_user_id($user). "\",\"". 
	$_FILES['userfile']['name']. "\",\"". 
	$_FILES['userfile']['size']. "\",\"". 
	$_FILES['userfile']['type']. "\",\"". 
	$fileadress. 
	"\")";
	
	mysql_connect(HOST, USER, PASSWORD)
	or die("Zapytanie niepoprawne");
	
	$sqlinit = "USE secure_login";
	mysql_query($sqlinit);					//Bugfix for "No Database Selected"
	
	$query = mysql_query($sql)
	or die(mysql_error());