<?php
class Validate{

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



function valid_password($pass,$pass2,$minlength = 7, $maxlength = 100)
{
    $pass = trim($pass);
 
    if (empty($pass))
    {
        return false;
    }
 
    if (strlen($pass) < $minlength)
    {
        return false;
    }
 
    if (strlen($pass) > $maxlength)
    {
        return false;
    }
	$pass2=trim($pass2);
	if ($pass!=$pass2){
	
	return false;
	
	}
	return true;
}



function valid_username_name($name,$minlength = 7, $maxlength = 100)
{
    $name = trim($name);
 
    if (empty($name))
    {
        return false;
    }
 
    if (strlen($name) < $minlength)
    {
        return false;
    }
 
    if (strlen($name) > $maxlength)
    {
        return false;
    }

	return true;
}

function valid_register($registerno, $minlength =8, $maxlength = 25)
{
 
    $registerno = trim($registerno);
 
    if (empty($registerno))
    {
        return false; 
    }
    if (strlen($registerno) > $maxlength)
    {
        return false; 
    }
    if (strlen($registerno) < $minlength)
    {
 
        return false; 
    }
 	

 return true;
}

}




?>