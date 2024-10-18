<?php
    //Include model
    include_once('model/dangNhap.model.php');
    session_start();

    // Kiểm tra nếu có dữ liệu được gửi từ Ajax
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Kiểm tra thông tin đăng nhập
        $loginResult = kiemTraDangNhap($email, $password);
        if ($loginResult->success) {
            $_SESSION['email'] = $user;
        }
        echo json_encode(value: $loginResult);
    }
?>