<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
<input type="submit" value="Logout" >
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
</div>
<?php require('profunc/selectivesearch.php'); ?>
<?php require('profunc/timeconvert.php');?>
<?php require('profunc/decryptruleandcord.php');?>
<h1><?php echo $row['name']; ?></h1>
<small><?php echo "created at:". get_time_difference_php($row['create_time']) ; ?></small>
<small><?php echo "updated at".get_time_difference_php($row['update_time']) ; ?></small>
 <p>
 	<h3>Introduction</h3>
 	<?php echo $row['introduction'] ?>

 </p>
 <p>
 	<h3>Rules</h3>
 	<?php  
 		for($i=0;$i<$round;$i++){
 			
?>
		<h4>Round <?php echo" ".$i+1?> </h4>
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

 <h3>Cordinators</h3>
<?php
for($j=0;$j<count($cordinator_array);$j++){	
?>

<p>
<?php echo $j+1; echo " "; echo $cordinator_array[$j];	?>
</p>

<?php
	}
?>


<?php
	require('../layout/footer.php');
?>