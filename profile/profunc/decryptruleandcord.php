<?php

$rules=$row['rules'];
$cordinator=$row['cordinators'];
$round=$row['rounds'];
// print_r(sizeof($rules));

// for($i=0;$i<$round;$i++){
// 		$rules_in=explode($rules_join,$round_rule[$i]);

// 		$number_rules=count($rules_in);
// 		for($j=0;$j<count($rules_in);$j++){

// 			$rules_per_round[$i][$j]=$rules_in[$j];

// 		}

// }


// $cordinator_array=explode($cordinator_join,$cordinator);

$cordinator=$row['cordinators'];


$_SESSION['ename']=$row['name'];
$_SESSION['erounds']=$row['rounds'];
$_SESSION['event_id']=$row['event_id'];
$_SESSION['eintroduction']=$row['introduction'];
$_SESSION['domain']=$row['domain'];


// $_SESSION['rule_rule']

for($i=0;$i<sizeof($rules);$i++){

$_SESSION['rule_rule'][$i]=$rules[$i];
}




$desc=$row['desc'];
for($i=0;$i<$round;$i++){
$_SESSION['erules'][$i]=$desc[$i];	
}

for($i=0;$i<count($cordinator);$i++){

	$_SESSION['ecord'][$i]=$cordinator[$i][0];
	$_SESSION['number'][$i]=$cordinator[$i][1];
}




?>