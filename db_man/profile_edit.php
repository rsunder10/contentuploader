<?php
$db=new Database(); 
$db->connect();
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	
 $query = sprintf("
		SELECT * 
		FROM signup 
		WHERE id = %d LIMIT 1;", mysql_real_escape_string($_SESSION['id']));
		$result = $db->selectdata($query);

		if(mysqli_num_rows($result)==1){

			$row = mysqli_fetch_array($result);

			$fname=$row['fname'];
			$lname=$row['lname'];
			$regno=$row['regno'];
			$domain=$row['domain'];
			$contact=$row['contact'];
		}
		else{
			
			$_SESSION['warning']='no such user';
			
			header('Location:../register/login.php');
			}



}else{
	
header('Location:../index.php');

}


?>