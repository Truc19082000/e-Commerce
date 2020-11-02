<?php
session_start();
?>
<header>
    <!-- TOP HEADER -->
    <div id="top-header" style="">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href=""><i class="fa fa-phone"></i> 01234567899</a></li>
                <li><a href=""><i class="fa fa-envelope-o"></i> truckt12a34@gmail.com</a></li>
                <li><a href=""><i class="fa fa-map-marker"></i> 32 Phan Đăng Lưu, Quận Hải Châu, TP.Đà Nẵng</a></li>
            </ul>
            <ul class="header-links pull-right">
                <?php
                if (isset($_SESSION['username'])) {
                    include('chuc_nang/dang_ky_dang_nhap/user_info.php');
                } else {
                    include('chuc_nang/dang_ky_dang_nhap/dang_ky_dang_nhap.php');
                }
                ?>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header" style="background-color: white;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="index.php" class="logo">
                            <img src="images/logo99.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form class="search-form" action="?menu=search" action="post" >
                            <select class="input-select">
                                <option selected="selected">Tất cả</option>
                                <?php
                                include('connect.php');
                                $sl = "select * from menu_ngang";
                                $exec = mysqli_query($connect, $sl);
                                while ($row = mysqli_fetch_array($exec)) {
                                    ?>
                                    <option><?php echo $row['title']; ?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="menu" value="search">
                            <input class="input" type="search" name="search" placeholder="Nhập tên sản phẩm..">
                            <button class="search-btn" value="search" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color: white; border: none;">
                                <i class="fa fa-heart-o" style="color: black;"></i>
                                <span style="color: black;">Yêu thich</span>
                                <div class="qty" style=""><?php
                                    if (isset($_SESSION['yeuthich'])) {
                                        $lists = count($_SESSION['yeuthich']);
                                        echo $lists;
                                    } else {
                                        $lists = 0;
                                        echo $lists;
                                    }
                                    ?></div>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                if (isset($_SESSION['yeuthich'])) {
                                    if (count($_SESSION['yeuthich']) == 0) {
                                        unset($_SESSION['yeuthich']);
                                        ?>
                                        <p class="alert alert-warning">Giỏ hàng bạn trống..</p>
                                        <?php
                                    } else {
                                        if (isset($_POST['submit'])) {
                                            foreach ($_POST['sl_sp'] as $masp => $sps)
                                                if ($sps == 0 and ( is_numberic($sps))) {
                                                    unset($_SESSION['yeuthich'][$masps]);
                                                } else {
                                                    $_SESSION['yeuthich'][$masps] = $sps;
                                                }
                                            echo "<script> alert('Danh sách yêu thích đã được cập nhật.); </script>";
                                        }
                                        ?>
                                        <script type="text/javascript">

                                            $(document).ready(function () {
                                                document.title = 'Yeu thich (<?php echo $lists; ?>)';
                                            });
                                        </script>
                                        <div class="cart-list">
                                            <?php
                                            foreach ($_SESSION['yeuthich'] as $masps => $sps) {
                                                $id_array[] = $masps;
                                            }
                                            $list_ids = implode(',', $id_array);
                                            include('connect.php');
                                            $sls = 'select * from san_pham where masp in (' . $list_ids . ')';
                                            $execs = mysqli_query($connect, $sls);
                                            while ($rows = mysqli_fetch_array($execs)) {
                                                ?>
                                                <div class="product-widget">
                                                    <div class="product-img">
                                                        <img src="images/<?php echo $rows['img']; ?>" alt="#">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#"><?php echo $rows['tensp'] ?></a></h3>
                                                        
                                                    </div>
                                                    <a href="?menu=del_list&masps=<?php echo $rows['masp']; ?>" class="remove" title="Xóa sản phẩm khỏi danh sách">
                                                        <button class="delete"><i class="fa fa-close"></i></button>
                                                    </a>
                                                </div>
                                                <?php
                                         
                                            }
                                            ?>
                                        </div>
                                <?php
                                    }
                                } elseif (!isset($_SESSION['yeuthich'])) {
                                    ?>
                                    <div style="background-repeat: no-repeat;
                                         text-align: center;  ">
                                        <p class="" style="text-align: center;">Chưa có sản phảm nào.</p>
                                    </div>

                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart" style="color: black;"></i>
                                <span style="color: black;">Giỏ hàng</span>
                                <div class="qty"><?php
                                    if (isset($_SESSION['giohang'])) {
                                        $cart = count($_SESSION['giohang']);
                                        echo $cart;
                                    } else {
                                        $cart = 0;
                                        echo $cart;
                                    }
                                    ?></div>
                            </a>
                            <div class="cart-dropdown">
                                <?php
                                if (isset($_SESSION['giohang'])) {
                                    if (count($_SESSION['giohang']) == 0) {
                                        unset($_SESSION['giohang']);
                                        ?>
                                        <p class="alert alert-warning">Giỏ hàng bạn trống..</p>
                                        <?php
                                    } else {
                                        if (isset($_POST['submit'])) {
                                            foreach ($_POST['sl_sp'] as $masp => $sp)
                                                if ($sp == 0 and ( is_numberic($sp))) {
                                                    unset($_SESSION['giohang'][$masp]);
                                                } else {
                                                    $_SESSION['giohang'][$masp] = $sp;
                                                }
                                            echo "<script> alert('Giỏ hàng đã được cập nhật.); </script>";
                                        }
                                        ?>
                                      
                                        <div class="cart-list">
                                            <?php
                                            $tg = 0;
                                            foreach ($_SESSION['giohang'] as $masp => $sp) {
                                                $id_array[] = $masp;
                                            }
                                            $list_id = implode(',', $id_array);
                                            include('connect.php');
                                            $sl = 'select * from san_pham where masp in (' . $list_id . ')';
                                            $exec = mysqli_query($connect, $sl);
                                            while ($row = mysqli_fetch_array($exec)) {
                                                ?>
                                                <div class="product-widget">
                                                    <div class="product-img">
                                                        <img src="images/<?php echo $row['img']; ?>" alt="#">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#"><?php echo $row['tensp'] ?></a></h3>
                                                        <h4 class="product-price"><span class="qty"><?php echo $_SESSION['giohang'][$row['masp']]; ?>x</span><?php
                                                            $tog = ($row['giasp'] * $_SESSION['giohang'][$row['masp']]);
                                                            echo number_format($tog, 0, ",", ".") . "đ";
                                                            ?></h4>
                                                    </div>
                                                    <a href="?menu=del_cart&masp=<?php echo $row['masp']; ?>" class="remove" title="Xóa sản phẩm khỏi giỏ hàng">
                                                        <button class="delete"><i class="fa fa-close"></i></button>
                                                    </a>
                                                </div>
                                                <?php
                                                $tg = $tg + $tog;
                                            }
                                            ?>
                                        </div>
                                        <div class="cart-summary">
                                            <small><?php
                                                if (isset($_SESSION['giohang'])) {
                                                    $cart = count($_SESSION['giohang']);
                                                    echo $cart;
                                                } else {
                                                    $cart = 0;
                                                    echo $cart;
                                                }
                                                ?>Sản phẩm</small>
                                            <h5><?php echo number_format($tg, 0, ",", ".") . "đ"; ?></h5>
                                        </div>
                                        <div class="cart-btns">
                                            <a href="?menu=gio_hang">Chi tiết</a>
                                            <a href="?menu=thanh_toan" class="btn animate">Mua <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                        <?php
                                    }
                                } elseif (!isset($_SESSION['giohang'])) {
                                    ?>
                                    <div style="background-image: url('images/like.png'); background-size:100% 70%; background-repeat: no-repeat;
                                         text-align: center;  height: 250px;">
                                        <p class="" style="text-align: center; padding-top: 200px;">Chưa có sản phẩm nào.</p>
                                    </div>

                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars" style="color: black;"></i>
                                <span style="color: black;">Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
                <a href="../../../../C:/Users/HP/AppData/Local/Temp/Menu.url"></a>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
