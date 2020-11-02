<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Tay cam';
    });

</script>
<div class="section">
    <!-- container -->
    <div style="background-color: #00897b; padding-top: 1em; height: 60px;">
        <div><h3 style="text-align: center; font-family: Comic Sans MS; color: white;">TAY CẦM</h3></div>
    </div>
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Sản phẩm</h3>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='cpu'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>CPU</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='tainghe'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>TAI NGHE</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='chuot'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>CHUỘT</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='taycam'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>TAY CẦM</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='lotchuot'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>LÓT CHUỘT</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='ram'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>RAM</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(loaisp) FROM san_pham where loaisp='manhinh'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>MÀN HÌNH</span>
                                    <small>(<?php echo $row['COUNT(loaisp)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- /aside Widget -->
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Thương hiệu</h3>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(nha_sx) FROM san_pham where nha_sx='SAMSUNG'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>SAMSUNG</span>
                                    <small>(<?php echo $row['COUNT(nha_sx)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>    
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(nha_sx) FROM san_pham where nha_sx='INTEL'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>INTEL</span>
                                    <small>(<?php echo $row['COUNT(nha_sx)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>    
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(nha_sx) FROM san_pham where nha_sx='AMD'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>AMD</span>
                                    <small>(<?php echo $row['COUNT(nha_sx)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>    
                    </div>
                    <div class="checkbox-filter">
                        <?php
                        $sl = "SELECT COUNT(nha_sx) FROM san_pham where nha_sx='RYZEN'";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <div class="input-checkbox">
                                <label>
                                    <span>RYZEN</span>
                                    <small>(<?php echo $row['COUNT(nha_sx)']; ?>)</small>
                                </label>
                            </div>
                        <?php } ?>    
                    </div>
                </div>
                <div class="aside">
                <h3 class="aside-title">Giảm giá</h3>
                <?php
                include('connect.php');
                $sl = 'select * from san_pham where sale limit 0,3';
                $exec = mysqli_query($connect, $sl);
                while ($row = mysqli_fetch_array($exec)) {
                    $gg = $row['giasp'] - ($row['giasp'] * $row['sale'] / 100);
                    ?>
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="images/<?php echo $row['img']; ?>" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category"><?php echo $row['loaisp']; ?></p>
                            <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
                            <h4 class="product-price"><?php echo number_format($gg, 0, ",", ".") . "đ"; ?>
                                                <del class="product-old-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></del>
                                            </h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sắp xếp theo:
                            <select class="input-select">
                                <option value="0">Độ phổ biến</option>
                                <option value="1">Giá từ thấp tới cao</option>
                                <option value="2">Giá từ cao tới thấp</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                    </ul>
                </div>
                <!-- /store top filter -->
                <?php
                include('connect.php');
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = 1;
                $page = $page - 1;
                $limit = 6;
                $sql = "select * from san_pham where loaisp like 'taycam'";
                $ex = mysqli_query($connect, $sql);
                $total = mysqli_num_rows($ex);
                $total = $total / $limit;
                $total = ceil($total);
                $start = $limit * $page;
                ?>
                <!-- store products -->
                <div class="row">
                    <?php
                    include('connect.php');
                    $sl = "select * from san_pham where loaisp like 'taycam' limit " . $start . "," . $limit;
                    $exec = mysqli_query($connect, $sl);
                    while ($row = mysqli_fetch_array($exec)) {
                        ?>  
                        <!-- product -->
                        <div class="col-md-4 col-xs-6" style="height: 400px;">
                            <div class="product">
                                <div class="product-img">
                                    <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                        <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 200px; width: 100%;">
                                    </a>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $row['loaisp']; ?></p>
                                    <h3 class="product-name"><a href="#"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></a></h3>
                                    <h4 class="product-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></h4>
                                    <div class="product-btns">
                                        <a href="?menu=addlist&masp=<?php echo $row['masp']; ?>&soluong=1">
                                            <button class="add-to-wishlist">
                                                <i class="fa fa-heart-o" title="Thêm vào danh sách yêu thích"></i><span class="tooltipp"></span>
                                            </button>
                                        </a>
                                        <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                            <button class="quick-view">
                                                <i class="fa fa-eye" title="Thêm vào vào giỏ hàng"></i><span class="tooltipp"></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to cart" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- /product -->
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <nav>
                        <ul class="store-pagination">
                            <?php
                            if ($page == 0) {
                                $page = $page + 2;
                                $firstpage = "";
                            } else if ($page >= 1) {
                                if ($page == $total - 1) {
                                    $prpage = $page;

                                    $page = $page - 2;
                                    $next = "";
                                } else {
                                    $prpage = $page;
                                    $page = $page + 2;
                                }
                            }
                            ?>


                            <?php
                            for ($i = 1; $i <= $total; $i++) {
                                ?>
                                <li><a href="?menu=tay_cam&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>