

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
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="<?php echo $getNameShopById['img_shop'] ?>">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary text-white">
                    <li class="p-2">
                        <div class="font-medium"><?php echo $getNameShopById['name_user'] ?></div>
                        <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Chủ <?php echo $getNameShopById['name_shop'] ?></div>
                    </li>
                 
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                                <a href="index.php?url=backhome" class="dropdown-item hover:bg-white/5"> <i data-lucide="arrow-right"
                                        class="w-4 h-4 mr-2"></i> Home </a>
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
                <button class="btn btn-primary shadow-md mr-2">Thêm sản phẩm</button>
            </a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i>
                                Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
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
                    <!-- <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-15.jpg">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Áo thun</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">mô tả sản phẩm</div>
                        </td>
                        <td class="text-center">50</td>
                        <td class="text-center">10.000 đ</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Hết hàng </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="index.php?url=product&act=updateProduct&id_product="> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Sửa </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Xóa </a>
                            </div>
                        </td>
                    </tr> -->

                    <?php

                    foreach ($getAllProducts as $row) {
                        $status = '';
                        if ($row['status'] == 0) {
                            $status = "<div class='flex items-center justify-center text-success'> <i
                            data-lucide='check-square' class='w-4 h-4 mr-2'></i>Còn hàng</div>";
                        } else {
                            $status = "<div class='flex items-center justify-center text-danger'> <i
                            data-lucide='check-square' class='w-4 h-4 mr-2'></i>Hết hàng</div>";
                        }
                        $view = "<tr class='intro-x'>
                        <td class='w-40'>
                            <div class='flex'>
                                <div class='w-10 h-10 image-fit zoom-in'>
                                    <img alt='Midone - HTML Admin Template' class='tooltip rounded-full'
                                        src='$row[img_product]' title='Uploaded at $row[create_at]'>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href=' class='font-medium whitespace-nowrap'>$row[name_product]</a>
                            <div class='text-slate-500 text-xs whitespace-nowrap mt-0.5'>
                            </div>
                        </td>
                        <td class='text-center'>$row[amount_product]</td>
                        <td class='text-center'>$row[price_product] đ</td>
                        <td class='w-40'>
                            $status
                        </td>
                        <td class='table-report__action w-56'>
                            <div class='flex justify-center items-center'>
                                <a class='flex items-center mr-3' href='index.php?url=updateProduct&id_product=$row[id_product]'> <i
                                        data-lucide='check-square' class='w-4 h-4 mr-1'></i> Sửa </a>
                                <a class='flex items-center text-danger' href='index.php?url=product&act=deleteProduct&id_product=$row[id_product]'
                                    data-tw-toggle='modal' data-tw-target='#delete-confirmation-modal'> <i
                                        data-lucide='trash-2' class='w-4 h-4 mr-1'></i> Xóa </a>
                            </div>
                        </td>
                    </tr>";
                        echo $view;
                    }

                    ?>


                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
    
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Bạn có chắc chắn xóa sản phẩm này?</div>
                        <div class="text-slate-500 mt-2">
                            Bạn có thực sự muốn xóa các bản ghi này không?
                            <br>
                            Không thể hoàn tác quá trình này.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Không</button>
                        <button type="button" class="btn btn-danger w-24">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
<!-- END: Content -->