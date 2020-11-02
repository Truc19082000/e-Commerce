<?php
if (!isset($login)) {
    exit();
}
?>
<?php
include('../connect.php');
$ma_hoadon = $_GET['ma_hoadon'];
$sl = "select * from hoa_don where ma_hoadon=" . $ma_hoadon;
$exec = mysqli_query($connect, $sl);
$row = mysqli_fetch_array($exec);
?>
<style>
    h3{
        padding-top: .2em;
    }
    td{

        text-align:center;
        border-right: 1px solid silver;    
    }
    tr{
        border: 1px solid silver;
        border-right: 1px solid silver;
    }
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Người dùng</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div>
                    <h3 style="width: 100%; height: 35px; background-color: #00bbff; text-align: center;">Thông tin sản phẩm đã mua</h3>
                    <table style=" width: 100%;">
                        <tr style="">
                            <td>Tên sản phẩm</td>
                            <td>Đơn giá</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                        </tr>
                        <?php
                        $sp_mua = $row['sp_mua'];
                        $thanh_tien1 = 0;
                        $sp = explode("|", $sp_mua);
                        for ($i = 0; $i < count($sp); $i++) {
                            if ($sp[$i] != "") {
                                $sp_mua = explode(",", $sp[$i]);
                                $masp = $sp_mua[0];
                                $soluong = $sp_mua[1];
                                $gia_sp = $sp_mua[2];
                                $thanh_tien = $soluong * $gia_sp;
                                $sll = "select * from san_pham where masp=" . $masp;
                                $excc = mysqli_query($connect, $sll);
                                $row2 = mysqli_fetch_array($excc);
                                ?>
                                <tr>
                                    <td><?php echo $row2['tensp']; ?></td>
                                    <td><?php echo number_format($gia_sp, 0, ",", ".") . "đ"; ?></td>
                                    <td style="text-align: center;"><?php echo $soluong; ?></td>
                                    <td><?php echo number_format($thanh_tien, 0, ",", ".") . "đ"; ?></td>
                                </tr>
                                <?php
                                $thanh_tien1 = $thanh_tien1 + $thanh_tien;
                            }
                        }
                        ?>
                        <tr style="">
                            <td class="title" colspan="3"><strong>Tổng tiền đơn hàng: </strong></td>
                            <td><strong><?php echo number_format($thanh_tien1, 0, ",", ".") . "đ"; ?></strong></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <h3 style="width: 100%; height: 35px; background-color: #00bbff; text-align: center;">Thông tin khách hàng</h3>
                    <table style="width: 100%; border: 1px solid silver;">
                        <tr>
                            <td>Họ tên khách hàng:</td>
                            <td><?php echo $row['tenkh']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td><?php echo $row['dia_chi']; ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại: </td>
                            <td><?php echo $row['sdt']; ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="row" style="padding-top: 2em;">
                    <div class="col">
                        <p>Tình trạng đơn hàng: <?php echo '<span style="color: blue;" >' . $row['xu_ly'] . '</span>'; ?></p>
                       </div>
                    <div class="col">
                         <a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" href="?menu=xu_ly&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xử lý</a>
                        <a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  onclick="return confirm('Bạn có mún xóa hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa hóa đơn</a>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h3 style="text-align: center; background-color: silver; height: 35px; width: 100%;">ĐƠN HÀNG</h3>
                <table style="border: 2px solid black; width: 100%;">
                    <tr style="border: 2px solid #000;">
                        <td><label>Mã hóa đơn</label></td>
                        <td><label>Tên khách hàng</label></td>
                        <td><label>Xóa</label></td>
                    </tr>
                    <?php
                    include('../connect.php');
                    $sl = "select * from hoa_don";
                    $exec = mysqli_query($connect, $sl);
                    while ($row = mysqli_fetch_array($exec)) {
                        ?>
                        <tr>
                            <td><?php echo $row['ma_hoadon']; ?></td>
                            <td><a href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['ma_hoadon']; ?>"><?php echo $row['tenkh']; ?></a></td>
                            <td><a  onclick="return confirm('Bạn có muốn xóa hóa đơn?');" href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>
</div>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="../assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="../assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
                                $(document).ready(function () {
                                    $().ready(function () {
                                        $sidebar = $('.sidebar');

                                        $sidebar_img_container = $sidebar.find('.sidebar-background');

                                        $full_page = $('.full-page');

                                        $sidebar_responsive = $('body > .navbar-collapse');

                                        window_width = $(window).width();

                                        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                                        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                                            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                                                $('.fixed-plugin .dropdown').addClass('open');
                                            }

                                        }

                                        $('.fixed-plugin a').click(function (event) {
                                            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                                            if ($(this).hasClass('switch-trigger')) {
                                                if (event.stopPropagation) {
                                                    event.stopPropagation();
                                                } else if (window.event) {
                                                    window.event.cancelBubble = true;
                                                }
                                            }
                                        });

                                        $('.fixed-plugin .active-color span').click(function () {
                                            $full_page_background = $('.full-page-background');

                                            $(this).siblings().removeClass('active');
                                            $(this).addClass('active');

                                            var new_color = $(this).data('color');

                                            if ($sidebar.length != 0) {
                                                $sidebar.attr('data-color', new_color);
                                            }

                                            if ($full_page.length != 0) {
                                                $full_page.attr('filter-color', new_color);
                                            }

                                            if ($sidebar_responsive.length != 0) {
                                                $sidebar_responsive.attr('data-color', new_color);
                                            }
                                        });

                                        $('.fixed-plugin .background-color .badge').click(function () {
                                            $(this).siblings().removeClass('active');
                                            $(this).addClass('active');

                                            var new_color = $(this).data('background-color');

                                            if ($sidebar.length != 0) {
                                                $sidebar.attr('data-background-color', new_color);
                                            }
                                        });

                                        $('.fixed-plugin .img-holder').click(function () {
                                            $full_page_background = $('.full-page-background');

                                            $(this).parent('li').siblings().removeClass('active');
                                            $(this).parent('li').addClass('active');


                                            var new_image = $(this).find("img").attr('src');

                                            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                                $sidebar_img_container.fadeOut('fast', function () {
                                                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                                    $sidebar_img_container.fadeIn('fast');
                                                });
                                            }

                                            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                                                $full_page_background.fadeOut('fast', function () {
                                                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                                    $full_page_background.fadeIn('fast');
                                                });
                                            }

                                            if ($('.switch-sidebar-image input:checked').length == 0) {
                                                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                                                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                            }

                                            if ($sidebar_responsive.length != 0) {
                                                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                                            }
                                        });

                                        $('.switch-sidebar-image input').change(function () {
                                            $full_page_background = $('.full-page-background');

                                            $input = $(this);

                                            if ($input.is(':checked')) {
                                                if ($sidebar_img_container.length != 0) {
                                                    $sidebar_img_container.fadeIn('fast');
                                                    $sidebar.attr('data-image', '#');
                                                }

                                                if ($full_page_background.length != 0) {
                                                    $full_page_background.fadeIn('fast');
                                                    $full_page.attr('data-image', '#');
                                                }

                                                background_image = true;
                                            } else {
                                                if ($sidebar_img_container.length != 0) {
                                                    $sidebar.removeAttr('data-image');
                                                    $sidebar_img_container.fadeOut('fast');
                                                }

                                                if ($full_page_background.length != 0) {
                                                    $full_page.removeAttr('data-image', '#');
                                                    $full_page_background.fadeOut('fast');
                                                }

                                                background_image = false;
                                            }
                                        });

                                        $('.switch-sidebar-mini input').change(function () {
                                            $body = $('body');

                                            $input = $(this);

                                            if (md.misc.sidebar_mini_active == true) {
                                                $('body').removeClass('sidebar-mini');
                                                md.misc.sidebar_mini_active = false;

                                                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                                            } else {

                                                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                                                setTimeout(function () {
                                                    $('body').addClass('sidebar-mini');

                                                    md.misc.sidebar_mini_active = true;
                                                }, 300);
                                            }

                                            // we simulate the window Resize so the charts will get updated in realtime.
                                            var simulateWindowResize = setInterval(function () {
                                                window.dispatchEvent(new Event('resize'));
                                            }, 180);

                                            // we stop the simulation of Window Resize after the animations are completed
                                            setTimeout(function () {
                                                clearInterval(simulateWindowResize);
                                            }, 1000);

                                        });
                                    });
                                });
</script>
