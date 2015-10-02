<?php
require('../includes/include_newevent.php');
require('../php_func/event/introduction_isset.php');
?>
<input type="button" id="abort" value="Cancel">
<hr/>
<form id="enter_rules" action="event_cordinators.php" method="post">
<?php  
	require('../php_func/event/no_rounds_rules.php');
?>	

<input type="button" id="event_introduction" value="Prev Step">
<input type="submit" id="submit_cordinators" value="Next Step">
</form>

<hr/>









<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>