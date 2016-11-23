<?php
 session_start();
 session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat box</title>
</head>
<body>
<form action="start.php" method="post">
<p><input type="text" name="name" placeholder="Enter name"/></p>
<p><input type="submit" name="namo" value="start"/></p>
</form>
</body>
</html>