<?php
if (!isset($login)) {
    exit();
}
?>
<?php
include('../connect.php');
$masp = $_GET['masp'];
$sl = 'select * from san_pham where san_pham.masp=' . $_GET['masp'];
$exec = mysqli_query($connect, $sl);
$row = mysqli_fetch_array($exec);
?>
<div class="addproduct">
    <form method="post" action="?menu=exec_sua_sp" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="4">Thông tin sản phẩm</td>
            </tr>
            <tr>
                <td><label for="name">Tên sản phẩm</label></td>
                <td><label for="cost">Giá</label></td>
                <td><label for="soluong">Số lượng</label></td>
                <td class="right"><label for="loaisp">Loại sản phẩm</label></td>

            </tr>
            <tr>
                <td><input type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" ></td>
                <td><input type="text" id="cost" name="cost"  value="<?php echo $row['giasp']; ?>" ></td>
                <td><input type="text" id="soluong" name="soluong"  value="<?php echo $row['soluong']; ?>" ></td>
                <td>
                    <select name="loaisp" id="loaisp"   >
                        <option value="cpu" <?php
                        if ($row['loaisp'] == "cpu") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >CPU
                        </option>
                        <option value="ram" <?php
                        if ($row['loaisp'] == "ram") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >RAM
                        </option><option value="tainghe" <?php
                        if ($row['loaisp'] == "tainghe") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >TAI NGHE
                        </option>
                        <option value="chuot" <?php
                        if ($row['loaisp'] == "chuot") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >CHUỘT
                        </option>
                        <option value="lotchuot" <?php
                        if ($row['loaisp'] == "lotchuot") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >LÓT CHUỘT
                        </option>
                        <option value="manhinh" <?php
                        if ($row['loaisp'] == "manhinh") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >MÀN HÌNH
                        </option>
                        <option value="taycam" <?php
                        if ($row['loaisp'] == "taycam") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >TAY CẦM
                        </option>
                        <option value="banphim" <?php
                        if ($row['loaisp'] == "banphim") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >BÀN PHÍM
                        </option>

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
                    <input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
                    <input type="hidden" name="img" value="<?php echo $row['img']; ?>">
                    <input type="hidden" name="img1" value="<?php echo $row['img1']; ?>">
                    <input type="hidden" name="img2" value="<?php echo $row['img2']; ?>">
                    <input type="hidden" name="img3" value="<?php echo $row['img3']; ?>">
                    <input type="hidden" name="img4" value="<?php echo $row['img4']; ?>">
                    <img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="60px" height="80px" ><input type="file" id="image" name="image"   ><br>
                    <img src="../images/<?php echo $row['img1']; ?>" alt="" name="img1" width="60px" height="80px" ><input type="file" id="image1" name="image1"><br>
                    <img src="../images/<?php echo $row['img2']; ?>" alt="" name="img2" width="60px" height="80px" ><input type="file" id="image2" name="image2"><br>
                    <img src="../images/<?php echo $row['img3']; ?>" alt="" name="img3" width="60px" height="80px" ><input type="file" id="image3" name="image3"><br>
                    <img src="../images/<?php echo $row['img4']; ?>" alt="" name="img4" width="60px" height="80px" ><input type="file" id="image4" name="image4">
                </td>
            </tr>
        </table><br>
        <table>
            <tr>
                <td><label for="nha_sx">Nhà sản xuất</label></td>

            </tr>
            <tr>
                <td><input type="text" id="nha_sx" name="nha_sx"  value="<?php echo $row['nha_sx']; ?>"></td></tr>
        </table>
        <table>
            <tr>
                <td><label for="chi_tiet_san_pham">Chi tiết sản phẩm</label></td>>
            </tr>
            <tr>
                <td>
                    <textarea id="chi_tiet_san_pham" name="chi_tiet_san_pham" rows="11" cols="110" maxlength="50000" >
                        <?php echo $row['chi_tiet_san_pham']; ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td><label for="mieu_ta">Miêu tả</label></td>>
            </tr>
            <tr>
                <td>
                    <textarea id="mieu_ta" name="mieu_ta" rows="11" cols="110" maxlength="50000" >
                        <?php echo $row['mieu_ta']; ?>
                    </textarea>
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
                        <option value="có" <?php
                        if ($row['noi_bat'] == "có") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> > Có</option>
                        <option value="không" <?php
                        if ($row['noi_bat'] == "không") {
                            echo "selected";
                        } else {
                            echo "";
                        }
                        ?> >Không</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="right"><input type="submit" name="submit" value="Sửa"></td>	</form>
            <form method="post" action="?menu=exec_sua_sp">
                <td><input type="submit" name="cancel" value="Hủy"></td>
                </tr>
        </table>
    </form>
</div>