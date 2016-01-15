<?php
require('../classes/db.php');
$db=new Database(); 
$db->connect();




    //fetch table rows from mysql db
    $sql = "select * from event";
    $result = $db->selectdata($sql);
  

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);


    $fp = fopen('../jsonelement/empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);



?>