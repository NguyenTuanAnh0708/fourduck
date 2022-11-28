<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Bản điều khiển</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<style>
    html {
        font-size: 85% !important;
    }

    .table-category td {
        height: 30px;
        text-align: center;
        line-height: 40px;
    }

    .end {
        font-weight: bold;
        color: red;
    }

    .start {
        font-weight: bold;
        color: green;
    }

    .disable {
        opacity: 0.5;
        pointer-events: none;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php?url=logout" class="nav-link">Đăng xuất</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Huỳnh Ngọc Tài</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">ADMIN</li>
                        <!-- <ul class="nav nav-treeview"> -->
                        <li class="nav-item">
                            <a href="index.php?url=category" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?url=clienMange" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý khách hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?url=comment_user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý comment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?url=shop" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý gian hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?url=turnover" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doanh thu fourduck</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?url=request" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Yêu cầu của khách hàng</p>
                            </a>
                        </li>
                        <!-- </ul> -->

                        <li class="nav-item">
                            <a href="index.php?url=event" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Event</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>