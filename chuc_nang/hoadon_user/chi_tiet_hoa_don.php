
<?php
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
    .header-inner, #hot-deal, #brands{
        display: none;
    }      
</style>
<br><br><div class="row">
    <div class="col-md-6">
        <h3 style="width: 100%; height: 35px; background-color: #00bbff; text-align: center;">Đơn hàng của bạn</h3>
        <table style=" width: 100%;">
            <tr style="">
                <td><strong>Tên sản phẩm</strong></td>
                <td><strong>Đơn giá</strong></td>
                <td><strong>Số lượng</strong></td>
                <td><strong>Thành tiền</strong></td>
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
    <div class="col-md-6">
        <h3 style="width: 100%; height: 35px; background-color: #00bbff; text-align: center;">Thông tin nhận hàng</h3>
        <table style="width: 100%; border: 1px solid silver;">
            <tr>
                <td><strong>Họ tên khách hàng:</strong></td>
                <td><?php echo $row['tenkh']; ?></td>
            </tr>
            <tr>
                <td><strong>Địa chỉ: </strong></td>
                <td><?php echo $row['dia_chi']; ?></td>
            </tr>
            <tr>
                <td><strong>Số điện thoại: </strong></td>
                <td><?php echo $row['sdt']; ?></td>
            </tr>
            <tr>
                <td><strong>Email: </strong></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        </table>
    </div>
</div>
<div class="row" style="padding-top: 2em;">
    <div class="col" style="padding-left: 40%;">
        <a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"
           href="#">Tiếp tục mua hàng</a>
        <a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"
           onclick="return confirm('Bạn có mún xóa hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">
            Hủy đơn hàng</a>
    </div>
</div>
<br><br>
