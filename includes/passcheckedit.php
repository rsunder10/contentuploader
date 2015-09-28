<?php
if(isset($_SESSION['wrong'])){
	echo $_SESSION['wrong'];
	$_SESSION['wrong']=null;
}
if(isset($_SESSION['pass_update'])){

	echo $_SESSION['pass_update'];
	$_SESSION['pass_update']=null;
}

?>