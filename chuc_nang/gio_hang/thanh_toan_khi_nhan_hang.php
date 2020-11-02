<style>
    input{
        border: 1px solid silver;
        padding: auto;
    }
    label{
        
    }
</style>
<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Thanh toan';
    });

</script>
<?php
include('connect.php');
$sl = "select * from thanh_vien where username='" . $_SESSION['username'] . "'";
$exec = mysqli_query($connect, $sl);
$row = mysqli_fetch_array($exec);
?>
<br><h3>THÔNG TIN NHẬN HÀNG</h3><br>
<div class="container" style=" margin-bottom: 20px;">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="fname"><i class="fa fa-user"></i>Họ Và Tên</label><br>
        <input type="text" id="fname" name="firstname" placeholder="<?php echo $row['hoten']; ?>" style="width: 400px;"><br><br>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
        <input type="text" id="email" name="email" placeholder="<?php echo $row['email']; ?>" style="width: 400px;"><br><br>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="phone"><img src="https://img.icons8.com/material/2x/phone.png" style="height: 18px;">Số điện thoại</label><br>
        <input type="text" id="phone" name="phone" placeholder="<?php echo $sdt; ?>" style="width: 400px;""><br><br>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
            <label><i class="fa fa-address-card-o"></i> Địa chỉ nhận hàng</label><br>
            <input type="text" id="adr" name="address" 
                   placeholder="<?php echo $row['diachi'];?>" style="width: 400px;"><br><br>
    </div>
    <script>
            function myFunction() {
                alert("Chúc Mừng\nBạn đã thanh toán thành công.Cảm ơn bạn đã đạt hàng của chúng tôi");
            }
        </script>
</div>