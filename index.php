<?php
require('classes/db.php');
$db=new database();
$db->connect();
?>

<?php 
	require('layout/header.php')
?>
<form role="form" method="get" action="#" autocomplete="off">

	<h2>Please Sign Up</h2>
	<p>Already a member? <a href='login.php'>Login</a></p>
	<hr>

	<div>
		<input id="username" type="text" name="user" placeholder="username">
	</div>
	<br/>

	<div>
		<input id="email" type="email" name="email" placeholder="email">
	</div>
	<br/>
	<div>
		<input id="password1" type="password" name="password1" placeholder="password">
	</div>
	<br/>
	<div>
		<input id="password2" type="password" name="password2" placeholder="confirm password">
	</div>
	<br/>
	
	<div>
		<input id="firstName" type="text" name="firstName" placeholder="firstname">
	</div>
	<br/>
	<div>
		<input id="lastName" type="text" name="lastName" placeholder="lastname">
	</div>
	<br/>
	<div>
		<input id="regNo" type="text" name="regNo" placeholder="Register Number">
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

<?php 
	require('layout/footer.php')
?>