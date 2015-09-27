<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
	<input type="submit" value="Logout" >
</form>
<h1>Welcome, <?php echo $_SESSION['user'] ?></h1>
<hr/>
<img src="#" width="200" height="200"/>



<?php require('../includes/navlinks.php'); ?>


<?php
require('../layout/footer.php');
?>

