<?php
require('../includes/include_newevent.php');
?>
<input type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
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

<label>Common Rules:</label>
<textarea placeholder="Enter The Rule" name="rule_rule" id="rule_rule" 
<?php if(isset($_SESSION['rule_rule'])) ;?>
required><?php echo $_SESSION['rule_rule'] ?></textarea>
</br>

<input type="submit" id="submit_name_round" value="Next Step">
</form>
<hr/>

<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>