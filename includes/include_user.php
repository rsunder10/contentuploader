<?php
require('../layout/header.php');
require('../classes/db.php');
if(!isset($_SESSION['user'])&&!isset($_SESSION['id'])){
	header('Location:../index.php');
}


?>