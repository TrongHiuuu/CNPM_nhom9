<?php
    include_once('model/connect.php');
    $database = new connectDB();
    function dangKyTaiKhoan($tenTK, $email, $dienthoai, $matkhau): object {
        global $database;
        // Kiểm tra email có tồn tại hay chưa
        $sqlCheckExistEmail = "SELECT * FROM accounts WHERE email = '$email'";
        $resultCheckExistEmail = $database->query($sqlCheckExistEmail);
        if (mysqli_num_rows($resultCheckExistEmail) > 0) {
            return (object) array(
            'success' => false,
            'existEmail' => true,
            'message' => "Email này đã được đăng ký"
            );
        }
        // Nếu như email chưa tồn tại, thì tạo tài khoản
        $hashedPassword = password_hash($matkhau, algo: PASSWORD_DEFAULT);
        $sqlInsertAccount = "INSERT INTO taikhoan (tenTK, email, dienthoai, matkhau, trangthai, idNQ)
            VALUES ('$tenTK', '$email', '$dienthoai', '$hashedPassword', 1, 1)";

        $resultInsertAccount = $database->execute($sqlInsertAccount);

        // Nếu như insert thành công vào database
        if ($resultInsertAccount) {
            return (object) array(
            'success' => true,
            'message' => "Đăng ký thành công"
            );
        } else {
            return (object) array(
            'success' => false,
            'message' => "Đã xảy ra lỗi khi đăng ký"
            );
        }
    }
?>