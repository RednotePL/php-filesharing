# php-filesharing

PHP and MySQL based website for sharing files.

# Installation

In your phpmyadmin, do the following steps:

1. Create database 'secure_login'
2. Import sql\secure_login.sql
3. Create sec_user and assign a password "XHSYp2At98fajXpt" (You have to change it later, must be same as in 'dl\includes\psl-config.php')
4. Assign only SELECT, INSERT, UPDATE and DELETE and only to that database
5. Open 'dl\includes\psl-config.php' and change your database settings
6. Open 'dl\includes\server-info.php' and change $serveradress to point to your 'upload' folder

OPTIONAL: Default file size limit is set by php.ini (8 MB). To change that, tweak 'upload_max_filesize' in php.ini


# TO-DO List

1. Uploaded files list
2. Uploaded files management (deleting)
3. User rank system (Member, admin, moderator)
4. Uploaded files management (Administration)
5. Web-based user management
6. CSS and other visual things
7. API!!!
