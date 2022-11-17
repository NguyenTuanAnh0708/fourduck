<!-- BEGIN: Content -->
<div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
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
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                                        class="w-4 h-4 mr-2"></i> Tài khoản </a>
                            </li>
                            <li>
                                <a href="index.php?url=add_product" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit"
                                        class="w-4 h-4 mr-2"></i> Thêm sản phẩm mới </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                        class="w-4 h-4 mr-2"></i> Đổi mật khẩu </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle"
                                        class="w-4 h-4 mr-2"></i> Trợ giúp </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right"
                                        class="w-4 h-4 mr-2"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <h2 class="intro-y text-lg font-medium mt-10">
                Danh sách sản phẩm
            </h2>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                    <a href="index.php?url=add_product">
                        <button class="btn btn-primary shadow-md mr-2" name="btnThem">Thêm sản phẩm</button>
                    </a>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                    data-lucide="plus"></i> </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i>
                                        Print </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text"
                                            class="w-4 h-4 mr-2"></i> Export to Excel </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text"
                                            class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                    <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                        <div class="w-56 relative text-slate-500">
                            <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Ảnh sản phẩm</th>
                                <th class="whitespace-nowrap">Tên sản phẩm</th>
                                <th class="text-center whitespace-nowrap">Số Lượng</th>
                                <th class="text-center whitespace-nowrap">Giá bán</th>
                                <th class="text-center whitespace-nowrap">Trạng thái</th>
                                <th class="text-center whitespace-nowrap">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="intro-x">
                            <?php
                            foreach ($dataProduct as $row) {
                                $view = "
                                <tr class='intro-x'>
                                <td class='w-40'>
                                    <div class='flex'>
                                        <div class='w-10 h-10 image-fit zoom-in'>
                                            <img  class='tooltip rounded-full' src='$row[img_product]' title='Uploaded Ngày 16 tháng 11 năm 2022'>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <a href='' class='font-medium whitespace-nowrap'>$row[name_product]</a>
                                    <div class='text-slate-500 text-xs whitespace-nowrap mt-0.5'>$row[description_product]</div>
                                </td>
                                
                                <td class='text-center'>$row[amount_product]</td>

                                <td class='text-center'>$row[price_product] đ</td>

                                <td class='w-40'>
                                    <div class='flex items-center justify-center text-success'> <i
                                            data-lucide='check-square' class='w-4 h-4 mr-2'></i> Còn hàng </div>
                                </td>

                                <td class='table-report__action w-56'>
                                    <div class='flex justify-center items-center'>
                                        <a class='flex items-center mr-3' href='javascript:;'> <i
                                                data-lucide='check-square' class='w-4 h-4 mr-1'></i> Sửa </a>
                                        <a class='flex items-center text-danger' href='index.php?url=product&act=del_product&id_product=$row[id_product]'
                                            data-tw-toggle='modal' data-tw-target='#delete-confirmation-modal'> <i
                                                data-lucide='trash-2' class='w-4 h-4 mr-1'></i> Xóa </a>
                                    </div>
                                </td>

                                </tr>    
                                ";
                                echo $view;
                            }
                            ?>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <!-- END: Data List -->
                <!-- BEGIN: Pagination -->
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                            </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                            </li>
                        </ul>
                    </nav>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <!-- END: Pagination -->
            </div>
            <!-- BEGIN: Delete Confirmation Modal -->
            <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <?php
                            foreach ($dataProduct as $row) {
                                $view = "
                                <div class='p-5 text-center'>
                                <i data-lucide='x-circle' class='w-16 h-16 text-danger mx-auto mt-3'></i>
                                <div class='text-3xl mt-5'>Bạn có chắc chắn xóa sản phẩm này?</div>
                                <div class='text-slate-500 mt-2'>
                                    Bạn có thực sự muốn xóa các bản ghi này không?
                                    <br>
                                    Không thể hoàn tác quá trình này.
                                </div>
                            </div>
                            <div class='px-5 pb-8 text-center'>
                                <button type='button' data-tw-dismiss='modal'
                                    class='btn btn-outline-secondary w-24 mr-1'>Không</button>
                                <button type='button' class='btn btn-danger w-24' href='index.php?url=product&act=del_product&id_product=$row[id_product]'>Xóa</button>
                            </div>
                                ";
                                echo $view;
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Delete Confirmation Modal -->
        </div>
        <!-- END: Content -->