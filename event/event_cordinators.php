<?php
require('../includes/include_newevent.php');
require('../php_func/event/rules_isset.php');
?>
<input type="button" id="abort" value="Cancel">
<form id="cordinator" method="post" action="#">
<hr/>
<div id="cordin">
<br/>
<label>Cordinator 1</label>
<input type="text" id="enter_cordinator" name="ecord" required/>
<br/>
</div>
<input type="button" id="add_cordinator" value="+Add"/>
<hr/>

<input type="button" id="event_rules" value="Prev Step">
<input type="submit" id="finish" value="Finish/Submit">
</form>








<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>