<?php
	if(isset($_POST['submit'])){
	include('connect.php');
	$value= $_POST['value'];
		if($value== $_SESSION['captcha']){
	$sql= "select * from thanh_vien";
	$execc= mysqli_query($connect, $sql);
	while($row2= mysqli_fetch_array($execc)){
		if($row2['username']==$_POST['username']){
			$kt=1;
		}else{
			$kt=0;
		}
	}
	if($kt==0){
	$cmnd= $_POST['cmnd'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$password = md5($password);
	$repass= $_POST['re-pass'];
	$repass= md5($repass);
	$repass= md5($repass);
	if($password==$repass){
	$hoten = $_POST['hoten'];
	$ngaysinh = "'".$_POST['nam']."-".$_POST['thang']."-".$_POST['ngay']."'";
	$gioitinh = $_POST['gioitinh'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
	$sl="insert into thanh_vien values('".$cmnd."','".$username."','".$password."','".$hoten."',".$ngaysinh.",'".$gioitinh."','".$email."','".$sdt."','".$diachi."')";
	$exec= mysqli_query($connect,$sl);
	if($exec){
	?>
		<p class="alert alert-success">Đăng ký thành công.. Chúng tôi đã gửi bạn email thông tin tài khoản của bạn..<br> Bấm<a href="?menu=dang_nhap"> vào đây </a> để đăng nhập và mua hàng</p>
	<?php 
	}
	else{
		echo "Đăng ký thất bại <br>";
		echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang đăng ký';
	}}
	else{
		echo "<script> alert('Mật khẩu bạn nhập lại chưa chính xác'); location.href='?menu=dang_ky'; </script>";
	}
}else{
	echo "<script> alert('Tên đăng nhập đã có người sử dụng.'); location.href='?menu=dang_ky'; </script>";
}
}else{
	echo "<script> alert('Ký tự bạn nhập vào không đúng.'); location.href='?menu=dang_ky'; </script>";
}
}
else{
	if(isset($_POST['cancel'])){
	echo "<script> location.href='index.php'; </script>";
}
}
?>