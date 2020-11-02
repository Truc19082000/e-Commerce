<?php
if (!isset($login)) {
    exit();
}
include('../connect.php');
$sl1 = "select * from thanh_vien where username='" . $_SESSION['user'] . "'";
$exec1 = mysqli_query($connect, $sl1);
$row1 = mysqli_fetch_array($exec1);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

        <div class="container" style="background-color: white; border-bottom: 1px solid black;">
    <div style="text-align: center;">
        <p><a href="" style="color: #52525F; font-size: 25px; ">Đơn hàng</a></p>
    </div>
</div>

<div class="container mt-3">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered">  
        <thead>
            <tr>
                <th>Mã hóa đơn</th>
                <th>Tên khách hàng</th>
                <th>Ngày mua</th>
                <th>Xử lý</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <?php 
	include('../connect.php');
	$sl="select * from hoa_don";
	$exec= mysqli_query($connect, $sl);
	while($row=mysqli_fetch_array($exec)){ 
?>
        <tbody id="myTable">
            <tr>
                <td><?php echo $row['ma_hoadon']; ?></td>
                <td><a href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['ma_hoadon']; ?>"><?php echo $row['tenkh']; ?></a></td>    
                <td><?php echo $row['ngay_mua']; ?></td>
                <td><?php echo $row['xu_ly']; ?></td>
                <td><a  onclick="return confirm('Bạn có muon xóa hóa đơn?');" href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa</a></td>
            </tr>    
        </tbody>
        <?php } ?>
    </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php
?>
