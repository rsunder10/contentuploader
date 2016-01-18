<?php
require('../includes/include_newevent.php');
require('../php_func/event/name_isset.php');
?>

<input type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
<form id="intro" action="event_rules.php" method="post">
<hr/>
<label>Introduction</label>
<textarea id="enter_introduction" name="eintroduction" placeholder="Write About Your Events"
 required><?php if(isset($_SESSION['eintroduction'])) echo $_SESSION['eintroduction'];?></textarea>
</br>
<hr/>
<input type="button" id="event_name" value="Prev Step">
<input type="submit" id="submit_introduction" value="Next Step">
</form>






<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>