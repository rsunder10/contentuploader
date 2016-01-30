<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
<input class="btn btn-info pull-right" type="submit" value="Logout" ><br>
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
<hr>
<?php require('profunc/jsonselective.php');?>
<?php require('profunc/decryptruleandcord.php');?>

</div>
<div class="container">
<h1>Editing the Event</h1>
<hr>
<div id="desc">
	How to use?
	------------------
	---------------
	-------------
	<br><br>
</div>

<div id="prev_event_user">
	<h1>Event Created By <?php echo " ".$_SESSION['user']; ?></h1><hr>
</div>


<input class="btn btn-info" type="button" id="create_event" value="Edit Event">

<script src="../js/new_events.js"></script>
<br><br>
</div>
<?php
	require('../layout/footer.php');
?>