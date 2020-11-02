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
<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="background-color: whitesmoke;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="">
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

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p>Xử lý đơn hàng: <?php echo '<span style="color: blue;" >' . $row['xu_ly'] . '</span>'; ?></p>
        <td><a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" href="?menu=xu_ly&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xử lý</a></td>
        <td><a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  onclick="return confirm('Bạn có mún xóa hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa hóa đơn</a></td>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="float: right;">
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