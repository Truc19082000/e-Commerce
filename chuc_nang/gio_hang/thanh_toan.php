
<?php
if (isset($_SESSION['username'])) {
    include('chuc_nang/gio_hang/thanh_vien_form.php');
} else {
    ?>
    <p class="alert alert-warning">Bạn chưa đăng nhập.. Vui lòng <a href="?menu=dang_nhap">đăng nhập</a> để mua.<br></p>
    <?php include('chuc_nang/dang_ky_dang_nhap/dang_nhap.php'); ?>
    <p class="alert alert-warning">
        Nếu bạn chưa có tài khoản thì có thể bấm <a href="?menu=dang_ky">vào đây</a> để tạo tài khoản mới</p>
    <?php
}
?>