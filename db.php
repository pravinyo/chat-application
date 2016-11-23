<?php
$host="localhost";
$user="bp6am";
$password="bp6ampass";
$db_name="chat";
$db=mysql_connect($host,$user,$password) or die('check your connection parameter');
mysql_select_db($db_name,$db) or die(mysql_error($db));
function formatDate($date)
{
	return date('g:i a',strtotime($date));
}
?>