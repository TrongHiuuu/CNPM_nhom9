<main>
        <!-- Đăng nhập -->
        <div class="container signin">
            <div class="signin-content">
                <div class="signin-content-box b-shadow">
                    <!-- title đăng nhập -->
                    <div class="title">
                        <span>Đăng Nhập</span>
                    </div>
                    <!-- form điền email, mật khẩu để đăng nhập -->
                    <div class="signin-box">
                        <form action="" class="signin-form" id="dangNhap_form"method="POST">
                            <ul>
                                <li class="input-field">
                                    <strong>Email<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangNhap_email" name="email" type="text" placeholder="Nhập email..."><br>
                                    <span class="error error_message_dangNhap_email" id="dangNhap_error_email"></span>
                                </li>
                                <li>
                                    <strong>Mật khẩu<span class="mandatory-symbol">*</span></strong>
                                    <input class="signin-input" id="dangNhap_matkhau" name="matkhau" type="password" placeholder="Nhập mật khẩu..."><br>
                                    <span class="error error_message_dangNhap_matkhau" id="dangNhap_error_matkhau"></span>
                                </li>
                            </ul>
                            <div class="forgot-password">
                                <a class="nav-link" href="?page=quen_mat_khau"><i>Quên mật khẩu?</i></a>
                            </div>
                            <div class="submit-btn">
                                <button class="btn btnDangNhap">Đăng nhập</button>
                            </div>
                        </form>
                        <div class="signin-text">
                            <span>Chưa có tài khoản? &nbsp;	<a href="?page=dangKy" class="nav-link">Đăng ký ngay</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/dangNhap.js?v=<?php echo time(); ?>"></script>
</body>
</html>
    <?php 
        include_once "../inc/footer.php"
    ?>
