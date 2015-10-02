<?php
if(isset($_SESSION['erounds'])){

for($i=0;$i<$_SESSION['erounds'];$i++){
$k=$i+1;
$rule=$_SESSION['erules'][$i];

printf('<label>Enter the Rules For Round %d</label> <br/><textarea placeholder="Enter the Rule For Round %d" name="erules[]" required>%s</textarea><br/>',$k,$k,$rule);

}
}


?>