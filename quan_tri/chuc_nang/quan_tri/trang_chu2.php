<?php
include('chuc_nang/quan_tri/security.php');
if (!isset($login)) {
    exit();
}
?>

<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Material Dashboard by Creative Tim
</title>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="../assets/demo/demo.css" rel="stylesheet" />
<!-- core CSS -->  


<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo"><a class="simple-text logo-normal">
                T&T SHOP ADMIN
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">
                        <i class="material-icons"></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?menu=nguoi_dung">
                        <i class="material-icons"></i>
                        <p>Người dùng</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?menu=ql_sanpham">
                        <i class="material-icons"></i>
                        <p>Sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?menu=hoa_don">
                        <i class="material-icons"></i>
                        <p>Đơn hàng</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="?menu=binh_luan">
                        <i class="material-icons"></i>
                        <p>Bình luận</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?menu=ql_csbm">
                        <i class="material-icons"></i>
                        <p>Chính sách bảo mật</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <?php include('menu.php'); ?>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="trang_chu2.php">
                        T&T SHOP
                    </a>
                </li>
                <li>
                    <a href="#">
                        Pham Van Truc
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made by
            <a target="_blank">Phạm Văn Trực</a>
        </div>
    </div>
</footer>

