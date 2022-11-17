<div class="content">
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="#">Thêm sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary text-white">
                    <li class="p-2">
                        <div class="font-medium">Huỳnh Ngọc Tài</div>
                        <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Chủ Shop FourDuck</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Tài khoản </a>
                    </li>
                    <li>
                        <a href="index.php?url=add_product" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Thêm sản phẩm mới </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Đổi mật khẩu </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Trợ giúp </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Đăng xuất </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Thêm sản phẩm
        </h2>
    </div>
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
        <!-- BEGIN: Notification -->
        <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
            <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
            <span>Thông báo bởi admin fourduck <a href="#" class="underline ml-1" target="blank">Tìm hiểm
                    thêm</a></span>
            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
        </div>
        <!-- BEGIN: Notification -->
        <form class="intro-y col-span-11 2xl:col-span-9" action="index.php?url=product$act=add_product" method="POST">
            <!-- BEGIN: Uplaod Product -->
            <div class="intro-y box p-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Ảnh sản phẩm
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center text-slate-500">
                            <span><i data-lucide="lightbulb" class="w-5 h-5 text-warning"></i></span>
                            <div class="ml-2"> <span class="mr-1">Tránh bán các sản phẩm giả mạo / vi phạm Quyền
                                    sở hữu trí tuệ, để sản phẩm của bạn không bị xóa.</span> <a href="#" class="text-primary font-medium" target="blank">Tìm hiểu thêm</a> </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-10">
                            <div class="form-label w-full xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ảnh sản phẩm</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        <div>kích thước ảnh là bao nhiêu đó bla bla.</div>
                                        <div class="mt-2">tối đa bao nhiêu ảnh bla bla.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="file">
                                    <label class="input-group-text" for="inputGroupFile02">Tải ảnh sản phẩm lên</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Uplaod Product -->
            <!-- BEGIN: Product Information -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Thông tin sản phẩm
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Tên sản phẩm</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Giới hạn bao nhiêu
                                        từ. </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="product-name" type="text" class="form-control" placeholder="tên sản phẩm" name="product_name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Product Information -->
            <!-- BEGIN: Product Detail -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Chi tiết sản phẩm
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="flex flex-col sm:flex-row">
                                    <!-- mô tả -->
                                </div>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Mô tả sản phẩm</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        <div>tối đa bao nhiêu chữ đó bala bala.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Mô tả sản phẩm" id="floatingTextarea2" style="width: 800px" name="product_name"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Product Detail -->
            <!-- BEGIN: Product Management -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Quản lý sản phẩm
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Trạng thái sản phẩm</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Nếu trạng thái
                                        đang hoạt động, sản phẩm của bạn có thể được người mua tiềm năng tìm
                                        kiếm. </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="form-check form-switch">
                                    <input id="product-status-active" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="product-status-active">Còn hàng</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Kho sản phẩm</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="product-stock" type="text" class="form-control" placeholder="Số lượng hàng" name="product_amount">
                            </div>
                        </div>

                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Giá Hiện Tại</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Yêu cầu</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="product-stock" type="text" class="form-control" placeholder="Giá hiện tại" name="product_price">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Product Management -->
            <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                <input type="submit" class="btn btn-primary mb-3" name="btnThem" value="Thêm sản phẩm mới">
            </div>
        </form>
        <div class="intro-y col-span-2 hidden 2xl:block">
            <div class="pt-10 sticky top-0">
                <!-- <ul class="text-slate-500 relative before:content-[''] before:w-[2px] before:bg-slate-200 before:dark:bg-darkmode-600 before:h-full before:absolute before:left-0 before:z-[-1]">
                                    <li class="mb-4 border-l-2 pl-5 border-primary dark:border-primary text-primary font-medium"> <a href="">Upload Product</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Information</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Detail</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Variant</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Variant (Details)</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Management</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Weight & Shipping</a> </li>
                                </ul> -->
                <div class="mt-10 bg-warning/20 dark:bg-darkmode-600 border border-warning dark:border-0 rounded-md relative p-5">
                    <i data-lucide="lightbulb" class="w-12 h-12 text-warning/80 absolute top-0 right-0 mt-5 mr-3"></i>
                    <h2 class="text-lg font-medium">
                        Lời khuyên
                    </h2>
                    <div class="mt-5 font-medium">Huỳnh Ngọc Tài</div>
                    <div class="leading-relaxed text-xs mt-2 text-slate-600 dark:text-slate-500">
                        <div>abcxyz</div>
                        <div class="mt-2">fourduck.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>