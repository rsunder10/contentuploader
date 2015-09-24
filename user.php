<?php
require('classes/db.php');
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	echo "Logged in";
}
else
{
	header('Location:index.php');
}

?>



<form method="post" action="logout.php">
	<input type="submit" value="Logout" >
</form>

