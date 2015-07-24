<?php
include_once 'psl-config.php';
include_once 'server-info.php';
include_once 'db-connect.php';
include_once 'functions.php';
 
sec_session_start();

$user = htmlentities($_SESSION['username']);

$useridget = $_GET['userid'];
$userid = get_user_id($user);

$filepath = "C:\\GitHub\\php-filesharing\\dl\\upload\\";							//Change your path to 'upload' folder
$userpath = $filepath. $user. "\\";

if($_GET['success'] == 1 && $useridget == $userid){
	
	$user = $_GET['user'];
	//include 'sql.php';
	
	//die("ASD");
}
//else

if( $_FILES['userfile']['name'] != "" )
{
	$userfilepath = $filepath. $user. "\\". $_FILES['userfile']['name'];
	$tmpfile = $_FILES['userfile']['tmp_name'];
	$fileadress = $serveradress. $user. "/". $_FILES['userfile']['name'];
	
	if (!file_exists($filepath. htmlentities($_SESSION['username']). '\\')) {
    mkdir($filepath. htmlentities($_SESSION['username']). '\\', 0777, true);
}
	move_uploaded_file( $tmpfile, $userfilepath ) or 
           die( "Could not copy file!");		

	include 'sql.php';
	
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
<?php if(!$_GET['success']){
echo '
<li>Sent file: '. $_FILES['userfile']['name'].'
<li>File size: '. $_FILES['userfile']['size'].'
<li>File type: '. $_FILES['userfile']['type'].'
<li>File path: <a href="'. $fileadress. '">'. $fileadress. '</a>
';
} ?>
</ul>
</body>
</html>