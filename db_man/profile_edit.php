<?php
require('../classes/db.php');
$db=new Database(); 
$db->connect();
if(!isset($_SESSION['user'])&&!isset($_SESSION['id'])){
	header('Location:../index.php');
}else{
	


}


?>