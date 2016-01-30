<?php 
require('../classes/db.php');
require('../layout/header.php');
	if(isset($_SESSION['signup'])){
		echo "User Created";
		$_SESSION['signup']=null;
	}
	if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:../profile/user.php');
}

?>

<form role="form" method="post" action="../php_func/isuser.php" autocomplete="off">

<h2>Please Sign In</h2>
	<p>If Not a member? <a href='../index.php'>SignUp</a> Here</p>
	<hr>
<div class="row">
<div class="col-lg-1">
Username:
</div>
<div class="col-lg-8">
	<input class="form-control" id="username" type="text" name="user" placeholder="username">
</div>
</div>
<br/>

<div class="row">
<div class="col-lg-1">
Password:
</div>
<div class="col-lg-8">
	<input class="form-control" id="password1" type="password" name="pass1" placeholder="password">
</div>
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
	require('../layout/footer.php')
?>