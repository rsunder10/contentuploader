 <?php
require('../includes/include_newevent.php');
require('../php_func/event/introduction_isset.php');
?>
<center><input class="btn btn-info" type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel"></center>
<hr/>
<form id="enter_rules" action="event_cordinators.php" method="post">
<?php  
	require('../php_func/event/no_rounds_rules.php');
?>	

<center><input class="btn btn-info" type="button" id="event_introduction" value="Prev Step">
<input class="btn btn-info" type="submit" id="submit_cordinators" value="Next Step"></center>
</form>

<hr/>









<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>