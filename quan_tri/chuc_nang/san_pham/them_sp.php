<?php
if (!isset($login)) {
    exit();
}
?>
<div class="addproduct">
    <form method="post" action="?menu=exec_them_sp" enctype="multipart/form-data">
        <table>
            <tr>
                <h3 style="text-align: center;">Thêm sản phẩm</h3>
            </tr>
            <tr>
                <td><label for="name">Tên sản phẩm</label></td>
                <td><label for="cost">Giá</label></td>
                <td><label for="soluong">Số lượng</label></td>
                <td class="right"><label for="loaisp">Loại sản phẩm</label></td>

            </tr>
            <tr>
                <td><input type="text" id="name" name="name" required ></td>
                <td><input type="text" id="cost" name="cost" required ></td>
                <td><input type="text" id="soluong" name="soluong" required ></td>
                <td>
                    <select name="loaisp" id="loaisp"  required >
                        <option value="cpu">CPU</option>
                        <option value="ram">RAM</option>
                        <option value="tainghe">Tai nghe</option>
                        <option value="chuot">CHUỘT</option>
                        <option value="lotchuot">LÓT CHUỘT</option>
                        <option value="manhinh">MÀN HÌNH</option>
                        <option value="taycam">TAY CẦM</option>
                        <option value="banphim">BÀN PHÍM</option>
                    </select>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="2">Hình ảnh</td>
            </tr>
            <tr>
                <td class="right">
                    <label for="image1">Ảnh 1:</label><br>
                    <label for="image2">Ảnh 2:</label><br>
                    <label for="image3">Ảnh 3:</label><br>
                    <label for="image4">Ảnh 4:</label><br>
                    <label for="image5">Ảnh 5:</label>
                </td>
                <td>
                    <input type="file" id="image" name="image"  required ><br>
                    <input type="file" id="image2" name="image1"><br>
                    <input type="file" id="image3" name="image2"><br>
                    <input type="file" id="image4" name="image3"><br>
                    <input type="file" id="image5" name="image4">
                </td>
            </tr>
        </table>
        <table>
            <tr>
            <td><label for="chi_tiet_san_pham">Chi tiết sản phẩm</label></td>
            </tr>
            <tr>
                <td>
                    <textarea id="chi_tiet_san_pham" name="chi_tiet_san_pham"  rows="10" cols="81" required></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="mieu_ta">Miêu tả</label></td>>
            </tr>
            <tr>
                <td>
                    <textarea id="mieu_ta" name="mieu_ta" rows="11" cols="110" maxlength="50000" ></textarea>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td colspan="4"><hr></td>
            </tr>
            <tr>
                <td><label for="noi_bat">Nổi bật</label></td>
                <td>
                    <select name="noi_bat" id="noi_bat">
                        <option value="có">Có</option>
                        <option value="không">Không</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="right"><input type="submit" name="submit" value="Thêm"></td>	</form>
            <form method="post" action="?menu=exec_them_sp">
                <td><input type="submit" name="cancel" value="Hủy"></td>
                </tr>
        </table>
    </form>
</div>