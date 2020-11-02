<!-- SECTION -->
<div class="section" id="brands">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Mua nhiều</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>
                <div class="products-widget-slick" data-nav="#slick-nav-4">
                     <?php
                    include('connect.php');
                    $sl = 'select * from san_pham where noi_bat="co" limit 0,6';
                    $exec = mysqli_query($connect, $sl);
                    while ($row = mysqli_fetch_array($exec)) {
                        ?>
                        <div>
                            <!-- product widget -->       
                            <div class="product-widget">
                                <div class="product-img">
                                    <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                        <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 40px; width: 40px;">
                                    </a>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
                                    <h4 class="product-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></h4>
                                </div>
                            </div>
                            <!-- /product widget -->            
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Xem nhiều</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    

                     <?php
                    include('connect.php');
                    $sl = 'select * from san_pham where noi_bat="co" limit 0,6';
                    $exec = mysqli_query($connect, $sl);
                    while ($row = mysqli_fetch_array($exec)) {
                        ?>
                        <div>
                            <!-- product widget -->       
                            <div class="product-widget">
                                <div class="product-img">
                                    <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                        <img class="default-img" src="images/<?php echo $row['img']; ?>" style="height: 40px; width: 40px;">
                                    </a>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
                                    <h4 class="product-price"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></h4>
                                </div>
                            </div>
                            <!-- /product widget -->            
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->