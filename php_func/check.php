<?php
require('../classes/db.php');
$db=new Database();
$db->connect();
if(isset($_POST['username']))
{
$username = $_POST['username'];


$sql_check = "select id from signup where username='".$username."'";
$db->selectdata($sql_check);

if(mysqli_num_rows($sql_check))
{
echo '<font color="red">The nickname <STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>