<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$temp = explode(".", $_FILES["userImage"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$targetPath = "../profile/proimg/".$newfilename;
if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) 
{

?>
<img src="<?php echo $targetPath ?>" width="100px" height="100px" />
<?php
}
}
}
?>