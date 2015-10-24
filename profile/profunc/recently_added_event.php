<?php
	$db=new Database();
	$db->connect();

		$query = sprintf("SELECT * FROM `event` WHERE `author_id`=%d ORDER BY `event`.`update_time` DESC LIMIT 5", $db->mysqli_escape($_SESSION['id']));
		
		$result = $db->selectdata($query);


		$len=@mysqli_num_rows($result);
		if($len==0){

			echo "No Events Added Yet";
		}


?>