<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <?php
            include('connect.php');
            $sl = "select * from menu_ngang";
            $exec = mysqli_query($connect, $sl);
            while ($row = mysqli_fetch_array($exec)) {
                ?>
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img class="default-img" src="images/<?php echo $row['content']; ?>" style="height: 200px; width: 100%;">
                        </div>
                        <div class="shop-body">
                            <h3><?php echo $row['title']; ?></h3>
                            <a class="cta-btn" href="?menu=<?php echo $row['loaimenu']; ?>">Mua ngay<i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-3 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img class="default-img" src="images/all_sp.jpg" style="height: 200px; width: 100%;">
                    </div>
                    <div class="shop-body">
                        <h3>Tất cả</h3>
                        <a class="cta-btn" href="?menu=tat_ca">Xem ngay<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- SECTION -->
<div class="section">

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm mới</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                <?php
                                $sl = 'select * from san_pham where moi="co" limit 0,10';
                                $exec = mysqli_query($connect, $sl);
                                while ($row = mysqli_fetch_array($exec)) {
                                    ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                                <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 200px; width: 100%;">
                                            </a>
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
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
                                <?php } ?>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Nổi bật</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                <?php
                                include('connect.php');
                                $sl = 'select * from san_pham where noi_bat="co" limit 0,10';
                                $exec = mysqli_query($connect, $sl);
                                while ($row = mysqli_fetch_array($exec)) {
                                    ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                                <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 200px; width: 100%;">
                                            </a>
                                            <div class="product-label">
                                                <span class="new">HOT</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
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
                                <?php } ?>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Giảm giá</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-3">
                                <!-- product -->
                                <?php
                                include('connect.php');
                                $sl = 'select * from san_pham where sale limit 0,10';
                                $exec = mysqli_query($connect, $sl);   
                                while ($row = mysqli_fetch_array($exec)) {
                                    $gg = $row['giasp'] - ($row['giasp'] * $row['sale'] / 100);
                                    ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                                <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 200px; width: 100%;">
                                            </a>
                                            <div class="product-label">
                                                <span class="new">-<?php echo $row['sale']; ?>%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
                                            <h4 class="product-price"><?php echo number_format($gg, 0, ",", ".") . "đ"; ?>
                                                <del class="product-old-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></del>
                                            </h4>
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
                                <?php } ?>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->	