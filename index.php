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

<form role="form" method="post" action="php_func/back_validation.php" autocomplete="off" id="form">

	<h2>Please Sign Up</h2>
	<p>Already a member? <a href='register/login.php'>Login</a></p>
	<hr>

	<div>
		<input id="username" type="text" name="user" placeholder="username" required>
		<div id="status"></div>
	</div>
	<br/>

	<div>
		<input id="email" type="email" name="email" placeholder="email" required>
		<div id="e_status"></div>
	</div>
	<br/>
	<div>
		<input id="pass1" type="password" name="pass1" placeholder="password">
		<div id="pass1_status"></div>
	</div>
	<br/>
	<div>
		<input id="pass2" type="password" name="pass2" placeholder="confirm password">
		<div id="pass2_status"></div>
	</div>
	<br/>
	
	<div>
		<input id="first" type="text" name="first" placeholder="firstname" required >
		<div id="first_status"></div>
	</div>
	<br/>
	<div>
		<input id="last" type="text" name="last" placeholder="lastname" required>
		<div id="last_status"></div>
	</div>
	<br/>
	<div>
		<input id="regno" type="text" name="regno" placeholder="Register Number" min="8" max="25" required >
		<div id="regno_status"></div>
	</div>
	<br/>
	<div>
		<input id="contact" type="tel" name="contact" placeholder="contact" required>
		<div id="contact_status"></div>
	</div>
	<br/>
	<div>
		<input id="domain" type="text" name="domain" placeholder="Domain" required>
		<div id="domain_status"></div>
	</div>
	<br/>

<input type="submit" value="SignUp" id ="submit">
<br/>
<div id="mainerror"></div>
</form>

<script src="js/front_ver.js"  type="text/javascript"></script>
<script src="js/valid.js"  type="text/javascript"></script>



<?php 
	require('layout/footer.php')
?>