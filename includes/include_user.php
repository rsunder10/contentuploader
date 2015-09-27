<?php
require('../layout/header.php');
require('../classes/db.php');
if(!isset($_SESSION['user'])&&!isset($_SESSION['id'])){
	header('Location:../index.php');
}

if(isset($_SESSION['update'])){

	echo "SUCESSFULLY YOUR DETAILS ACCEPTED";
	$_SESSION['update']=null;
}

?>