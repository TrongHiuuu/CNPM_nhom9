<main>
        <!-- Đăng nhập -->
        <div class="container signup">
            <div class="signin-content">
                <div class="signin-content-box b-shadow">
                    <!-- title đăng ký -->
                    <div class="title">
                        <span>Đăng Ký</span>
                    </div>
                    <!-- form điền thông tin tạo tài khoản -->
                    <div class="signin-box">
                        <form action="" class="signin-form" id="dangKy_form" method="POST">
                            <ul>
                                <li class="input-field">
                                    <strong>Họ và tên<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangKy_tenTK" name="tenTK" type="text" placeholder="Nhập họ và tên..."><br>
                                    <span class="error error_message_dangKy_tenTK" id="dangKy_error_tenTK"></span>
                                </li>
                                <li class="input-field">
                                    <strong>Email<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangKy_email" name="email" type="email" placeholder="Nhập email..."><br>
                                    <span class="error error_message_dangKy_email" id="dangKy_error_email"></span>
                                </li>
                                <li class="input-field">
                                    <strong>Số điện thoại<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangKy_dienthoai" name="dienthoai" type="text" placeholder="Nhập số điện thoại..."><br>
                                    <span class="error error_message_dangKy_dienthoai" id="dangKy_error_dienthoai"></span>
                                </li>
                                <li class="input-field">
                                    <strong>Mật khẩu<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangKy_matkhau" name="matkhau" type="password" placeholder="Nhập mật khẩu..."><br>
                                    <span class="error error_message_dangKy_matkhau" id="dangKy_error_matkhau"></span>
                                </li>
                                <li class="input-field">
                                    <strong>Xác nhận mật khẩu<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangKy_xac_nhan_matkhau" name="xac_nhan_matkhau" type="password" placeholder="Nhập xác nhận mật khẩu..."><br>
                                    <span class="error error_message_dangKy_xac_nhan_matkhau" id="dangKy_error_xac_nhan_matkhau"></span>
                                </li>

                            </ul>
                            <div class="submit-btn">
                                <button class="btn btnDangKy" id="dangKy_button">Đăng ký</input>
                            </div>
                        </form>
                        <div class="signin-text">
                            <span>Đã có tài khoản? &nbsp;	<a href="" class="nav-link">Đăng nhập ngay</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script> -->
    <!-- Jquery & Jquery Validation -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/dangKy.js?v=<?php echo time(); ?>"></script>
</body>
</html>