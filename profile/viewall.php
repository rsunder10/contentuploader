<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
	<input class="btn btn-info pull-right" type="submit" value="Logout" >
</form>

<h1>VIEW ALL</h1>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
<hr>
</div>

<table style="width:100%;border: 1px solid black; border-collapse: collapse;">
  <tr style="border: 1px solid black; border-collapse: collapse;">
    <th><h2>&nbsp;Title</h2></td>
    <th><h2>CreatedAt</h2></th>
    <th><h2>UpdatedAt</h2></th>	
    <th><h2>View as Json</h2></th>   
    <th><h2>Edit</h2></th>

  </tr>
  <?php
			// require('profunc/alleventsbyuser.php');
  $jsonDecode=json_decode(file_get_contents("../jsonelement/empdata.json"),true);

			require('profunc/timeconvert.php');
    $len =count($jsonDecode);
			if($len>=1){
      foreach($jsonDecode as $row)
{

  
	?>

  <tr style="padding: 15px;">
    <td style="padding: 15px;"><?php echo $row['name'] ;?></td>
    <td style="padding: 15px;"><?php echo get_time_difference_php($row['create_time']) ; ?></td>
    <td style="padding: 15px;"><?php echo get_time_difference_php($row['update_time']) ; ?></td>	
    <td style="padding: 15px;"><a href="viewaction_asjson.php?<?php echo "eventid=".$row['event_id']  ?> ">View</a></td>  
    <td style="padding: 15px;"><a href="editaction.php?<?php echo "eventid=".$row['event_id']  ?> ">Edit</a></td>
  </tr>
  	<?php
				}
		
			}
	
	?>



</table>






<?php
require('../layout/footer.php');
?>
