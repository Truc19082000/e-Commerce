<?php
if (!isset($login)) {
    exit();
}
?>

<?php
include('../connect.php');
$sl = 'select * from san_pham where san_pham.masp=' . $_GET['masp'];
$exec = mysqli_query($connect, $sl);
$row = mysqli_fetch_array($exec);
?>
<!-- SECTION -->
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="../css/slick.css"/>
<link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>
<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="../css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <?php
        $sl = 'select * from san_pham where san_pham.masp=' . $_GET['masp'];
        $exec = mysqli_query($connect, $sl);
        $row = mysqli_fetch_array($exec);
        ?>
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-4">
                <div class="img-sp col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <script>
                        function img1() {
                            document.getElementById('img').src = "../images/<?php echo $row['img']; ?>";
                        }
                        function img2() {
                            document.getElementById('img').src = "../images/<?php echo $row['img1']; ?>";
                        }
                        function img3() {
                            document.getElementById('img').src = "../images/<?php echo $row['img2']; ?>";
                        }
                        function img4() {
                            document.getElementById('img').src = "../images/<?php echo $row['img3']; ?>";
                        }
                        function img5() {
                            document.getElementById('img').src = "../images/<?php echo $row['img4']; ?>";
                        }
                    </script>
                    <img id="img" class="img-thumbnail" src="../images/<?php echo $row['img']; ?>" alt="" style="width: 300px; height: 200px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div style="margin-left: -10px; padding-top: 10px;">
                            <img class="img-thumbnail" src="../images/<?php echo $row['img']; ?>" style="width: 50px; height: 50px;" onclick="img1();" alt="">
                            <img class="img-thumbnail" src="../images/<?php echo $row['img1']; ?>" style="width: 50px; height: 50px;" onclick="img2();" alt="">
                            <img class="img-thumbnail" src="../images/<?php echo $row['img2']; ?>" style="width: 50px; height: 50px;" onclick="img3();" alt="">
                            <img class="img-thumbnail" src="../images/<?php echo $row['img3']; ?>" style="width: 50px; height: 50px;" onclick="img4();" alt="">
                            <img class="img-thumbnail" src="../images/<?php echo $row['img4']; ?>" style="width: 50px; height: 50px;" onclick="img5();" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->
            <!-- Product details -->
            <div class="col-md-8">
                <div class="product-details">
                    <input type="hidden" name="masp" value="<?php echo $row['masp'] ?>">
                    <h2 class="product-name"><?php echo $row['tensp']; ?></h2>
                    <div>
                        <h3 class="product-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></h3>
                        <span class="product-available" style="color: black; padding-left: 5em;">Trạng thái: <?php
                            if ($row['soluong'] > 0) {
                                echo '<span style="color: red;">Còn hàng</span>';
                            } else {
                                echo '<span style="color: red;">Hết hàng</span>';
                            }
                            ?></span>
                        <span class="product-available" style="color: black; padding-left: 5em;">Lượt xem: 
                            <span style="color: red;"><?php echo $row['xem_nhieu']; ?></span></span>
                    </div>

                    <ul class="product-links">
                        <li>Loại sản phẩm:</li>
                        <li><a href="?menu=<?php echo $row['loaisp']; ?>"><?php echo $row['loaisp']; ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab11">Miêu tả</a></li>
                        <li><a data-toggle="tab" href="#tab22">Chi tiết</a></li>
                        <li><a data-toggle="tab" href="#tab33">Đánh giá và nhận xét</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <?php
                        $sl4 = 'select * from san_pham where san_pham.masp=' . $_GET['masp'];
                        $exec4 = mysqli_query($connect, $sl4);
                        $row4 = mysqli_fetch_array($exec4);
                        ?>
                        <!-- tab1  -->
                        <div id="tab11" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $row4['mieu_ta']; ?>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->
                        <!-- tab2  -->
                        <div id="tab22" class="tab-pane fade in">
                            <div class="row">

                                <div class="col-md-12">
                                    <p><?php echo $row4['chi_tiet_san_pham']; ?></p>
                                </div>            
                            </div>
                        </div>
                        <!-- /tab2  -->
                        <?php ?>
                        <!-- tab3  -->
                        <div id="tab33" class="tab-pane fade in">
                            <div class="row">
                                <!-- Rating -->
                                <?php
                                $sl = "select * from san_pham where masp=" . $_GET['masp'];
                                $exec = mysqli_query($connect, $sl);
                                $tg = $row['rate1'] + $row['rate2'] + $row['rate3'] + $row['rate4'] + $row['rate5'];
                                if ($tg == 0) {
                                    $pt = 0;
                                } else {
                                    $pt5 = $row['rate5'] * 100 / $tg;
                                    $pt4 = $row['rate4'] * 100 / $tg;
                                    $pt3 = $row['rate3'] * 100 / $tg;
                                    $pt2 = $row['rate2'] * 100 / $tg;
                                    $pt1 = $row['rate1'] * 100 / $tg;
                                }
                                ?>
                                <div class="col-md-4">
                                    <div id="rating">
                                        <ul class="rating">
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-progress" style="width: 100px;">
                                                    <div style="width: <?php echo $pt5; ?>%;"></div>
                                                </div>
                                                <span class="sum"><?php echo $row['rate5']; ?></span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress" style="width: 100px;">
                                                    <div style="width: <?php echo $pt4; ?>%;"></div>
                                                </div>
                                                <span class="sum"><?php echo $row['rate4']; ?></span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress" style="width: 100px;">
                                                    <div style="width: <?php echo $pt3; ?>%;"></div>
                                                </div>
                                                <span class="sum"><?php echo $row['rate3']; ?></span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress" style="width: 100px;">
                                                    <div style="width: <?php echo $pt2; ?>%;"></div>
                                                </div>
                                                <span class="sum"><?php echo $row['rate2']; ?></span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress" style="width: 100px;">
                                                    <div style="width: <?php echo $pt1; ?>%;"></div>
                                                </div>
                                                <span class="sum"><?php echo $row['rate1']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Rating -->
<!-- Reviews -->
                                <div class="col-md-8">
                                    <div id="reviews">
                                        <?php
                                        $sl6 = "select * from binh_luan where masp=" . $_GET['masp'];
                                        $exec6 = mysqli_query($connect, $sl6);
                                        while ($row6 = mysqli_fetch_array($exec6)) {
                                            ?>
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name"><?php echo $row6['nickname']; ?></h5>
                                                        <p class="date"><?php echo $row6['ngay_bl']; ?></p>
                                                    </div>
                                                    <div class="review-body">
                                                        <p><?php echo $row6['noi_dung']; ?></p>
                                                    </div>
                                                </li>
                                            </ul>                 
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</div>
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery_2.js"></script>
    <script src="js/main_2.js"></script>



