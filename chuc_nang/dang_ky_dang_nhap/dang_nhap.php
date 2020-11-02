<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Đăng nhập';
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
<div style="background-color: whitesmoke; height: 50px;"><h3 style="padding-left: 5em; padding-top: 1em; color: black;">Chào mừng đến T&T SHOP. Đăng nhập ngay nào!</h3></div>
<div style="width: 70%; margin-left: 15%; padding: 8px; background-color: whitesmoke;">
    <br><div class="panel-heading"><h3 style="text-align: center; font-family: Comic Sans MS; color: black;">Đăng nhập</h3></div>
    <form action="?menu=exec_dang_nhap" method="post">
        <table class="table">
            <tr>
                <td style="text-align: right;"><label for="user">Tên đăng nhập: </label></td>
                <td><input  class="form-control" type="text" name="username" id="user" placeholder="Nhập tên đăng nhập.." required ></td>
            </tr>
            <tr>
                <td style="text-align: right;"><label for="pass">Mật khẩu:</label></td>
                <td><input  class="form-control" type="password" name="password" id="pass" placeholder="Nhập mật khẩu.." required ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">Bạn chưa có tài khoản? Hãy bấm vào <a href="?menu=dang_ky" style="color: red;">đây</a> để đăng ký ngay.</td>
            </tr>
        </table>
    </form>
</div>