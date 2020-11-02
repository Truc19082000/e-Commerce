<div class="panel panel-primary" style="width: auto; margin-left: -16px;">
    <div class="panel-heading">Phụ kiện</div>
    <div class="panel-body">
		<?php
                include('connect.php');
                $sl = "select * from menu_ngang";
                $exec = mysqli_query($connect, $sl);
                while ($row = mysqli_fetch_array($exec)) {
                    ?>
                    <a href="?menu=<?php echo $row['loaimenu']; ?>"><?php echo $row['title']; ?></a><br>
		<?php } ?>
	</div>
</div>