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
<br/>
<hr/>
<div>
	<h3>Recently Created Events By You</h3>
		<?php
			require('profunc/recently_added_event.php');
			if($len>=1){
			while($row=mysqli_fetch_assoc($result)){
		?>
		<div>
			<a href="viewaction.php?<?php echo "eventid=".$row['event_id']  ?> "><?php echo $row['name'] ;?></a>
		</div>
		<?php
				}
		
			}
	
	?>
	<a href="#">view all</a>
</div>
<hr/>
<hr/>
<?php require('../includes/navlinks.php'); ?>


<?php
require('../layout/footer.php');
?>

