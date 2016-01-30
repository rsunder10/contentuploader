<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
<input class="btn btn-info pull-right" type="submit" value="Logout" ><br>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
<hr>
</div>
<?php require('profunc/jsonselective.php'); ?>
<?php require('profunc/timeconvert.php');?>
<?php require('profunc/decryptruleandcord.php');?>
<h1><?php echo $row['name']; ?></h1>
<h3><?php echo $row['domain']; ?></h3>
<small><?php echo "created at:". get_time_difference_php($row['create_time']) ; ?></small>
<small><?php echo "updated at".get_time_difference_php($row['update_time']) ; ?></small>
<div class="container">
 <p>
 	<h2>Introduction</h2><hr>
 	<?php echo $row['introduction'] ?>

 </p>
<p>
	<h2>Common Rule</h2><hr>
<p>

<?php 

	for ($i=0;$i<count($rules);$i++){



	?>

	<h2>Rule<?php echo" ".$i+1?>:</h2><hr>
	<?php echo $rules[$i];?>

<?php
}
?>
	</p>



</p>

 <p>
 	<h2>DESC_ROUNDWISE</h2><hr>

 	<?php  
 		for($i=0;$i<$round;$i++){
 			
?>
		<h2>Round <?php echo" ".$i+1?> </h2></hr>

		<p>
			<?php echo nl2br($_SESSION['erules'][$i]); ?>
		</p>


<?php 			
 		}
 ?>

 </p>

 <h2>Cordinators</h2><hr>
<?php
for($j=0;$j<count($_SESSION['ecord']);$j++){	
?>

<p>
<?php echo $j+1; echo " "; echo $_SESSION['ecord'][$j]; echo " || Mobile Number : "; echo $_SESSION['number'][$j]	?>
</p>

<?php
	}
?>

</div>
<br>
<?php
	require('../layout/footer.php');
?>