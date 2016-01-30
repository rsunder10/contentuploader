<?php
require('classes/db.php');
$db=new Database();
$db->connect();
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:profile/user.php');
}
?>

<?php 
	require('layout/header.php')
?>
<div class="container">
<form role="form" method="post" action="php_func/back_validation.php" autocomplete="off" id="form">

	<h2>Please Sign Up</h2>
	<p>Already a member? <a href='register/login.php'>Login</a></p>
	<hr>

	<div class="row">
	<div class="col-lg-1" style="padding-top:7px">
	Username: 
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="username" type="text" name="user" placeholder="username" required>
	</div>
	<div class="col-lg-3">
		<div id="status"></div>
	</div>
	</div>
	<br/>

	<div class="row">
	 <div class="col-lg-1">
	 Email:
	 </div>
	 <div class="col-lg-8">
		<input class="form-control" id="email" type="email" name="email" placeholder="email" required>
	 </div>
	 <div class="col-lg-3">
		<div id="e_status"></div>
	 </div>
	</div>
	<br/>
	<div class="row">
	 <div class="col-lg-1">
	 Password:
	 </div>
	 <div class="col-lg-8">
		<input class="form-control" id="pass1" type="password" name="pass1" placeholder="password">
	 </div>
	 <div class="col-lg-3">
		<div id="pass1_status"></div>
	 </div>
	</div>
	<br/>
	<div class="row">
	 <div class="col-lg-1">
	 Confirm:
	 </div>
	 <div class="col-lg-8">
		<input class="form-control" id="pass2" type="password" name="pass2" placeholder="confirm password">
	 </div>
	 <div class="col-lg-3">
		<div id="pass2_status"></div>
	 </div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-lg-1">
	Fname:
	</div>
	<div class="col-lg-8">
	<input class="form-control" id="first" type="text" name="first" placeholder="firstname" required >
    </div>
    <div class="col-lg-3">	
	<div id="first_status"></div>
	</div>
	</div>
	<br/>
	<div class="row">
	<div class="col-lg-1">
	 Lname:
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="last" type="text" name="last" placeholder="lastname" required>
	</div>
	<div class="col-lg-3">
		<div id="last_status"></div>
	</div>
	</div>
	<br/>
	<div class="row">
	<div class="col-lg-1">
	Reg no:
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="regno" type="text" name="regno" placeholder="Register Number" min="8" max="25" required >
	</div>
	<div class="col-lg-3">
		<div id="regno_status"></div>
	</div>
	</div>
	<br/>
	<div class="row">
	<div class="col-lg-1">
	Contact:
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="contact" type="tel" name="contact" placeholder="contact" required>
	</div>
		<div class="col-lg-3"><div id="contact_status"></div></div>
	</div>
	<br/>
	<div class="row">
	<div class="col-lg-1">
	Domain:
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="domain" type="text" name="domain" placeholder="Domain" required>
	</div>
	<div class="col-lg-3">
		<div id="domain_status"></div>
	</div>
	</div>
	<br/>
<input class="btn btn-info" type="submit" value="Signup" id ="submit">
<br/><br>
<div id="mainerror"></div>
<br><br>
</form>
</div>
<script src="js/front_ver.js"  type="text/javascript"></script>
<script src="js/valid.js"  type="text/javascript"></script>



<?php 
	require('layout/footer.php')
?>