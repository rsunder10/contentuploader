<?php
require('../includes/include_newevent.php');
?>
<h1>Make An Event</h1>
<?php require('../includes/navlinks.php'); ?>
<div id="desc">
	How to use?
	------------------
	---------------
	-------------
</div>
<div id="prev_event_user">
	<h3>Event Created By <?php echo " ".$_SESSION['user']; ?></h3>
</div>

<input type="button" id="create_event" value="Add Event">

<script src="../js/new_events.js"></script>
<?php
	require('../layout/footer.php');
?>