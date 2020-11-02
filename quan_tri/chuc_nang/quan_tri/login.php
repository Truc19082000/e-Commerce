<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>

    </head>
    <body>

        <p style="text-align: center;"><img src="../images/logo99.png" style=""></p>
        <p style="color: #5555DF; font-size: 30px; font-family: Georgia; text-align: center;">Đăng nhập quản trị trang T&T SHOP</p>

        <form method="post">
            <table align="center" style="">
                <tr style="height: 60px;">
                    <td><label for="name" style="font-size: 28px;">Username:</label></td>
                    <td><input type="text" name="username" id="name" 
                               style="width: 180px; height: 40px; border-radius: 30px; border: 1px solid black; padding-left: 10px; background-color: whitesmoke;"></td>
                </tr>
                <tr>
                    <td><label for="pass" style="font-size: 28px;">Password:</label></td>
                    <td><input type="password" name="password" id="pass" 
                               style="width: 180px; height: 40px; border-radius: 30px; border: 1px solid black; padding-left: 10px; background-color: whitesmoke;"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="padding-left: 3em;">
                        <input type="submit" value="Login" name="submit" 
                               style="width: 100px; height: 36px; color: white; background-color: #5151E2; border: none; border-radius: 10px; ">
                    </td>
                </tr>
            </table>
        </form>
        <div style="text-align: center; padding-top: 100px;">
            <p style="font-size: 18px; font-weight: bold;">Trang web: <a href="../index.php" style="text-decoration: none; color: blue;">T&T SHOP</a></p>
        </div>
    </body>
</html>