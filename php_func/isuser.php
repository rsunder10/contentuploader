<?php
require('../classes/db.php');
require('../classes/validate.php');
$vl=new Validate();
$db=new Database(); 
$db->connect();
if(isset($_POST['user'])&&isset($_POST['pass1'])){
	$user=$vl->test_input($_POST['user']);
	$pass=$vl->test_input($_POST['pass1']);

	if(!empty($user)&&!empty($pass)){

		 $query = sprintf("
		SELECT id 
		FROM signup 
		WHERE user = '%s' AND password = '%s'
		 LIMIT 1;", mysql_real_escape_string($user), mysql_real_escape_string(md5($pass)));
		$result = $db->selectdata($query);

		if(mysqli_num_rows($result)==1){

			$row = mysqli_fetch_array($result);

			$_SESSION['user']=$user;
			$_SESSION['id']=$row['id'];
			header('Location:../user.php');
		}
		else{
			die('Error');
		}

	}
	else
	{
		die('Error');
	}
}
else
{
	die('Error');
}




?>