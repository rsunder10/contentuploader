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


// $_SESSION['rule_rule']
$str='';
for($i=0;$i<sizeof($rules);$i++){
	$str.=$rules[$i];
	if($i!=sizeof($rules)-1){
		$str.=PHP_EOL;
	}
}

$_SESSION['rule_rule']=$str;



$desc=$row['desc'];
for($i=0;$i<$round;$i++){
$_SESSION['erules'][$i]=$desc[$i];	
}

for($i=0;$i<count($cordinator);$i++){

	$_SESSION['ecord'][$i]=$cordinator[$i][0];
	$_SESSION['number'][$i]=$cordinator[$i][1];
}




?>