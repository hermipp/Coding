ProjectManager:

An open-source program to manage projects and keep contact with all members of them.


ISSUES/ERRORS:

login.php - Does not create cookie when $rem_lang_checked==true.

login.php - Does not redirect to any page when isset($_COOKIE['language'])==true. This has been tested with the corresponding home-eng.php, home-esp.php and home-val.php, unsuccessfully.


ANNOUNCEMENTS:

login.php - The program has some die() functions to realize where the program arrives without entering into any error. (VERSION 0.0.1)


LATEST COMMITS:

login.php (Version 0.1.2) - Added "\/\/" string to the header() function at line 54
index-eng (Version 0.1.1) - Removed "https://localhost/projectmanager/" string to avoid error with server host at lines 17-18
