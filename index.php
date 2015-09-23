<?php
require('classes/db.php');
$db=new Database();
$db->connect();
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:user.php');
}
?>

<?php 
	require('layout/header.php')
?>

<form role="form" method="post" action="php_func/back_validation.php" autocomplete="off">

	<h2>Please Sign Up</h2>
	<p>Already a member? <a href='login.php'>Login</a></p>
	<hr>

	<div>
		<input id="username" type="text" name="user" placeholder="username">
		<div id="status"></div>
	</div>
	<br/>

	<div>
		<input id="email" type="email" name="email" placeholder="email">
	</div>
	<br/>
	<div>
		<input id="password1" type="password" name="pass1" placeholder="password">
	</div>
	<br/>
	<div>
		<input id="password2" type="password" name="pass2" placeholder="confirm password">
	</div>
	<br/>
	
	<div>
		<input id="firstName" type="text" name="first" placeholder="firstname">
	</div>
	<br/>
	<div>
		<input id="lastName" type="text" name="last" placeholder="lastname">
	</div>
	<br/>
	<div>
		<input id="regNo" type="text" name="regno" placeholder="Register Number">
	</div>
	<br/>
	<div>
		<input id="contact" type="tel" name="contact" placeholder="contact">
	</div>
	<br/>
	<div>
		<input id="domain" type="text" name="domain" placeholder="Domain">
	</div>
	<br/>

<input type="submit" value="SignUp" id ="submit">

</form>

<script src="js/front_ver.js"></script>

<?php 
	require('layout/footer.php')
?>