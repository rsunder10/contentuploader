<?php
require('../includes/include_newevent.php');
?>
<h1>&nbsp;&nbsp;Make An Event</h1><hr>
<?php require('../includes/navlinks.php'); ?>
<hr>

<div class="container">
<div id="desc">
	How to use?<br>
	------------------
	---------------
	-------------
</div>
<br><br>
<center><input class="btn btn-info"type="button" id="create_event" value="Add Event"></center>
</div>
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