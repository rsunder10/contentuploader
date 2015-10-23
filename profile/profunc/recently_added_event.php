<?php
	$db=new Database();
	$db->connect();

		$query = sprintf("SELECT * FROM `contentuploader`.`event` WHERE `author_id`=%d ORDER BY `event`.`update_time` DESC", mysql_real_escape_string($_SESSION['id']));
		
		$result = $db->selectdata($query);


		$len=@mysqli_num_rows($result);
		if($len==0){

			echo "No Events Added Yet";
		}


?>