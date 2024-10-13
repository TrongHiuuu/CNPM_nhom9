<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  // Import connectDB
  include_once('model/connect.php');
  // Header
  require_once("inc/header.php");
  // Content
  if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];
    //Main page
    switch ($page) {
      case 'trang_chu':
        require_once('view/trangChu.php');
        break;
      case 'dang_nhap':
        require_once('view/dangNhap.php');
        break;
      case 'dang_ky':
        require_once('view/dangKy.php');
        break;
      case 'quen_mat_khau':
        break;
      case 'gio_hang':
        break;
    }
  } else {
    // Trang chủ
    require_once('view/trangChu.php');
  }
  // Footer
  require_once("inc/footer.php");

