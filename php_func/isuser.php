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
		SELECT * 
		FROM signup 
		WHERE user = '%s' AND password = '%s'
		 LIMIT 1;", mysqli_real_escape_string($user), mysqli_real_escape_string(md5($pass)));
		$result = $db->selectdata($query);

		if(mysqli_num_rows($result)==1){

			$row = mysqli_fetch_array($result);

			$_SESSION['user']=$user;
			$_SESSION['id']=$row['id'];
			$_SESSION['proimg']=$row['imgname'];
			header('Location:../profile/user.php');
		}
		else{
			
			$_SESSION['warning']='no such user';
			
			header('Location:../register/login.php');
			}

	}
	else
	{
		$_SESSION['warning']='cant leave empty';
		header('Location:../register/login.php');
	}
}
else
{
	die('Error');
}




?>