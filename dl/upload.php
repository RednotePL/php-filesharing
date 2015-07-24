<?php
include_once 'includes/db-connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
$user = htmlentities($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload Page</title>
        <link rel="stylesheet" href="css/main.css" />
		
		<link href="css/uploadfile.css" rel="stylesheet">
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.uploadfile.min.js"></script>
		
		<script>
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"includes/uploader.php?userid=<?php echo get_user_id($user); ?>&user=<?php echo $user; ?>",
	fileName:"userfile",
	autoSubmit:"false",
	maxFileCount:"1",
	//returnType:"script",
	afterUploadAll:function(obj)
{
    <?php echo 'window.location.href = "includes/uploader.php?success=1&user=' .$user. '&userid='. get_user_id($user).'"'; ?>
	//You can get data of the plugin using obj
}
	});
});
</script>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            
		<div>	
			<h3>File Upload:</h3>
			Select a file to upload: <br />
				<form action="includes/uploader.php" method="post" enctype="multipart/form-data">
				<input type="file" name="userfile" />
			<br />
				<input type="submit" value="Upload File" />
			</form>
		</div>
		<center><div id="up"><div id="fileuploader">Upload</div>
		</div></center>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>