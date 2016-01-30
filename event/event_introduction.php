<?php
require('../includes/include_newevent.php');
require('../php_func/event/name_isset.php');
?>

<input class="btn btn-info pull-right" type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
<form id="intro" action="event_rules.php" method="post"><br>
<hr/>
<div class="container">
<label>Introduction</label>
<br>
<textarea class="form-control" id="enter_introduction" name="eintroduction" placeholder="Write About Your Events"
 required><?php if(isset($_SESSION['eintroduction'])) echo $_SESSION['eintroduction'];?></textarea>
</br>
<hr/>
<input class="btn btn-primary btn-sm" type="button" id="event_name" value="Prev Step">
<input class="btn btn-primary btn-sm" type="submit" id="submit_introduction" value="Next Step">
</form>



</div>


<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>