<?php
require('../includes/include_newevent.php');
?>
<input type="button" id="abort" value="Cancel">
<hr/>
<form id="name_rounds" action="event_introduction.php" method="POST">
<label>Event Name:</label>
<input type="text" placeholder="Enter Event Name" id="enter_name" name="ename"
<?php if(isset($_SESSION['ename'])) echo 'value="'.$_SESSION['ename'].'" ';?> required/>
<br/>
<label>Number Of Rounds:</label>
<input type="number" placeholder="Enter Number Of Rounds" name="erounds" id="enter_rounds" 
<?php if(isset($_SESSION['erounds'])) echo 'value="'.$_SESSION['erounds'].'" ';?>
required/>
</br>
<input type="submit" id="submit_name_round" value="Next Step">
</form>
<hr/>

<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>