<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$id = $_POST['id'];
        $chi_tiet = $_POST['chi_tiet'];
        $chi_tiet = nl2br($chi_tiet, FALSE);
	$sl= "update chinh_sach_bao_mat set chi_tiet='".$id."',chi_tiet='".$chi_tiet."' where masp=".$masp;
	$exec= mysqli_query($connect,$sl);
	if($exec){
		if($exec1){
		echo "<script> alert('Sửa chính sách bảo mật thành công');
		location.href='?menu=ql_csbm'; </script>";
	}
}
	else{
		echo "<script> alert('Sửa chính sách bảo mật không thành công'); location.href='?menu=ql_csbm'; </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_csbm');
	}
?>