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
<?php require('profunc/selectivesearch.php'); ?>
<?php require('profunc/timeconvert.php');?>
<?php require('profunc/decryptruleandcord.php');?>
<h1><?php echo $row['name']; ?></h1>
<small><?php echo "created at:". get_time_difference_php($row['create_time']) ; ?></small>
<small><?php echo "updated at".get_time_difference_php($row['update_time']) ; ?></small>

<div class="container">
 <p>
 	<h2>Introduction</h2><hr>
 	<?php echo $row['introduction'] ?>

 </p>
 <p>
 	<h2>Rules</h2><hr>

 	<?php  
 		for($i=0;$i<$round;$i++){
 			
?>
		<h2>Round <?php echo" ".$i+1?> </h2><hr>
		<?php 
		for($j=0;$j<$number_rules;$j++){
		?>
		<p>
			<?php echo $rules_per_round[$i][$j]; ?>
		</p>


<?php 

 			}
 		}
 ?>

 </p>

 <h2>Cordinators</h2><hr>
<?php
for($j=0;$j<count($cordinator_array);$j++){	
?>

<p>
<?php echo $j+1; echo " "; echo $cordinator_array[$j];	?>
</p>

<?php
	}
?>

</div>
<br>
<?php
	require('../layout/footer.php');
?>