<?php
if (!isset($login)) {
    exit();
}
?>
<?php
include('../connect.php');
$id = $_GET['id'];
$sl = 'select * from chinh_sach_bao_mat';
$exec = mysqli_query($connect, $sl);
$row = mysqli_fetch_array($exec);
?>
<div class="addproduct">
    <form method="post" action="?menu=exec_sua_csbm" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="chi_tiet">Chi tiết chính sách bảo mật</label></td>
            </tr>
            <tr>
                <td>
                    <textarea id="chi_tiet" name="chi_tiett"  rows="25" cols="120"><?php echo $row['chi_tiet']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td class="right"><input type="submit" name="submit" value="Sửa"></td>	</form>
            <form method="post" action="?menu=exec_sua_csbm">
                <td><input type="submit" name="cancel" value="Hủy"></td>
                </tr>
        </table>
    </form>
</div>