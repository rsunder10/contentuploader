<?php
require('../includes/include_newevent.php');
require('../php_func/event/rules_isset.php');
?>
<input class="btn btn-info pull-right" type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
<br>
<div class="container">
<form id="cordinator" method="post" action="../php_func/event/event_finish.php">
<hr/>
<?php
if(isset($_SESSION['event_id'])){

for($i=0;$i<count($_SESSION['ecord']);$i++){
$k=$i+1;

$rule=$_SESSION['ecord'][$i];	
$number = $_SESSION['number'][$i];
printf('<label>Cordinator %d</label><input type="text" name="ecord[]" value="%s" class="form-control" required><label>Mobile:</label><input type="text" id = "mobile_number" class="form-control" value="%d" name = "number[]" required/><br/><hr/>',$k,$rule,$number);

}

}
?>

<div id="cordin">
<br/>
<?php
if($_SESSION['event_id']==NULL){
?>
<label>Cordinator 1</label><br>
<input class="form-control" type="text" id="enter_cordinator" name="ecord[]" required/><br>
<label>Mobile Number</label>
<input class="form-control" type="text" id = "mobile_number" name = "number[]" required/>
<br/>
<hr/>
<?php 
} 
?>
</div>
<input class="btn btn-primary" type="button" id="add_cordinator" value="+Add"/>
<hr/>

<input class="btn btn-primary" type="button" id="event_rules" value="Prev Step">
<input class="btn btn-primary" type="submit" id="finish" value="Finish/Submit">
</form>







<?php 
if(isset($_SESSION['event_id']))
{
?>
<script>
var count=<?php echo (count($_SESSION['ecord'])+1);?>;
</script>
<?php 
}
else{
?>
<script>
var count=2;
</script>
<?php 
}
?>

</div>
<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>