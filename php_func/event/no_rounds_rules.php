<?php
if(isset($_SESSION['erounds'])){

for($i=0;$i<$_SESSION['erounds'];$i++){
$k=$i+1;
if(isset($_SESSION['erules'])){
$rule=$_SESSION['erules'][$i];	
printf('<label>Enter the Description For Round %d</label> <br/><textarea placeholder="Enter the Desc For Round %d" name="erules[]" required>%s</textarea><br/>',$k,$k,$rule);

}
else
{
printf('<label>Enter the Description For Round %d</label> <br/><textarea placeholder="Enter the Desc For Round %d" name="erules[]" required></textarea><br/>',$k,$k);

}

}
}


?>