<?php
require('../includes/include_user.php');
?>


<form method="post" action="../register/logout.php">
	<input class="btn btn-info pull-right" type="submit" value="Logout" >
</form>
<br>
<hr/>
<div class="container">
<div class="row">
   <div class="col-lg-4">
   <?php if($_SESSION['proimg']==NULL){?>
<img src="../img/unknown.jpg" width="200" height="200"/>
<?php } ?>
   </div>
   <div class="col-lg-8">
   <h1 style="padding-top:5%">Welcome, <?php echo $_SESSION['user'] ?></h1>
   </div>
</div>
</div>




<?php if($_SESSION['proimg']!=NULL){?>
<img src=<?php echo "../profile/proimg/".$_SESSION['proimg'] ?> width="200" height="200"/>
<?php } ?>
<br/>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
</div>
<hr>
<div>
	<h3>Recently Created Events By You</h3>
<table style="width:100%;border: 1px solid black; border-collapse: collapse;">
  <tr style="border: 1px solid black; border-collapse: collapse;">
    <th><h2>&nbsp;Title</h2></td>
    <th><h2>CreatedAt</h2></th>
    <th><h2>UpdatedAt</h2></th>
    <th><h2>View</h2></th>		
    <th><h2>Edit</h2></th>
  </tr>
  <?php
			require('profunc/recently_added_event.php');
			require('profunc/timeconvert.php');
$jsonDecode=json_decode(file_get_contents("../jsonelement/empdata.json"),true);

$len =count($jsonDecode);
$counters = 1;
			if($len>=1){
			foreach($jsonDecode as $row)
{

  if($counters>5)
      break;
	?>
  <tr style="padding: 15px;">
    <td style="padding: 15px;">&nbsp;&nbsp;<?php echo $row['name'] ;?></td>
    <td style="padding: 15px;">&nbsp;&nbsp;<?php echo get_time_difference_php($row['create_time']) ; ?></td>
    <td style="padding: 15px;">&nbsp;&nbsp;<?php echo get_time_difference_php($row['update_time']) ; ?></td>
    <td style="padding: 15px;">&nbsp;&nbsp;<a href="viewaction_asjson.php?<?php echo "eventid=".$row['event_id']  ?> ">View</a></td>    
    <td style="padding: 15px;">&nbsp;&nbsp;<a href="editaction.php?<?php echo "eventid=".$row['event_id'] ?> ">Edit</a></td>
  </tr>
  	<?php
    $counters++;
				}
		
			}
	
	?>



</table>

		

<h4><center><a href="viewall.php" style="margin-left:-5%">view all</a></center></h4>

</div>



<?php
require('../layout/footer.php');
?>

