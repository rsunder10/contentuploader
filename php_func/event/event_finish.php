<?php
require('../../classes/db.php');
require('../../classes/validate.php');
$vl=new Validate();
$db=new Database(); 
$db->connect();


// $uniq_round=uniqid();
// $uniq_per_rules=uniqid();
// $cordinator_join=uniqid();

// $final_encoded='';

$datetime= new DateTime();
$datetime->setTimeZone(new DateTimeZone("Asia/Calcutta"));
$currenttime=$datetime->format('Y-m-d H:i:s');
if(isset($_POST['ecord'])&&isset($_POST['number'])){
	$_SESSION['ecord']=$_POST['ecord'];
	$_SESSION['number']=$_POST['number'];
	
}

if(isset($_SESSION['ecord'])&& isset($_SESSION['erules'])&&isset($_SESSION['erounds'])&&isset($_SESSION['ename'])&&isset($_SESSION['eintroduction'])&&isset($_SESSION['rule_rule']))
{

$ename=$vl->test_input($_SESSION['ename']);
$erounds=$vl->test_input($_SESSION['erounds']);
$intro=$vl->test_input($_SESSION['eintroduction']);


$rules=array();


$domain_name=$_SESSION['domain'];

foreach($_SESSION['rule_rule'] as $val){
array_push($rules,$vl->test_input($val));
}

//for cordinators
$ecord=array(); 


foreach ($_SESSION['ecord'] as $index =>$arr) {
   $num=array();
   array_push($num, $vl->test_input($arr));
   array_push($num,$vl->test_input($_SESSION['number'][$index]));
   array_push($ecord,$num);
}



$desc_round=array();

for($i=0;$i<$erounds;$i++){
	$erules=$vl->test_input($_SESSION['erules'][$i]);
	array_push($desc_round,$erules);
}


	// else{
	// 	$final_encoded=$final_encoded.$rule_per_rule;
	// }

}

if(isset($_SESSION['event_id'])){
$jsonDecode=json_decode(file_get_contents("../../jsonelement/empdata.json"),true);
$result=array();

$eventid=(int)$_SESSION['event_id']-1;
$jsonDecode[$eventid]['domain']=(string)$domain_name;
$jsonDecode[$eventid]['name']=(string)$ename;
$jsonDecode[$eventid]['introduction']=(string)$intro;
$jsonDecode[$eventid]['rules']=$rules;
$jsonDecode[$eventid]['desc']=$desc_round;
$jsonDecode[$eventid]['cordinators']=$ecord;
$jsonDecode[$eventid]['update_time']=(string)$currenttime;
$jsonDecode[$eventid]['author_id']=(string)$_SESSION['id'];
$jsonDecode[$eventid]['rounds']=(string)$erounds;




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
'domain'=>(string)$domain_name,
'name' => (string)$ename,
'introduction' =>(string) $intro,
'rules' =>$rules,
'cordinators' =>$ecord,
'desc'=>$desc_round,
'create_time' => (string)$currenttime,
'update_time' => (string)$currenttime,
'author_id' => (string)$_SESSION['id'] ,
'event_id' => (string)$eventid ,
'rounds' => (string)$erounds ,

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







$_SESSION['event_id']=NULL;
$_SESSION['ecord']=NULL;
$_SESSION['erules']=NULL;
$_SESSION['erounds']=NULL;
$_SESSION['ename']=NULL;
$_SESSION['eintroduction']=NULL;
$_SESSION['rule_rule']=NULL;
$_SESSION['number']=NULL;

?>