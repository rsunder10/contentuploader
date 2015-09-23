<?php 
require('classes/db.php');
require('layout/header.php');
	if(isset($_SESSION['signup'])){
		echo "User Created";
		$_SESSION['signup']=null;
	}
?>








<?php 
	require('layout/footer.php')
?>