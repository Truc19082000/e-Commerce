<?php
	$connect= mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "web_page_dbb");
	mysqli_query($connect, "SET names 'utf8'");
	if(!$connect){
		echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
	}
?>