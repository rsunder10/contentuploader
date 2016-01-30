<?php
require('../includes/include_user.php');
require('../db_man/profile_edit.php');
?>
<h1>Customize Your Profile</h1>
<hr>
<?php require('../includes/navlinks.php'); ?>
<hr>

<div class="container">
<form id="uploadForm" action="../phpfunc/upload_ajax_single_image.php" method="post">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" /><br>
<input type="submit" value="Submit"  class="btn btn-info"/>
</form>
<hr/>
<?php
	require('../includes/passcheckedit.php');
 ?>
<a id="show" style="cursor:pointer;">Change Password</a>
<form role="form" method="post" action="../db_man/changepass.php" autocomplete="off" id="changepass">

	<div>
		<input class="form-control" id="prev" type="password" name="prev" placeholder="Previous Password" required>
		<div id="prev_status"></div>
	</div>
	</br>

	<div>
		<input class="form-control" id="pass1" type="password" name="pass1" placeholder="password" required>
		<div id="pass1_status"></div>
	</div>
	<br/>
	<div>
		<input class="form-control" id="pass2" type="password" name="pass2" placeholder="confirm password" required>
		<div id="pass2_status"></div>
	</div>
	<br/>
	<input type="submit" value="Change Password" class="btn btn-info" id="sub2"/>
</form>

<hr/>
<h2>DETAILS:</h2>
<form role="form" method="post" action="../php_func/update_valid.php" autocomplete="off" id="form">
	
	<div>
		<input class="form-control" id="first" type="text" name="first" placeholder="firstname" value=<?php echo "$fname"?> required >
		<div id="first_status"></div>
	</div>
	<br/>
	<div>
		<input class="form-control" id="last" type="text" name="last" placeholder="lastname" value=<?php echo "$lname"?> required>
		<div id="last_status"></div>
	</div>
	<br/>
	<div>
		<input class="form-control" id="regno" type="text" name="regno" placeholder="Register Number" value=<?php echo "$regno"?> required >
		<div id="regno_status"></div>
	</div>
	<br/>
	<div>
		<input class="form-control" id="contact" type="tel" name="contact" placeholder="contact" value=<?php echo "$contact"?> required>
		<div id="contact_status"></div>
	</div>
	<br/>
	<div>
		<input class="form-control" id="domain" type="text" name="domain" placeholder="Domain" value=<?php echo "$domain"?> required>
		<div id="domain_status"></div>
	</div>
	<br/>

<input type="submit" value="Edit Profile" class="btn btn-info" id ="submit">
<br/>
<div id="mainerror"></div>
</form>

<br><br>



<script src="../js/single_upload_ajax.js"></script>
<script src="../js/update_valid.js"></script>
</div>
<?php
	require('../layout/footer.php');
?>