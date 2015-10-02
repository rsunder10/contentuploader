<?php
require('../includes/include_newevent.php');
?>
<input type="button" id="abort" value="Cancel">
<hr/>

<label>Event Name:</label>
<input type="text" placeholder="Enter Event Name" id="enter_name"/>
<br/>
<label>Number Of Rounds:</label>
<input type="number" placeholder="Enter Number Of Rounds" id="enter_rounds"/>
</br>
<hr/>
<input type="button" id="event_introduction" value="Next Step">
<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>