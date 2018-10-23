# ProjectManager:

An open-source program to manage projects and keep contact with all members of them.


### ISSUES/ERRORS:


### ANNOUNCEMENTS:


### LATEST COMMITS:

login.php (Version 0.1.2) - Added "\/\/" string to the header() function at line 54

index-eng (Version 0.1.1) - Removed "https://localhost/projectmanager/" string to avoid error with server host at lines 17-18

login.php (Version 0.1.2) - Removed almost all last ```else{}``` to add a better way to know where does the user come from:
```$lang = $_POST['lang']; header("Location: home-".$lang.".php");```
