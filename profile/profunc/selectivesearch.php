<?php
$row;
if(isset($_GET['eventid'])){

$db=new Database();
$db->connect();
$eventid=$_GET['eventid'];
		$query = sprintf("SELECT * FROM `contentuploader`.`event` WHERE `event_id`=%d ", mysql_real_escape_string($eventid));
		
		$result = $db->selectdata($query);
		$row=mysqli_fetch_assoc($result);	
}

?>