<?php
require('../includes/include_newevent.php');
?>

<input type="button" id="abort" value="Cancel">
<hr/>

<textarea id="enter_introduction" placeholder="Write About Your Events"></textarea>
</br>
<hr/>






<input type="button" id="event_name" value="Prev Step">
<input type="button" id="event_rules" value="Next Step">
<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>