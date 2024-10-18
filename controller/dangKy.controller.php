<?php
    //Include model
    include_once('model/dangKy.model.php');
    session_start();
    if (isset($_POST['dangKy_tenTK']) &&
        isset($_POST['dangKy_email']) &&
        isset($_POST['dangKy_dienthoai']) &&
        isset($_POST['dangKy_matkhau']) &&
        isset($_POST['dangKy_xac_nhan_matkhau'])) {
            $tenTK = $_POST['dangKy_tenTK'];
            $email = $_POST['dangKy_email'];
            $dienthoai = $_POST['dangKy_dienthoai'];
            $matkhau = $_POST['dangKy_matkhau'];
            $registerResult = dangKyTaiKhoan($tenTK, $email, $dienthoai, $matkhau);
            echo json_encode($registerResult);
    }
?>