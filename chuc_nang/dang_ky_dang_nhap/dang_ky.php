<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Đăng ký';
    });

</script>
<style>
    .banner{
        display: none;
    }
    .header-inner, #hot-deal, #brands{
        display: none;
    }      
</style>
<div style="background-color: whitesmoke; height: 50px;"><h3 style="padding-left: 5em; padding-top: 1em; color: black;">Tạo tài khoản</h3></div>
<br><div class="panel-heading"><h3 style="text-align: center; font-family: Comic Sans MS; color: black;">Đăng ký</h3></div>
<div style="width: 70%; margin-left: 15%; padding: 8px; background-color: whitesmoke;">
    <form action="?menu=exec_dang_ky" method="post" role="form" data-toggle="validator">
        <table class="table">
            <tr>
                <td><label for="user">Tên đăng khập:</label></td>
                <td><input type="text" name="username" id="user" class="form-control" placeholder="Nhập tên đăng nhập.." required ></td>
            </tr>
            <tr>
                <td><label for="pass">Mật khẩu:</label></td>
                <td><input type="password" name="password" id="pass" class="form-control" placeholder="Nhập mật khẩu.." required ></td>
            </tr>
            <tr>
                <td><label for="repass">Nhập lại mật khẩu:</label></td>
                <td><input type="password" name="re-pass" class="form-control" id="repass" placeholder="Nhập lại mật khẩu.." required ></td>
            </tr>
            <tr>
                <td><label for="hoten">Họ và tên:</label></td>
                <td><input type="text" name="hoten" id="hoten" class="form-control"  placeholder="Nhập họ và tên bạn.." required ></td>
            </tr>
            <tr>
                <td><label for="cmnd">Số CMND: </label></td>
                <td><input type="text" name="cmnd" id="cmnd" class="form-control"  placeholder="Nhập số CMND.." required ></td>
            </tr>
            <tr>
                <td><label>Ngày sinh: </label></td>
                <td>
                    <select style="width: 100px; height: 36px; border: 0.1px solid silver; border-radius: 5px; padding-left: 10px;" name="ngay" id="ngaysinh" required >
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo "Ngày " . $i; ?></option>
                        <?php } ?>
                    </select>
                    <select style="width: 100px; height: 36px; border: 0.1px solid silver; border-radius: 5px; padding-left: 10px;" name="thang" required >
                        <?php for ($j = 1; $j <= 12; $j++) { ?>
                            <option value="<?php echo $j; ?>"><?php echo "Tháng " . $j; ?></option>
                        <?php } ?>
                    </select>
                    <select style="width: 120px; height: 36px; border: 0.1px solid silver; border-radius: 5px; padding-left: 10px;" name="nam" required >
                        <?php
                        for ($y = 1946; $y <= date('Y'); $y++) {
                            if ($y == 1997) {
                                $selected = "selected";
                            } else {
                                $selected = "";
                            }
                            ?>
                            <option value="<?php echo $y; ?>" <?php echo $selected; ?> ><?php echo "Năm " . $y; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="gioitinh">Giới tính:</td>
                <td>
                    <select  class="form-control"  name="gioitinh" id="gioitinh" required >
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" class="form-control"  placeholder="Nhập địa chỉ Email.." required ></td>
            </tr>
            <tr>
                <td><label for="sdt">Số điện thoại:</label></td>
                <td><input type="text" name="sdt" id="sdt" class="form-control"  placeholder="Nhập số điện thoại.." required ></td>
            </tr>
            <tr>
                <td><label for="diachi">Địa chỉ:</label></td>
                <td><input type="text" name="diachi" id="diachi" class="form-control"  placeholder="Tổ, thôn...." required ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><img src="chuc_nang/dang_ky_dang_nhap/captcha.php" alt=""></td>
            </tr>
            <tr style="border-bottom: 3px solid black;">
                <td><label for="captcha">Nhập mã ký tự: </label></td>
                <td><input type="text" class="form-control" name="value" id="captcha" placeholder="Nhập ký tự bạn thấy trong hình.."></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" class="btn btn-primary" name="submit" value="Đăng ký"></td></form>
                <td align="center"><form action="?menu=exec_dang_ky" action="post"><input type="submit" class="btn btn-primary" name="cancel" value="Hủy"></form></td>                 
            </tr>
            
        </table>
    </form>
    <p>Bằng cách ấn vào nút “Đăng ký”, tôi đồng ý với <a href="#" style="color: red;">Điều Khoản Sử Dụng</a> và <a href="?menu=chinh_sach_bao_mat" style="color: red;">Chính Sách Bảo Mật</a> của T&T SHOP.</p>
</div>
