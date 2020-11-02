<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Thành viên';
    });

</script>
<style>
    .active{
        background-color: whitesmoke;
    }
    li{
        height: 30px;
    }
    .banner{
        display: none;
    }
    .header-inner, #hot-deal, #brands{
        display: none;
    }   
</style>
<br><br><br><div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <ul>
                <li class="active" >
                    <a data-toggle="pill" href="#ql_taikhoan">QUẢN LÝ TÀI KHOẢN TÀI KHOẢN</a>
                </li><br>
                <li>
                    <a data-toggle="pill" href="#ql_donhang">QUẢN LÝ ĐƠN HÀNG</a>
                </li><br>
                <li>
                    <a data-toggle="pill" href="#ql_binhluan">BÌNH LUẬN CỦA TÔI</a>
                </li><br>
                <li>
                    <a data-toggle="pill" href="#sp_yeuthich">SẢN PHẨM YÊU THÍCH</a>
                </li>
            </ul>
        </div>
        <div class=" col-lg-8 col-md-8 col-sm-8">
            <div class="tab-content">  
                <div id="ql_taikhoan" class="tab-pane fade in  active">
                    <div style="text-align: center;">QUẢN LÝ TÀI KHOẢN TÀI KHOẢN</div>
                    <?php
                    include('connect.php');
                    $sl = "select * from thanh_vien where username='" . $_SESSION['username'] . "'";
                    $exec = mysqli_query($connect, $sl);
                    $row = mysqli_fetch_array($exec);
                    ?>
                    <table class="table">
                        <tr>
                            <td><label>Họ và tên: </label></td>
                            <td><?php echo $row['hoten']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Ngày sinh: </label></td>
                            <td>
                                <?php
                                $ngaysinh = $row['ngaysinh'];
                                $array = explode("-", $ngaysinh);
                                $nam = $array[0];
                                $thang = $array[1];
                                $ngay = $array[2];
                                $ngaysinh = $ngay . "-" . $thang . "-" . $nam;
                                echo $ngaysinh;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Giới tính: </label></td>
                            <td><?php echo $row['gioitinh']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Số CMND: </label></td>
                            <td><?php echo $row['cmnd']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Địa chỉ: </label></td>
                            <td>
                                <?php
                                echo $row['diachi'];
                                ?>				
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Số điện thoại: </label></td>
                            <td><?php echo $row['sdt']; ?></td>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><a class="btn btn-primary" href="?menu=sua_tt_thanh_vien">Chỉnh sửa</a></td>
                        </tr>
                    </table>               
                </div>
                <div id="ql_donhang" class="tab-pane fade in">
                    <?php include('chuc_nang/hoadon_user/hoa_don.php'); ?>
                </div>
                <div id="ql_binhluan" class="tab-pane fade in">
                    <div style="text-align: center;"><h3>Chưa có bình luận nào.</h3></div>
                </div>
                <div id="sp_yeuthich" class="tab-pane fade in">
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
                                                        <h3 class="product-name"><a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $rows['tensp'] ?></a></h3>
                                                         <h3 class="product-name"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></a></h3>
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
                                    <div class="tab-pane fade in">
                    <div style="text-align: center;"><h3>Chưa có sản phẩm nào.</h3></div>
                </div>

                                    <?php
                                }
                                ?>
                </div>
            </div>
        </div>
    </div>
</div><br>
