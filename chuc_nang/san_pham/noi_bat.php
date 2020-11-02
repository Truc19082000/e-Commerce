<div class="panel panel-primary"  style="margin-left: -32px; margin-right: -16px;">
    <div class="panel-heading">Nổi bật</div>
    <div class="panel-body">
		<?php
			include('connect.php');
			$sl= "select * from san_pham where noi_bat='co' limit 0,4"; 
			$exec= mysqli_query($connect, $sl); 
			while($row= mysqli_fetch_array($exec)){
		?>
		<div style="height: 240px;" class="sp img-thumbnail">
		<div class="img img-thumbnail">
			<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt=""></a>
		</div>
		<div class="title">
			<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
		</div>
		<div class="cost">
			<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
		</div>
	</div>
		<?php } ?>
	</div>
</div>
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Sản phẩm mới</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                     <?php
                        include('connect.php');
                        $sl = 'select * from san_pham where loaisp="cpu" limit 0,10';
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                    <div class="single-product">
                            <div class="product-img">
                                <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                    <img class="default-img" src="images/<?php echo $row['img']; ?>">
                                    <img class="hover-img" src="images/<?php echo $row['img']; ?>">
                                    <span class="out-of-stock">Hot</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                                            <i class=" ti-eye"></i>
                                            <span>Xem chi tiết</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h3>
                                <div class="product-price">
                                    <span><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></span>
                                </div>
                            </div>
                        
                    </div>
                   
                    <?php } ?>
                    <!-- End Single Product -->

                </div>
            </div>
        </div>
    </div>
</div