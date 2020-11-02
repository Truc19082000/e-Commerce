<div class="card">
    
        <table class="table table-bordered" style="width: 100%;">  
            <thead>
                <tr>
                    <th>Mã hóa đơn</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày mua</th>
                    <th>Xử lý</th>
                    <th>Chi tiết đơn hàng</th>
                    <th>Hủy đơn hàng</th>
                </tr>
            </thead>
            <?php
            include('connect.php');
            $sl = "select * from hoa_don where tenkh='Pham Van Truc'";      
            $exec = mysqli_query($connect, $sl);
            while ($row = mysqli_fetch_array($exec)) {
                ?>
                <tbody id="myTable">
                    <tr>
                        <td><?php echo $row['ma_hoadon']; ?></td>
                        <td><?php echo $row['tenkh']; ?></td>    
                        <td><?php echo $row['ngay_mua']; ?></td>
                        <td><?php echo $row['xu_ly']; ?></td>
                        <td style="text-align: center;"><a style=" color: blue;" href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xem</a></td>   
                        <td style="text-align: center;"><a style=" color: red;"  onclick="return confirm('Bạn có muốn hủy đơn hàng?');" href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Hủy</a></td>
                    </tr>    
                </tbody>
            <?php } ?>
        </table>

</div>

