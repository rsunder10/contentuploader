<?php 
require('classes/db.php');
require('layout/header.php');
	if(isset($_SESSION['signup'])){
		echo "User Created";
		$_SESSION['signup']=null;
	}
	if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:user.php');
}

?>

<form role="form" method="post" action="php_func/isuser.php" autocomplete="off">

<h2>Please Sign In</h2>
	<p>If Not a member? <a href='index.php'>SignUp</a> Here</p>
	<hr>

<div>
	<input id="username" type="text" name="user" placeholder="username">
</div>
<br/>

<div>
	<input id="password1" type="password" name="pass1" placeholder="password">
</div>
<br/>
<div id="warning">
<?php
 if(isset($_SESSION['warning']))
 	{	
 		echo "Please Enter the Right Credentials"." ( ".$_SESSION['warning']." )";
 		$_SESSION['warning']==null;
 		session_destroy();

 	}
?>
<div>


<input type="submit" value="SignIn" id ="submit">


</form>






<?php 
	require('layout/footer.php')
?>