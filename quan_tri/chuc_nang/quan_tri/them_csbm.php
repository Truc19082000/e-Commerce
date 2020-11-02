<?php
if (!isset($login)) {
    exit();
}
?>
<div class="addproduct">
    <form method="post" action="?menu=exec_them_csbm" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="chi_tiet">Chi tiết sản phẩm</label></td>
            </tr>
            <tr>
                <td>ID</td>
                <td>Chi tiet</td>
            </tr>
            <tr>
                <td>
                    <textarea id="id" name="id"  rows="2" cols="2"></textarea>
                </td>
                <td>
                    <textarea id="chi_tiet" name="chi_tiet"  rows="25" cols="120"></textarea>
                </td>
            </tr>
            <tr>
                <td class="right"><input type="submit" name="submit" value="Thêm"></td>	</form>
            <form method="post" action="?menu=exec_them_csbm">
                <td><input type="submit" name="cancel" value="Hủy"></td>
                </tr>
        </table>
    </form>
</div>