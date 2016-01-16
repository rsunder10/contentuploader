<?php
$row;
if(isset($_GET['eventid'])){
$jsonDecode=json_decode(file_get_contents("../jsonelement/empdata.json"),true);

// print_r($jsonDecode[0]);
// $jsonDecode[0]['name']='sundersundersunder';
// print_r($jsonDecode[0]);
// $result=array();

foreach($jsonDecode as $event)
{

    if($event['event_id']==$_GET['eventid']){
        $row=$event;
    }

}

}

?>