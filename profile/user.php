<?php
require('../includes/include_user.php');
?>
<form method ="post" action="../php_func/jsonencode.php">
  <input type ="submit" value = "JsonCreate">
</form>

<form method="post" action="../register/logout.php">
	<input type="submit" value="Logout" >
</form>
<h1>Welcome, <?php echo $_SESSION['user'] ?></h1>
<hr/>
<?php if($_SESSION['proimg']==NULL){?>
<img src="../img/unknown.jpg" width="200" height="200"/>
<?php } ?>
<?php if($_SESSION['proimg']!=NULL){?>
<img src=<?php echo "../profile/proimg/".$_SESSION['proimg'] ?> width="200" height="200"/>
<?php } ?>
<br/>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
</div>
<div>
	<h3>Recently Created Events By You</h3>
<table style="width:100%">
  <tr>
    <th>Title</td>
    <th>CreatedAt</th>
    <th>UpdatedAt</th>
    <th>View</th>		
    <th>JsonView</th>
    <th>Edit</th>
  </tr>
  <?php
			require('profunc/recently_added_event.php');
			require('profunc/timeconvert.php');
			if($len>=1){
			while($row=mysqli_fetch_assoc($result)){
	?>

  <tr>
    <td><?php echo $row['name'] ;?></td>
    <td><?php echo get_time_difference_php($row['create_time']) ; ?></td>
    <td><?php echo get_time_difference_php($row['update_time']) ; ?></td>
    <td><a href="viewaction.php?<?php echo "eventid=".$row['event_id']  ?> ">View</a></td>		
    <td><a href="viewaction_asjson.php?<?php echo "eventid=".$row['event_id']  ?> ">View as Json</a></td>    
    <td><a href="editaction.php?<?php echo "eventid=".$row['event_id']  ?> ">Edit</a></td>
  </tr>
  	<?php
				}
		
			}
	
	?>



</table>

		

<a href="viewall.php">view all</a>

</div>
<hr/>
<hr/>



<?php
require('../layout/footer.php');
?>

