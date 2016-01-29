<?php

if(isset($_POST['ename'])&&isset($_POST['erounds'])&&isset($_POST['rule_rule'])){

	$_SESSION['ename']=$_POST['ename'];
	$_SESSION['erounds']=$_POST['erounds'];
	$_SESSION['rule_rule']=$_POST['rule_rule'];
	$_SESSION['domain']=$_POST['domain'];
}


?>