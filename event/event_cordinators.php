<?php
require('../includes/include_newevent.php');
?>
<input type="button" id="abort" value="Cancel">
<form id="cordinator" method="post" action="#">
<hr/>
<input type="text" id="enter_cordinator"/>
<input type="button" id="add_cordinator" value="+Add"/>
<hr/>

<input type="button" id="event_rules" value="Prev Step">
<input type="submit" id="finish" value="Finish/Submit">
</form>








<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>