<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
	<input type="submit" value="Logout" >
</form>
<h1>Welcome, <?php echo $_SESSION['user'] ?></h1>
<hr/>
<?php if($_SESSION['proimg']=='NULL'){?>
<img src="../img/unknown.jpg" width="200" height="200"/>
<?php } ?>
<?php if($_SESSION['proimg']!='NULL'){?>
<img src=<?php echo "../profile/proimg/".$_SESSION['proimg'] ?> width="200" height="200"/>
<?php } ?>


<?php require('../includes/navlinks.php'); ?>


<?php
require('../layout/footer.php');
?>

