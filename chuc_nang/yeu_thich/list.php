<?php
if (isset($_SESSION['yeuthichs'])) {
    if (count($_SESSION['yeuthich']) == 0) {
        unset($_SESSION['yeuthich']);
        ?>
        <p class="alert alert-warning">Giỏ hàng bạn trống.. Bấm <a href="?menu=san_pham">vào đây</a> để chọn và mua hàng</p>
        <?php
    } else {
        if (isset($_POST['submit'])) {
            foreach ($_POST['sl_sp'] as $masp => $sp)
                if ($sp == 0 and ( is_numberic($sp))) {
                    unset($_SESSION['yeuthich'][$masp]);
                } else {
                    $_SESSION['yeuthich'][$masp] = $sp;
                }
            echo "<script> alert('Cập nhật danh sách yêu thích thành công'); </script>";
        }
        ?>
        <script type="text/javascript">

            $(document).ready(function () {
                document.title = 'Yêu thích (<?php echo $cart; ?>)';
            });
        </script>
        <style>
            #carousel-id{
                display: none;
            }
        </style>
        <div style="width: 90%; margin-left: 5%; padding: 8px;">
            <div class="cart">
                <form method="post">
                    <table class="table">
                        <tr style="font-weight: bold;">
                            <td>Sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Xóa sản phẩm</td>
                        </tr>
                        <?php
                        foreach ($_SESSION['yeuthich'] as $masp => $sp) {
                            $id_array[] = $masp;
                        }
                        $list_id = implode(',', $id_array);
                        include('connect.php');
                        $sl = 'select * from san_pham where masp in (' . $list_id . ')';
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_array($exec)) {
                            ?>
                            <tr>
                                <td><img style="width: 100px;" src="images/<?php echo $row['img']; ?>" alt=""><?php echo $row['tensp'] ?></td>
                                <td><p style="margin-top: 30px;"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></p></td>
                                <td>
                                    <a href="?menu=del_list&masp=<?php echo $row['masp']; ?>">
                                        <span class="glyphicon glyphicon-trash" style="color: palevioletred; margin-top: 33px; margin-left: 33px;"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                           
                        }
                        ?>				
                    </table>
                </form>
                <table class="table">
                    <tr>
                        <td colspan="5" align="center"><a href="?menu=del_cart&masp=0">Xóa toàn danh sách yêu thích</a></td>
                    </tr>
                </table>
                <?php
            }
        } elseif (!isset($_SESSION['yeuthich'])) {
            ?>
            <p class="alert alert-warning">Danh sách yêu thích trống.</p>
            <?php
        }
        ?>
    </div>
</div>