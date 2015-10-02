<?php
require('../includes/include_newevent.php');
?>
<input type="button" id="abort" value="Cancel">
<hr/>
<form id="enter_rules" action="event_cordinators.php" method="post">
<label>Enter the Rules For Round < ></label>
<br/>
<textarea placeholder="Enter the Rule For Round< >"></textarea>
</br>

<input type="button" id="event_introduction" value="Prev Step">
<input type="submit" id="submit_cordinators" value="Next Step">
</form>

<hr/>









<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>