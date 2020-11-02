<?php
	include('connect.php');
	$sl= "select * from thanh_vien where username='".$_SESSION['username']."'";
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="info-top right">
    <a href="?menu=thanh_vien" class="cl000" style="color: white;"><span><?php echo $row['hoten']; ?></span></a>&nbsp;&nbsp;
        <span class="line-height">|</span>
        <a href="?menu=logout" class="cl000" style="color: white;"><span> Đăng xuất</span></a>

</div>