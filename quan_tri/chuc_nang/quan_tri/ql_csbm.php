<?php
if (!isset($login)) {
    exit();
}
include('../connect.php');
$sl1 = "select * from chinh_sach_bao_mat where id";
$exec1 = mysqli_query($connect, $sl1);
$row1 = mysqli_fetch_array($exec1);
?>
<table style = " width: 100%;">
    <tr style = "border-bottom: 2px solid #E8EAEC;">
        <td id = "abc123">ID</td>
        <td id = "abc123">Chi tiết</td>
        <td colspan = "2" align = "center"><a href = "?menu=them_csbm">Thêm</a></td>
    </tr>
    <?php
    $sl = "select * from chinh_sach_bao_mat";
    $exec = mysqli_query($connect, $sl);
    while ($row = mysqli_fetch_array($exec)) {
        ?>
        <tr id="sanpham">
            <td id="abc123"><?php echo $row['id']; ?></td>
            <td id="abc123"><?php echo $row['chi_tiet']; ?></td>
            <td><a href="?menu=sua_csbm&id=<?php echo $row['id']; ?>">Sửa</a></td></tr>
    <?php } ?>
</table>
