<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Bàn phím';
    });

</script>
<div class="panel panel-primary" >
    <div style="background-color: #00897b; padding-top: 1em; height: 60px;">
        <div><h3 style="text-align: center; font-family: Comic Sans MS; color: white;">Bàn phím</h3></div>
    </div>
    <div class="panel-body">
        <div class="product">
            <?php
            include('connect.php');
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $start = 1;
            $page = $page - 1;
            $limit = 12;
            $sql = "select * from san_pham where loaisp like 'banphim'";
            $ex = mysqli_query($connect, $sql);
            $total = mysqli_num_rows($ex);
            $total = $total / $limit;
            $total = ceil($total);
            $start = $limit * $page;
            ?>
            <div class="row" style="background-color: white;">
                <?php
                $sl = "select * from san_pham where loaisp like 'banphim' limit " . $start . "," . $limit;
                $exec = mysqli_query($connect, $sl);
                while ($row = mysqli_fetch_array($exec)) {
                    ?>
                    <div class="sp img-thumbnail col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="img img-thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" style="height: 200px;"></a>
                        </div>
                        <div class="title" style="text-align: center; ">
                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
                        </div>
                        <div class="cost" style="text-align: center;">
                            <span><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></span>
                        </div>
                        <div class="buy" style="text-align: center;">
                            <a class="btn btn-primary" style="color: white;" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
                            <a class="btn btn-warning" style="color: white;" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>