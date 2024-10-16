<?php 
    include_once "../inc/header.php";
?>
    <main class="detail-book">
        <!-- Chi tiết sản phẩm -->
        <div class="container">
            <div class="detail-book-content b-shadow">
                <div class="book-title row">
                    <div class="image-book col-4">
                        <img src="../asset/img/example-book6.jpg" alt="">
                    </div>
                    <div class="title-book col-8">
                        <div class="title">
                            <h3>
                                Giáo trình Triết học Mác – Lênin (Dành cho bậc đại học hệ không chuyên lý luận chính trị)
                            </h3>
                        </div>
                        <div class="price-text">
                            <span class="price">70,000</span>đ
                        </div>
                        <div class="add-to-cart">
                            <button type="button" class="btn add-to-cart-btn" id="liveToastBtn">
                                <i class="fa-thin fa-cart-plus"></i>
                                <span>
                                    Thêm vào giỏ hàng
                                </span>
                            </button>
                            <!-- toast message -->
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <span><i class="fa-light fa-square-check text-success"></i></span>
                                    <strong class="me-auto">Thông báo</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Thêm sách vào giỏ hàng thành công!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book-description">
                    <h5>Giới thiệu sách</h5>
                    <div class="book-description-content">
                        <p>
                            Giáo trình do Ban biên soạn gồm các tác giả là nhà nghiên cứu, nhà giáo dục thuộc Viện Triết học – Học viện Chính trị quốc gia Hồ Chí Minh, các học viện, trường đại học, Viện Triết học – Viện Hàn lâm Khoa học xã hội Việt Nam,… tổ chức biên soạn trên cơ sở kế thừa những kết quả nghiên cứu trước đây, đồng thời bổ sung nhiều nội dung, kiến thức, kết quả nghiên cứu mới, gắn với công cuộc đổi mới ở Việt Nam, nhất là những thành tựu trong 35 năm đổi mới đất nước.
                        </p>
                    </div>
                </div>
                <div class="book-details">
                    <h5>Thông tin chi tiết</h5>
                    <div class="book-details-content">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Thể loại</td>
                                    <td><span class="category">Giáo trình</span></td>
                                </tr>
                                <tr>
                                    <td>Tác giả</td>
                                    <td><span class="author">Nhà xuất bản Chính trị quốc gia Sự thật</span></td>
                                </tr>
                                <tr>
                                    <td>NXB</td>
                                    <td><span class="nxb">Nhà xuất bản Chính trị quốc gia Sự thật</span></td>
                                </tr>
                                <tr>
                                    <td>Năm xuất bản</td>
                                    <td><span class="nhaxb">2021</span></td>
                                </tr>
                                <tr>
                                    <td>Giá bìa</td>
                                    <td><span class="price">70,000</span>đ</td>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php 
        include_once "../inc/footer.php"
    ?>
