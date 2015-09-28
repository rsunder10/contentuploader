<?php
require('../layout/header.php');
require('../includes/include_user.php');
require('../db_man/profile_edit.php');
?>
<h1>Customize Your Profile</h1>
<?php require('../includes/navlinks.php'); ?>

<form id="uploadForm" action="../phpfunc/upload_ajax_single_image.php" method="post">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" />
<input type="submit" value="Submit"  />
</form>
<hr/>
<?php
	require('../includes/passcheckedit.php');
 ?>
<a id="show" style="cursor:pointer;">Change Password</a>
<form role="form" method="post" action="../db_man/changepass.php" autocomplete="off" id="changepass">

	<div>
		<input id="prev" type="password" name="prev" placeholder="Previous Password">
		<div id="prev_status"></div>
	</div>
	</br>

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
	<input type="submit" value="Change Password" id="sub2"/>
</form>

<hr/>
<form role="form" method="post" action="../php_func/update_valid.php" autocomplete="off" id="form">
	
	<div>
		<input id="first" type="text" name="first" placeholder="firstname" value=<?php echo "$fname"?> required >
		<div id="first_status"></div>
	</div>
	<br/>
	<div>
		<input id="last" type="text" name="last" placeholder="lastname" value=<?php echo "$lname"?> required>
		<div id="last_status"></div>
	</div>
	<br/>
	<div>
		<input id="regno" type="text" name="regno" placeholder="Register Number" value=<?php echo "$regno"?> required >
		<div id="regno_status"></div>
	</div>
	<br/>
	<div>
		<input id="contact" type="tel" name="contact" placeholder="contact" value=<?php echo "$contact"?> required>
		<div id="contact_status"></div>
	</div>
	<br/>
	<div>
		<input id="domain" type="text" name="domain" placeholder="Domain" value=<?php echo "$domain"?> required>
		<div id="domain_status"></div>
	</div>
	<br/>

<input type="submit" value="Edit Profile" id ="submit">
<br/>
<div id="mainerror"></div>
</form>





<script src="../js/single_upload_ajax.js"></script>
<script src="../js/update_valid.js"></script>
<?php
	require('../layout/footer.php');
?>