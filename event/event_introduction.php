<?php
require('../includes/include_newevent.php');
?>

<input type="button" id="abort" value="Cancel">
<form id="intro" action="event_rules.php" method="post">
<hr/>
<textarea id="enter_introduction" placeholder="Write About Your Events"></textarea>
</br>
<hr/>
<input type="button" id="event_name" value="Prev Step">
<input type="submit" id="submit_introduction" value="Next Step">
</form>






<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>