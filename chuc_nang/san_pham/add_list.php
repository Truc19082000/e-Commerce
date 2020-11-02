<?php
	$masps = $_GET['masp'];
	$soluongs= $_GET['soluong'];
	$sps= 0;
	if(isset($_SESSION['yeuthich'][$masps])){
		$sps= $_SESSION['yeuthich'][$masps] + $soluongs;
	}
	else{
		$sps= $soluongs;
	}
	$_SESSION['yeuthich'][$masps]=$sps;
	echo "<script> alert('Thêm vào danh sách yêu thích thành công.'); location.href='?menu=san_pham'; </script>"
?>