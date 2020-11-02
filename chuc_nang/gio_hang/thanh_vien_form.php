<?php
$sql = "select * from thanh_vien where username='" . $_SESSION['username'] . "'";
$ex = mysqli_query($connect, $sql);
$row2 = mysqli_fetch_array($ex);
$cmnd = $row2['cmnd'];
$tenkh = $row2['hoten'];
$email = $row2['email'];
$sdt = $row2['sdt'];
$diachi = $row2['diachi'];
foreach ($_SESSION['giohang'] as $masp => $sp) {
    $id_array[] = $masp;
}
$list_id = implode(',', $id_array);
$sl = 'select * from san_pham where masp in (' . $list_id . ')';
$exec = mysqli_query($connect, $sl);
$sp_mua = "";
$tg = 0;
$list_product = "";
echo "Xin chào " . $tenkh . ", bạn đã mua các sản phẩm của chúng tôi là: <br>";
?>
<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Giỏ hàng';
    });
</script>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">ĐƠN HÀNG</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>SẢN PHẨM</strong></div>
                        <div><strong>TỔNG</strong></div>
                    </div>
                    <div class="order-products">
                        <?php
                        while ($row = mysqli_fetch_array($exec)) {
                            $soluong = $_SESSION['giohang'][$row['masp']];
                            $gia_sp = $row['giasp'];
                            $masp = $row['masp'];
                            $sp_mua = $sp_mua . $masp . "," . $soluong . "," . $gia_sp . "|";
                            ?>
                            <div class="order-col">
                                <div><?php echo $soluong; ?>x<img style="width: 70px;" src="images/<?php echo $row['img']; ?>" alt=""><?php echo $row['tensp']; ?></div>
                                <div><?php echo number_format($gia_sp, 0, ",", ".") . "đ"; ?></div>
                            </div>
                            <?php
                            $tg = $tg + ($soluong * $gia_sp);
                        }
                        ?>
                    </div>
                    <div class="order-col">
                        <div>PHÍ VẬN CHUYỂN</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TỔNG ĐƠN HÀNG</strong></div>
                        <div><strong class="order-total"><?php echo number_format($tg, 0, ",", ".") . "đ"; ?></strong></div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            Tôi đã đọc và chấp nhận các <a href="#">chính sách và điều khoản</a>
                        </label>
                    </div>
                    <form method="post" action="?menu=hoa_don">
                        <form id="form" action="?menu=hoa_don" method="post">
                            <p><input type="hidden" name="sp_mua" value="<?php echo $sp_mua; ?>"></p>
                            <p><input type="hidden" name="tenkh" value="<?php echo $tenkh; ?>"></p>
                            <p><input type="hidden" name="cmnd" value="<?php echo $cmnd; ?>"></p>
                            <p><input type="hidden" name="email" value="<?php echo $email; ?>"></p>
                            <p><input type="hidden" name="sdt" value="<?php echo $sdt; ?>"></p>
                            <p><input type="hidden" name="diachi" value="<?php echo $diachi; ?>">
                                <input type="hidden" name="list_id" value="<?php echo $list_id; ?>"></p>
                            <div>
                                <input class="primary-btn order-submit" type="submit" name="submit" value="Đặt hàng" onclick="myFunction()" style="background-color: red;">
                                <input class="primary-btn order-submit" type="submit" name="cancel" value="Hủy" style="background-color: red;">
                            </div>
                        </form>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Phương thức thanh toán</h3>
                    </div>
                    <div>
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="pill" href="#thanh_toan_khi_nhan_hang">Thanh toán khi nhận hàng</a>
                            </li>
                            <li>
                                <a data-toggle="pill" href="#the_tin_dung">Thẻ tín dụng</a>
                            </li>
                            <li>
                                <a data-toggle="pill" href="#vi_dien_tu">Ví điện tử</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div id="thanh_toan_khi_nhan_hang" class="tab-pane fade in  active">
                                <?php include('chuc_nang/gio_hang/thanh_toan_khi_nhan_hang.php'); ?>
                            </div>
                            <div id="the_tin_dung" class="tab-pane fade in">
                                <?php include('chuc_nang/gio_hang/the_tin_dung.php'); ?>
                            </div>
                            <div id="vi_dien_tu" class="tab-pane fade in">
                                <?php include('chuc_nang/gio_hang/vi_dien_tu.php'); ?>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Billing Details -->
            </div>
        </div>
    </div>
</div>