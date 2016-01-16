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
if(isset($_SESSION['event_id'])){
$jsonDecode=json_decode(file_get_contents("../../jsonelement/empdata.json"),true);
$result=array();

$eventid=(int)$_SESSION['event_id']-1;

$jsonDecode[$eventid]['name']=(string)$ename;
$jsonDecode[$eventid]['introduction']=(string)$intro;
$jsonDecode[$eventid]['rules']=(string)$final_encoded;
$jsonDecode[$eventid]['cordinators']=(string)$ecord;
$jsonDecode[$eventid]['update_time']=(string)$currenttime;
$jsonDecode[$eventid]['author_id']=(string)$_SESSION['id'];
$jsonDecode[$eventid]['rounds']=(string)$erounds;
$jsonDecode[$eventid]['rules_join']=(string)$uniq_per_rules;
$jsonDecode[$eventid]['round_join']=(string)$uniq_round;
$jsonDecode[$eventid]['cordinator_join']=(string)$cordinator_join;



$json = json_encode($jsonDecode);

file_put_contents('../../jsonelement/empdata.json', $json);


// $query=sprintf("UPDATE `event` SET `name`='%s', `introduction`='%s', `rules`='%s', `cordinators`='%s', `update_time`='%s', `author_id`=%d, `rounds`=%d, `rules_join`='%s', `round_join`='%s', `cordinator_join`='%s' WHERE `event_id` = %d;",$db->mysqli_escape($ename),$db->mysqli_escape($intro),$db->mysqli_escape($final_encoded),$db->mysqli_escape($ecord),$db->mysqli_escape($currenttime),$db->mysqli_escape($_SESSION['id']),$db->mysqli_escape($erounds),$db->mysqli_escape($uniq_per_rules),$db->mysqli_escape($uniq_round),$db->mysqli_escape($cordinator_join),$db->mysqli_escape($_SESSION['event_id']));
// 				if($result=$db->insertquery($query)){
						$_SESSION['signup']='signup';
						$_SESSION['update']='Event Updated';   
						header('Location:../../profile/user.php');
 
						
// 				}
// 				else
// 				{
// 					die('DIED DUE TO ERROR IN INSERTION');
// 				}





}
else{
$contents = file_get_contents('../../jsonelement/empdata.json');

$cnts = file_get_contents('../../jsonelement/counter.json');

$counter = json_decode($cnts,true);

$counter['counter']++;
$eventid =$counter['counter'];

//Decode the JSON data into a PHP array.
$contentsDecoded = json_decode($contents, true);

 

//Modify the counter variable.
$custom=array(
'name' => (string)$ename,
'introduction' =>(string) $intro,
'rules' =>(string) $final_encoded,
'cordinators' => (string)$ecord,
'create_time' => (string)$currenttime,
'update_time' => (string)$currenttime,
'author_id' => (string)$_SESSION['id'] ,
'event_id' => (string)$eventid ,
'rounds' => (string)$erounds ,
'rules_join' => (string)$uniq_per_rules, 
'round_join' => (string)$uniq_round,
'cordinator_join' => (string)$cordinator_join,

);


$contentsDecoded[]=$custom;
 

//Encode the array back into a JSON string.
$json = json_encode($contentsDecoded);

$cnts = json_encode(array('counter'=>(string)$eventid));
//Save the file.
file_put_contents('../../jsonelement/empdata.json', $json);
file_put_contents('../../jsonelement/counter.json', $cnts);




$_SESSION['newEvent']='New Event Created';    
						
header('Location:../../profile/user.php');
						
		
}	

}
else{

	die('Some Problem with the Session to create a Events');
}




$_SESSION['event_id']=NULL;
$_SESSION['ecord']=NULL;
$_SESSION['erules']=NULL;
$_SESSION['erounds']=NULL;
$_SESSION['ename']=NULL;
$_SESSION['eintroduction']=NULL;
?>