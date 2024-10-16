<?php include 'inc/header.php'; ?>
<body>
    <div class="container pt-5">
        <!-- Page title -->
        <div class="row">
            <h1 class="page-title">QUẢN LÝ DANH MỤC</h1>
        </div>
        <!-- ... -->
        <!-- Page control -->
        <div class="row d-flex justify-content-between">
            <div class="col-auto">
                <button class="btn btn-control" 
                        type="button" 
                        onclick="openModal('add')"
                        data-bs-toggle="modal" 
                        data-bs-target="#categoryModal"
                >
                    <i class="fa-regular fa-plus me-2"></i>
                    Thêm danh mục
                </button>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="text" 
                            class="form-control" 
                            placeholder="Nhập id, tên danh mục" 
                            aria-label="Tìm kiếm danh mục" 
                            aria-describedby="search-bar"
                    >
                    <button class="btn btn-outline-custom" type="button" id="search-btn">Tìm</button>
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
                            <th scope="col">Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Văn học Việt Nam</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#categoryModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sách Giáo Khoa</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-secondary p-2">Bị hủy</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#categoryModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Văn học nước ngoài</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#categoryModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tử Kim Trần</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-secondary p-2">Bị khóa</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#categoryModal"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Đời sống</td>
                            <td>
                                <span class="bagde rounded-2 text-white bg-success p-2">Hoạt động</span>
                            </td>
                            <td>
                                <button class="btn fs-5"
                                        onclick="openModal('edit')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#categoryModal"
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
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-success" id="categoryModalLabel">Thêm danh mục</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" id="categoryForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="category-name" class="col-form-label col-sm-4">Tên danh mục</label>
                            <div class="col">
                                <input type="text" name="category-name" class="form-control" id="category-name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="saveModalBtn" class="btn btn-success">Thêm danh mục</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ... -->

    <!-- Link JS ở chỗ này nè!!! -->
    <script src="./asset/js/ql-danh-muc.js"></script>
</body>
</html>