<?php
session_start();
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">  
<center><b><font color = "yellow" size="6">Online Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
You have been successfully logged out.<br><br><br>
Return to <a href="index.php">Login</a>
<div id="footer">
<div class="bottom_addr">&copy; 2022 Online Voting System. All Rights Reserved</div>
</div>
</div>
</body></html>