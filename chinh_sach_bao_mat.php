<style>
    #navigation{
        display: none;
    }
    .hot-deal, #hot-deal{
        display: none;
    }
</style>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Chính sách bảo mật của T&T SHOP.</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <?php
                            include('connect.php');
                            $sl = "select * from chinh_sach_bao_mat";
                            $exec = mysqli_query($connect, $sl);
                            while ($row = mysqli_fetch_array($exec)) {
                                ?>
                                <?php echo $row['chi_tiet']; ?><
                            <?php }?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>