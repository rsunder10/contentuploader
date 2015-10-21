<?php
require('../includes/include_user.php');
?>
<form method="post" action="../register/logout.php">
<input type="submit" value="Logout" >
<hr/>
<div>
<?php require('../includes/navlinks.php'); ?>
<?php require('profunc/selectivesearch.php');?>
</div>

<h1>Editing the Event</h1>

<div id="desc">
	How to use?
	------------------
	---------------
	-------------
</div>

<div id="prev_event_user">
	<h3>Event Created By <?php echo " ".$_SESSION['user']; ?></h3>
</div>


<input type="button" id="create_event" value="EditEvent">

<script src="../js/new_events.js"></script>
<?php
	require('../layout/footer.php');
?>