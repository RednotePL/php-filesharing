<?php
include_once 'includes/db-connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            
		<div>	
			<h3>File Upload:</h3>
			Select a file to upload: <br />
				<form action="includes/uploader.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file" size="50" />
			<br />
				<input type="submit" value="Upload File" />
			</form>
		</div>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>