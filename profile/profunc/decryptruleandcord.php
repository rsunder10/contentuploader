<?php

$rules=$row['rules'];
$cordinator=$row['cordinators'];
$rules_join=$row['rules_join'];
$round_join=$row['round_join'];
$cordinator_join=$row['cordinator_join'];
$round=$row['rounds'];
$round_rule=explode($round_join,$rules);
$rules_per_round = array(array());
$number_rules;

for($i=0;$i<$round;$i++){
		$rules_in=explode($rules_join,$round_rule[$i]);

		$number_rules=count($rules_in);
		for($j=0;$j<count($rules_in);$j++){

			$rules_per_round[$i][$j]=$rules_in[$j];

		}

}


$cordinator_array=explode($cordinator_join,$cordinator);
$_SESSION['ename']=$row['name'];
$_SESSION['erounds']=$row['rounds'];
$_SESSION['event_id']=$row['event_id'];
$_SESSION['eintroduction']=$row['introduction'];
for($i=0;$i<$round;$i++){
$_SESSION['erules'][$i]=implode(PHP_EOL,$rules_per_round[$i]);	
}

for($i=0;$i<count($cordinator_array);$i++){
	$_SESSION['ecord'][$i]=$cordinator_array[$i];
}

?>