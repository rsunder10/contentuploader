<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
	<input type="submit" value="Logout" >
</form>

<h1>VIEW ALL</h1>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
</div>

<table style="width:100%">
  <tr>
    <th>Title</td>
    <th>CreatedAt</th>
    <th>UpdatedAt</th>
    <th>View</th>		
    <th>Edit</th>

  </tr>
  <?php
			require('profunc/alleventsbyuser.php');
			require('profunc/timeconvert.php');
			if($len>=1){
			while($row=mysqli_fetch_assoc($result)){
	?>

  <tr>
    <td><?php echo $row['name'] ;?></td>
    <td><?php echo get_time_difference_php($row['create_time']) ; ?></td>
    <td><?php echo get_time_difference_php($row['update_time']) ; ?></td>
    <td><a href="viewaction.php?<?php echo "eventid=".$row['event_id']  ?> ">View</a></td>		
    <td><a href="editaction.php?<?php echo "eventid=".$row['event_id']  ?> ">Edit</a></td>
  </tr>
  	<?php
				}
		
			}
	
	?>



</table>






<?php
require('../layout/footer.php');
?>
