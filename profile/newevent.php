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

<input type="button" id="create_event" value="Add Event">

<script src="../js/new_events.js"></script>
<?php
$_SESSION['event_id']=NULL;
$_SESSION['ecord']=NULL;
$_SESSION['erules']=NULL;
$_SESSION['erounds']=NULL;
$_SESSION['ename']=NULL;
$_SESSION['eintroduction']=NULL;
$_SESSION['rule_rule']=NULL;
	require('../layout/footer.php');
?>