<?php
require('../classes/validate.php');
require('../classes/db.php');
$vl=new Validate();
$db=new Database(); 
$db->connect();

if(isset($_POST['regno'])&&isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['contact'])&&isset($_POST['domain']))
{
		
		$regno=$vl->test_input($_POST['regno']);
		$first=$vl->test_input($_POST['first']);
		$last=$vl->test_input($_POST['last']);
		$domain=$vl->test_input($_POST['domain']);
		$contact=$vl->test_input($_POST['contact']);
		if(!empty($regno)&& !empty($first)&&!empty($last)&&!empty($contact)&&!empty($domain))
		{
			
			if( $vl->valid_register($regno))
			{
					
		$query=sprintf("UPDATE `signup` SET  `fname`='%s', `lname`='%s', `regno`='%s', `contact`='%s', `domain`='%s' WHERE id =%d; ",$first,$last,$regno,$contact,$domain,$_SESSION['id']);
				if($result=$db->insertquery($query)){
						$_SESSION['update']='UPDATED';  
					
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