<?php
require('../includes/include_newevent.php');
?>



<input class="btn btn-info pull-right" type="button" id="<?php if(isset($_SESSION['event_id'])) echo "abort2"; else echo "abort"; ?>" value="Cancel">
<hr/>

<div class="container">

<form id="name_rounds" action="event_introduction.php" method="POST">


<label>Select Domain</label>
<div class="row">
<div class="col-lg-10">
<select class="form-control" id="mySelect" name="domain">
</div>
<br>
</div>
<?php
$domain = file_get_contents('../jsonelement/domain.json');
$domain_arr = json_decode($domain,true);

$_SESSION['domain_arr']=$domain_arr;

foreach ($domain_arr as $key => $value)
	{
		if($key==$_SESSION['domain']){
			echo "<option value=".$key." selected>".$value."</option>";
		}
		else{
			echo "<option value=".$key.">".$value."</option>";
		}
		
	}	


?>
</select>

<br>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
Add Domain
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Domain</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Enter Domain Name:</label>
            <input type="text" class="form-control" id="domain-name" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>

        <input  type="button" class="btn btn-primary" id="domain_add" value="Add Domain"/>
      </div>
    </div>
  </div>
</div><br/>
<hr/>
<!-- modal info is herer -->

<label>Event Name:</label>
<input class="form-control" type="text" placeholder="Enter Event Name" id="enter_name" name="ename"
<?php if(isset($_SESSION['ename'])) echo 'value="'.$_SESSION['ename'].'" ';?> required/>
<br/>
<label>Number Of Rounds:</label>
<input class="form-control" type="number" placeholder="Enter Number Of Rounds" name="erounds" id="enter_rounds" 
<?php if(isset($_SESSION['erounds'])) echo 'value="'.$_SESSION['erounds'].'" ';?>
required/>
</br>

<!-- <label>Common Rules:</label>
<textarea placeholder="Enter The Rule" name="rule_rule" id="rule_rule" required>
<?php if(isset($_SESSION['rule_rule'])) echo $_SESSION['rule_rule'];?></textarea>
</br>
 -->
 <br/>
 <hr/>
 <?php

if(isset($_SESSION['event_id'])){

for($i=0;$i<count($_SESSION['rule_rule']);$i++){
$k=$i+1;

$rule=$_SESSION['rule_rule'][$i];	

printf('<label>Rule %d</label><input type="text" id="rule_rule" name="rule_rule[]" class="form-control" value="%s"  required/><br/><hr/>  ',$k,$rule);

}

}
?>
<div id="ruleadd">


 <?php
if($_SESSION['event_id']==NULL){
?>
<?php if(sizeof($_SESSION['rule_rule'])>0){?>
<?php for($i=0;$i<sizeof($_SESSION['rule_rule']);$i++){ ?>

<label>Rule <?php echo $i ?></label>

<input  type="text" id="rule_rule" name="rule_rule[]" class="form-control" value="<?php echo $_SESSION['rule_rule'][$i] ?>" required/>  
<br/>
<hr/>
<?php } ?>

<?php
}
?>
<?php
if(sizeof($_SESSION['rule_rule'])==0){ ?>
<label>Rule 1</label>

<input type="text" id="rule_rule"  class="form-control" name="rule_rule[]"  required/>
<br/>
<hr/>
<?php
}
?>
 <?php 
}
 ?>
</div>


<input class="btn btn-primary btn-sm" type="button" id="add_rule" value="+AddRule"/>
<hr/>

 <br/>
<input class="btn btn-primary btn-sm" type="submit" id="submit_name_round" value="Next Step">
</form>
<hr/>
</div>
<!--      <?php
     if($text!=NULL){
     $domain_arr[$text]=$text;
     $cnts = json_encode(array($domain_arr));
     file_put_contents('../jsonelement/domain.json', $cnts);
     }

     ?> -->

<script>
  $('#domain_add').click(function(e){
  	 var x = document.getElementById("mySelect");
     var text= $('#domain-name').val()
     $("#mySelect").append(new Option(text, text));
  //    $.getJSON('../jsonelement/domain.json', function(data) {
  //    	  var items = [];
  // $.each( data, function( key, val ) {
    
  // });
  // alert(items);


  //    });
$.ajax({
  method: "POST",
  url: "domain_write.php",
  data: {location: text }
}) .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });



     // document.write('<?  $text =" + text + "; ?>');

     $('#close').click();

  });

                



</script>


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