<?php

if(isset($_POST['ename'])&&isset($_POST['erounds'])){

	$_SESSION['ename']=$_POST['ename'];
	$_SESSION['erounds']=$_POST['erounds'];
}


?>