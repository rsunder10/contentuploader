<?php
require('../classes/db.php');
$db=new Database();
$db->connect();
if(isset($_POST['username']))
{
$username = $_POST['username'];
$sql_check = "select id from signup where user='".$username."'";
$result=$db->selectdata($sql_check);

if(mysqli_num_rows($result))
{
echo '<font color="red">The nickname <STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>