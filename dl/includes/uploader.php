<?php
include_once 'psl-config.php';
include_once 'server-info.php';
include_once 'db-connect.php';
include_once 'functions.php';
 
sec_session_start();

$user = htmlentities($_SESSION['username']);
$filepath = "C:\\GitHub\\php-filesharing\\dl\\upload\\";							//Change your path to 'upload' folder
$userpath = $filepath. $user. "\\";
$userfilepath = $filepath. $user. "\\". $_FILES['userfile']['name'];
$tmpfile = $_FILES['userfile']['tmp_name'];
$fileadress = $serveradress. $user. "/". $_FILES['userfile']['name'];

if( $_FILES['userfile']['name'] != "" )
{
	if (!file_exists($filepath. htmlentities($_SESSION['username']). '\\')) {
    mkdir($filepath. htmlentities($_SESSION['username']). '\\', 0777, true);
}
	move_uploaded_file( $tmpfile, $userfilepath ) or 
           die( "Could not copy file!");		

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
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['userfile']['name'];  ?>
<li>File size: <?php echo $_FILES['userfile']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['userfile']['type'];  ?>
<li>File path: <?php echo '<a href="'. $fileadress. '">'. $fileadress. '</a>'; ?>
</ul>
</body>
</html>