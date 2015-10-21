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
		$number_rules=count($rules);
		for($j=0;$j<count($rules);$j++){

			$rules_per_round[$i][$j]=$rules_in[$j];
		}
}


?>