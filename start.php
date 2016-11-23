<?php
require "db.php";
session_start();
if(isset($_POST['namo']))
 $_SESSION['name']=$_POST['name'];
else if(!isset($_SESSION['name']))
	exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat box</title>
	<link href="style.css" rel="stylesheet"/>
	<script src="script.js"></script>
</head>
<body onload="ajax();">
	<div>Welcome! <?php echo $_SESSION['name']; ?>,</div>
	<div id="container">
		<div id="chat_box">
			<div id="chat">
			</div>
			<form method="post" action="start.php">
					<textarea name="message" placeholder="Enter you message"></textarea>
					<input type="submit" name="submit" value="sent it"/>
			</form>
			<?php
			if(isset($_POST['submit']))
			{
				$name=$_SESSION['name'];
				$message=$_POST['message'];
				$query="INSERT INTO chat(name,message) values('$name','$message')";
				$result=mysql_query($query,$db) or die('data sending error');
				
				if($result)
			{
				echo '<embed loop="false" src="./chat.wav" hidden="true" autoplay="true"/>';
			}
			}
			?>
		</div>
	</div>
	</body>
	<footer>
	<p>This page is under development and this is in beta</p>
	</footer>
</html>