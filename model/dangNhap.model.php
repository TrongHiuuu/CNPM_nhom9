<?php
    include_once('connect.php');
    $database = new connectDB();

    function kiemTraDangNhap($email, $matkhau): object {
        global $database;
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $result = $database->query($sql);

        // Kiểm tra xem có tồn tại không?
        if (mysqli_num_rows(result: $result) > 0) {
            $row = mysqli_fetch_assoc(result: $result);
            $db_matkhau = $row['matkhau'];

            // So sánh mật khẩu nhập vào với mật khẩu trong cơ sở dữ liệu
            if (password_verify(password: $matkhau, hash: $db_matkhau)) {
                $database->close();
                if ($row['trangthai'] == 0) {
                    $reponse = (object) [
                    "success" => false,
                    "status" => $row["trangthai"],
                    "message" => "Tài khoản của bạn đã bị khoá!"
                    ];
                    return $reponse;
                } else {
                    $reponse = (object) [
                    "success" => true,
                    "status" => $row["trangthai"],
                    "message" => "Đăng nhập thành công!"
                    ];
                    return $reponse;
                }
            } else {
                $database->close();
                $reponse = (object) [
                    "success" => false,
                    "message" => "Mật khẩu không chính xác!"
                ];
                return $reponse;
            }
        } else {
            $database->close();
            $reponse = (object) [
                "success" => false,
                "message" => "Hệ thống không tồn tại tài khoản này!"
            ];
            return $reponse;
        }
    }
?>