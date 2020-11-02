<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                    <?php
                    include('connect.php');
                    $sl = "select * from menu_ngang";
                    $exec = mysqli_query($connect, $sl);
                    while ($row = mysqli_fetch_array($exec)) {
                        ?>
                    <li><a href="?menu=<?php echo $row['loaimenu']; ?>"><?php echo $row['title']; ?></a></li>
                <?php } ?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->