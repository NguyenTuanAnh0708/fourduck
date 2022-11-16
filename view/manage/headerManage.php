<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.png" rel="shortcut icon">
    <title>Quản Lý Shop</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="./view/manage/dist/css/app.css" />
    <!-- END: CSS Assets-->
    <style>
        .w-6 {
            width: 5.5rem;
        }
    </style>
</head>
<!-- END: Head -->

<body class="py-5">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-6" src="./view/manage/dist/images/logo.png">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>

                    <a href="index.php" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">
                            Trang chủ
                        </div>
                    </a>

                    <ul class="menu__sub-open">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                                <div class="menu__title"> Thương mại <i data-lucide="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="add_product.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="plus-circle"></i> </div>
                                        <div class="menu__title"> Thêm sản phẩm </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="product.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="shopping-cart"></i> </div>
                                        <div class="menu__title"> Sản phẩm </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hoadon.html" class="menu menu--active">
                                        <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                                        <div class="menu__title"> Hóa đơn </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.png">
                <span class="hidden xl:block text-white text-lg ml-3"> FourDuck</span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="index.php" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">
                            Trang chủ
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">

                        <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                        <div class="side-menu__title">
                            Thương mại
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.php?url=add_product" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="plus-circle"></i> </div>
                                <div class="side-menu__title"> Thêm sản phẩm </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?url=product" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="shopping-cart"></i> </div>
                                <div class="side-menu__title"> Sản phẩm </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?url=hoadon" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                                <div class="side-menu__title"> Hóa đơn </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->