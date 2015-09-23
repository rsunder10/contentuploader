<?php
require('classes/db.php');
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	echo "Logged in";
}

?>



<form method="post" action="logout.php">
	<input type="submit" value="Logout" >
</form>

