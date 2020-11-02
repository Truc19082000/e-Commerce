<div class="panel panel-primary" style="width: auto; margin-left: -16px;">
    <div class="panel-heading">Hang san xuat</div>
    <div class="panel-body">
				<?php
			include('connect.php');
			$sl = "SELECT * FROM cau_hinh";
			$exec= mysqli_query($connect, $sl); 
			while($row= mysqli_fetch_array($exec)){
		?>
                    <a href="?menu=<?php echo $row['masp']; ?>"><?php echo $row['title']; ?></a><br>
		<?php } ?>
	</div>
</div>