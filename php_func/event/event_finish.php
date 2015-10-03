<?php
require('../../classes/db.php');
require('../../classes/validate.php');
$vl=new Validate();
$db=new Database(); 
$db->connect();


$uniq_round=uniqid();
$uniq_per_rules=uniqid();
$cordinator_join=uniqid();
$final_encoded='';
$datetime= new DateTime();
$datetime->setTimeZone(new DateTimeZone("Asia/Calcutta"));
$currenttime=$datetime->format('Y-m-d H:i:s');
if(isset($_POST['ecord'])){
	$_SESSION['ecord']=$_POST['ecord'];
	
}

if(isset($_SESSION['ecord'])&& isset($_SESSION['erules'])&&isset($_SESSION['erounds'])&&isset($_SESSION['ename'])&&isset($_SESSION['eintroduction']))
{

$ename=$vl->test_input($_SESSION['ename']);
$erounds=$vl->test_input($_SESSION['erounds']);
$intro=$vl->test_input($_SESSION['eintroduction']);
$ecord=array(); 
foreach ($_SESSION['ecord'] as $arr) {
   array_push($ecord, $vl->test_input($arr));
}
$ecord=implode($cordinator_join,$ecord);
for($i=0;$i<$erounds;$i++){
	$erules=$vl->test_input($_SESSION['erules'][$i]);
	$str = explode(PHP_EOL, $erules);
	
	$rule_per_rule=implode($uniq_per_rules,$str);
	if($i<$erounds-1){
	$final_encoded=$final_encoded.$rule_per_rule.$uniq_round;
	}
	else{
		$final_encoded=$final_encoded.$rule_per_rule;
	}
}

$query=sprintf("INSERT INTO `contentuploader`.`event` (`name`, `introduction`, `rules`, `cordinators`, `create_time`, `update_time`, `author_id`, `event_id`, `rounds`, `rules_join`, `round_join`, `cordinator_join`) VALUES ('%s','%s','%s','%s','%s','%s',%d,NULL,%d,'%s','%s','%s');",$ename,$intro,$final_encoded,$ecord,$currenttime,$currenttime,$_SESSION['id'],$erounds,$uniq_per_rules,$uniq_round,$cordinator_join);
				if($result=$db->insertquery($query)){
						$_SESSION['signup']='signup';
						header('Location:../../profile/newevent.php');
						$_SESSION['newEvent']='New Event Created';    
						
				}
				else
				{
					die('DIED DUE TO ERROR IN INSERTION');
				}

}	
else{

	die('Some Problem with the Session to create a Events');
}
?>