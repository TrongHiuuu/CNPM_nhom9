<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="./asset/img/favicon.png" type="image/x-icon">
    
    <!-- Font awesome cnd -->
    <link href="https://cdn.jsdelivr.net/gh/HuongLamCoder/font-awesome-pro-6.5.2/fontawesome-pro-6.5.2-web/css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Link CSS ở đây nè!!! -->
    <link rel="stylesheet" href="./asset/admin.css">

    <title>Vinabook - Trang quản trị</title>
</head>
<body>
    <!-- Content -->
    <div class="container pt-5">
        <!-- Page title -->
        <div class="row">
            <h1 class="page-title">QUẢN LÝ TÀI KHOẢN</h1>
        </div>
        <!-- ... -->
        <!-- Page control -->
        <div class="row d-flex justify-content-between">
            <div class="col-auto">
                <button class="btn btn-control" 
                        type="button" 
                        onclick="openModal('add')"
                        data-bs-toggle="modal" 
                        data-bs-target="#accountModal"
                >
                    <i class="fa-regular fa-plus me-2"></i>
                    Thêm tài khoản
                </button>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-6">
                        <div class="input-group">
                            <input type="text" 
                                    class="form-control" 
                                    placeholder="Nhập id, tên tài khoản" 
                                    aria-label="Tìm kiếm tài khoản" 
                                    aria-describedby="search-bar"
                            >
                            <button class="btn btn-outline-custom" type="button" id="search-btn">Tìm</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <select id="status-select" class="form-select">
                                <option selected>Tất cả nhóm quyền</option>
                                <option value="1">Nhân viên bán hàng</option>
                                <option value="2">Nhân viên nhập kho</option>
                                <option value="3">Nhân viên quản lý mã giảm giá</option>
                                <option value="4">Kế toán</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <select id="status-select" class="form-select">
                                <option selected>Tất cả trạng thái</option>
                                <option value="0">Bị khóa</option>
                                <option value="1">Đang hoạt động</option>
                            </select> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-control">Làm mới</button>
            </div>
        </div>
        <!-- ... -->
        <!-- Table data -->
        <div class="row mt-5">
            <div class="col">
                <table class="table table-bordered text-center table-hover align-middle border-success">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">Mã tài khoản</th>
                            <th>Tên tài khoản</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Phân quyền</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>HuongLamCoder</td>
                            <td>huonglamcoder@gmail.com</td>
                            <td>0123456789</td>
                            <td>Nhân viên rảnh rỗi</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#accountModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Iu Màu Hồng Ghét Giả Dối</td>
                            <td>ilovepink@gmail.com</td>
                            <td>0999999999</td>
                            <td>Quản lý nhà cung cấp</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-secondary p-2">Bị khóa</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#accountModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Siêu Nhân Điện Quang</td>
                            <td>dienquang.hero@gmail.com</td>
                            <td>0113113113</td>
                            <td>Quản lý tác giả</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#accountModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Khó Chịu Vô Cùng</td>
                            <td>thaymatuk@gmail.com</td>
                            <td>0111111111</td>
                            <td>Nhân viên nhập sách</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-secondary p-2">Bị ẩn</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#accountModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ghét PHP</td>
                            <td>ghetluonjavascript@gmail.com</td>
                            <td>0101010101</td>
                            <td>Nhân viên bán hàng</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#accountModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ... -->
        <!-- Pagination -->
        <div class="row mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Trước</a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link text-dark" href="#">Sau</a>
                    </li>
                </ul>
                </nav>
        </div>
        <!-- ... -->
    </div>
    <!-- ... -->

    <!-- Modal -->
    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-success" id="accountModalLabel">Thêm tài khoản</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" id="accountForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="username" class="form-label">Họ và tên</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nhập họ và tên">
                        </div>
                        <div class="mb-3">
                            <label for="usermail" class="form-label">Email</label>
                            <input type="email" name="usermail" id="usermail" class="form-control" placeholder="Nhập địa chỉ email">
                        </div>
                        <div class="mb-3 add">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-3">
                            <label for="userphone" class="form-label">Số điện thoại</label>
                            <input type="tel" name="userphone" id="userphone" class="form-control" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="row mb-3">
                            <label for="userrole" class="col-form-label col-sm-3">Nhóm quyền</label>
                            <div class="col">
                                <select name="role-select" id="role-select" class="form-select">
                                    <option selected="selected">Chọn nhóm quyền</option>
                                    <option value="1">Nhân viên bán hàng</option>
                                    <option value="2">Nhân viên nhập kho</option>
                                    <option value="3">Nhân viên quản lý mã giảm giá</option>
                                    <option value="4">Kế toán</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center edit">
                            <label class="col-form-label col-sm-3">Trạng thái</label>
                            <div class="col form-check form-switch ps-5">
                                <input  type="checkbox" 
                                        name="userstatus" 
                                        id="userstatus" 
                                        class="form-check-input" 
                                        role="switch" 
                                        checked
                                        onchange="document.getElementById('switch-label').textContent = this.checked ? 'Đang hoạt động' : 'Bị khóa';"
                                >
                                <label for="userstatus" class="form-check-label" id="switch-label">Đang hoạt động</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-success" id="modalSaveBtn">Thêm tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ... -->

    <!-- Link JS ở chỗ này nè!!! -->
    <script src="./asset/js/ql-tai-khoan.js"></script>
</body>
</html>