<?php
	$masps= $_GET['masp'];
	if($masps==0){
		unset($_SESSION['yeuthich']);
	}
	else{
		unset($_SESSION['yeuthich'][$masps]);
	}
	echo "<script> location.href='javascript: history.back(-1);'; </script>";
?>