<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Về chúng tôi</h3>
                        <p>T&T SHOP</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>32 Phan Đăng Lưu, Quận Hải Châu, TP.Đà Nẵng</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>01234567899</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>truckt12a34@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Sản phẩm</h3>
                        <ul class="footer-links">
                            <?php
                            include('connect.php');
                            $sl = "select * from menu_ngang";
                            $exec = mysqli_query($connect, $sl);
                            while ($row = mysqli_fetch_array($exec)) {
                                ?>

                                <li><a href="?menu=<?php echo $row['loaimenu']; ?>"><?php echo $row['title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Thông tin</h3>
                        <ul class="footer-links">
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Đơn hàng và hoàn trả</a></li>
                            <li><a href="?menu=chinh_sach_bao_mat">Chính sách và bảo mật</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Dịch vụ</h3>
                        <ul class="footer-links">
                            <li><a href="#">Tài khoản</a></li>
                            <li><a href="#">Xem giỏ hàng</a></li>
                            <li><a href="#">Danh sách yêu thích</a></li>
                            <li><a href="#">Theo dõi đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with by <a href="#" target="_blank" style="color: white;">Pham Van Truc</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->