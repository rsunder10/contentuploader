<?php
require('../classes/db.php');
$db=new Database(); 
$db->connect();
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$temp = explode(".", $_FILES["userImage"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$targetPath = "../profile/proimg/".$newfilename;
if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) 
{

$id=$_SESSION['id'];

		$query = sprintf(
			"UPDATE `signup` SET `imgname` = '%s' WHERE `signup`.`id` = %d;",mysql_real_escape_string($newfilename), mysql_real_escape_string($id));
		$result = $db->insertquery($query);

			$_SESSION['proimg']=$newfilename;

?>
<img src="<?php echo $targetPath ?>" width="100px" height="100px" />
<?php

}
}
}
?>