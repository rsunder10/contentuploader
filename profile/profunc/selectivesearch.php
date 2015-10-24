<?php
$row;
if(isset($_GET['eventid'])){

$db=new Database();
$db->connect();
$eventid=$_GET['eventid'];
		$query = sprintf("SELECT * FROM `event` WHERE `event_id`=%d ", $db->mysqli_escape($eventid));
		
		$result = $db->selectdata($query);
		$row=mysqli_fetch_assoc($result);	
}

?>