<?php
require('../includes/include_newevent.php');
require('../php_func/event/rules_isset.php');
?>
<input type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
<form id="cordinator" method="post" action="../php_func/event/event_finish.php">
<hr/>
<?php
if(isset($_SESSION['event_id'])){

for($i=0;$i<count($_SESSION['ecord']);$i++){
$k=$i+1;

$rule=$_SESSION['ecord'][$i];	
$number = $_SESSION['number'][$i];
printf('<label>Cordinator %d</label><input type="text" name="ecord[]" value="%s" required><label>Mobile:</label><input type="text" id = "mobile_number" value="%d" name = "number[]" required/><br/><hr/>',$k,$rule,$number);

}

}
?>

<div id="cordin">
<br/>
<?php
if($_SESSION['event_id']==NULL){
?>
<label>Cordinator 1</label>
<input type="text" id="enter_cordinator" name="ecord[]" required/>
<label>Mobile Number</label>
<input type="text" id = "mobile_number" name = "number[]" required/>
<br/>
<hr/>
<?php 
} 
?>
</div>
<input type="button" id="add_cordinator" value="+Add"/>
<hr/>

<input type="button" id="event_rules" value="Prev Step">
<input type="submit" id="finish" value="Finish/Submit">
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


<script src="../js/new_events.js"></script>
<?php
require('../layout/footer.php');
?>