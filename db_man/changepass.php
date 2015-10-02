<?php
require('../classes/validate.php');
require('../classes/db.php');
$vl=new Validate();
$db=new Database(); 
$db->connect();




if(isset($_POST['pass1'])&&isset($_POST['pass2'])&&isset($_POST['prev']))
{
		
		$prev=$vl->test_input($_POST['prev']);
		$pass1=$vl->test_input($_POST['pass1']);
		$pass2=$vl->test_input($_POST['pass2']);
		if(!empty($prev)&& !empty($pass1)&&!empty($pass2))
		{
			

		 $query1 = sprintf("
		SELECT * 
		FROM signup 
		WHERE user = '%s' AND password = '%s'
		 LIMIT 1;", mysql_real_escape_string($_SESSION['user']), mysql_real_escape_string(md5($prev)));
		$res = $db->selectdata($query1);
		if(!mysqli_num_rows($res)==1){

			$_SESSION['wrong']='Invalid Current Password';
			header('Location:../profile/edit_profile.php');
		}

	    if( $vl->valid_password($pass1,$pass2))
			{
					
		$query=sprintf("UPDATE `contentuploader`.`signup` SET  `password`='%s' WHERE id =%d; ",md5($pass1),$_SESSION['id']);
				if($result=$db->insertquery($query)){
						$_SESSION['pass_update']='Password Changed';  
					
						header('Location:../profile/edit_profile.php');
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
			
		}
		
}

?>