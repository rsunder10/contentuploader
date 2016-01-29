<?php	
session_start();


if(isset($_SESSION['domain_arr'])&& isset($_POST['location'])){

		$domain_arr =$_SESSION['domain_arr'];
		$abc=$_POST['location'];
		print_r($domain_arr);
		$domain_arr[$abc]=$abc;
		$cnts = json_encode($domain_arr);
		echo $cnts;
		file_put_contents('../jsonelement/domain.json', $cnts);


}



?>