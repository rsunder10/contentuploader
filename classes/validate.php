<?php
class Validate{

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function valid_email($email)
{
    if (!eregi("^[^@]{1,64}@[^@]{1,255}$", $email))
    {
      
        return false;
    }
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++)
    {
        if (!eregi("^(([A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~-][A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
            $local_array[$i]))
        {
            return false;
        }
    }
    if (!eregi("^\[?[0-9\.]+\]?$", $email_array[1]))
    { 
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2)
        {
            return false;
        }
        for ($i = 0; $i < sizeof($domain_array); $i++)
        {
            if (!eregi("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
            {
                return false;
            }
        }
    }
    return true;
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