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
<style>
    th, tr, td{
        text-align: center;
    }
    thead{
        text-align: center;
    }
</style>
<div class="container" style="background-color: white; border-bottom: 1px solid black;">
    <div class="col-md-9" style="padding-left: 20em;">
        <p><a class="navbar-brand" href="../quan_tri/index.php" style="color: #52525F; font-size: 25px;">Sản phẩm</a></p>
    </div>
    <div class="col-md-3" style="padding-top: 1em;">
        <p>
            <a href="?menu=logout" title="Đăng xuất" style="color: ">
                <i class="glyphicon glyphicon-log-out"></i>&nbsp;Đăng xuất
            </a>
        </p>
    </div>
</div>
<div class="container mt-3">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered">  
        <thead>
            <tr>
                <th style="width: 200px;">Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Hình ảnh</th>
                <th style="width: 30px;">Loại sản phẩm</th>
                <th>Chi tiết</th>
                <th><a  style="text-decoration: none;"  href="?menu=them_sp">Thêm</a></th>
            </tr>
        </thead>
        <?php
        include('../connect.php');
        $sl = "select * from san_pham";
        $exec = mysqli_query($connect, $sl);
        while ($row = mysqli_fetch_array($exec)) {
            ?>
            <tbody id="myTable">
                <tr>
                    <td><?php echo $row['tensp']; ?></td>
                    <td><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></td>    
                    <td>
                        <img src="../images/<?php echo $row['img']; ?>"  width="60px" height="80px" alt="">
                        <img src="../images/<?php echo $row['img1']; ?>"  width="60px" height="80px" alt="">
                        <img src="../images/<?php echo $row['img2']; ?>"  width="60px" height="80px" alt="">
                        <img src="../images/<?php echo $row['img3']; ?>"  width="60px" height="80px" alt="">
                        <img src="../images/<?php echo $row['img4']; ?>"  width="60px" height="80px" alt=""> 
                    </td>
                    <td><?php echo $row['loaisp']; ?></td>
                    <td><a style="text-decoration: none;"  href="?menu=chi_tiet&masp=<?php echo $row['masp']; ?>">Chi tiết</a></td>
                    <td>
                        <a style="text-decoration: none; padding:"  href="?menu=sua_sp&masp=<?php echo $row['masp']; ?>">Sửa</a>
                    <a style="text-decoration: none;" onclick="return confirm('Bạn có mún xóa không?');" href="?menu=xoa_sp&masp=<?php echo $row['masp']; ?>">Xóa</a>
                    </td>
                    
                </tr>    
            </tbody>
        <?php } ?>
    </table>
</div>
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
<?php
?>