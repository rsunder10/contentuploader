<?php
require('../classes/db.php');
require('../classes/validate.php');




$vl=new Validate();
$db=new Database(); 
$db->connect();

if(isset($_POST['regno'])&&isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['email'])&&isset($_POST['pass1'])&&isset($_POST['pass2'])&&isset($_POST['user'])&&isset($_POST['contact'])&&isset($_POST['domain']))
{
echo "hi";		
		$regno=$vl->test_input($_POST['regno']);
		$first=$vl->test_input($_POST['first']);
		$last=$vl->test_input($_POST['last']);
		$email=$vl->test_input($_POST['email']);
		$pass1=$vl->test_input($_POST['pass1']);
		$pass2=$vl->test_input($_POST['pass2']);
		$domain=$vl->test_input($_POST['domain']);
		$user=$vl->test_input($_POST['user']);
		$contact=$vl->test_input($_POST['contact']);
		if(!empty($regno)&& !empty($first)&&!empty($last)&&!empty($email)&&!empty($pass1)&&!empty($pass2)&&!empty($user)&&!empty($contact)&&!empty($domain))
		{
			
			if($vl->valid_password($pass1,$pass2)&& $vl->valid_register($regno) && $vl->valid_email($email)&& $vl->valid_username_name($user))
			{
				$pass1=md5($pass1);
				
			
		$query=sprintf("INSERT INTO `contentuploader`.`signup` (`user`,`password`, `fname`, `lname`, `regno`, `contact`, `email`, `domain`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",$user,$pass1,$first,$last,$regno,$contact,$email,$domain);
				if($result=$db->insertData($query)){
						$_SESSION['signup']='signup';
						header('Location:../login.php');    

					
				}
				else
				{
					error();
				}
						
			}
			else
			{
				error();
			}
			
		}
		
}




?>
