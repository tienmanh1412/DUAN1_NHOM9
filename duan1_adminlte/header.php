<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- đăng xuất -->
            <div class="col-lg-1 exit">
                    <a href="index.php?act=thoat"><button type="submit">Đăng Xuất</button></a>
                </div>
            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php?act=" class="brand-link">
                <img src="../img/logo_new.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dự Án 1</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../img/register.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Nhóm 9</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php?act=" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Trang Chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=list_danhmuc" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Danh Mục
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=listsp" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Sản Phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=dskh" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Tài Khoản
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=dsbl" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Bình Luận
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=donhang" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                            <p>
                                Đơn Hàng
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="index.php?act=dslh" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                            <p>
                                Liên Hệ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="index.php?act=dskm" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                            <p>
                                Khuyến Mãi
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
