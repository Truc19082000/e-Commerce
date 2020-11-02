<?php

if (!isset($login)) {
    exit();
}
?>
<?php
if (isset($_POST['submit'])) {
    include('../connect.php');
        $id = $_POST['id'];
        $chi_tiet = $_POST['chi_tiet'];
        $chi_tiet = nl2br($chi_tiet, FALSE);
        $sl = "insert into chinh_sach_bao_mat(id,chi_tiet) values( '".$id."','".$chi_tiet."') ";
        $exec = mysqli_query($connect, $sl);
        if ($exec) {
            echo "<script> alert('Thêm chính sách bảo mật thành công'); location.href='?menu=ql_csbm'; </script>";
        } else {
            echo $sl;
        }
    }

if (isset($_POST['cancel'])) {
    header('location:index.php?menu=ql_csbm');
}
?>