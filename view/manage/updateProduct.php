<div class="content">
    <form action="index.php?url=product&act=updateProduct&id_product=<?= $dataProductId['id_product'] ?>" method="POST" enctype="multipart/form-data">
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Chỉnh sửa sản phẩm</a></li>
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
                                <a href="index.php?url=backhome" class="dropdown-item hover:bg-white/5"> <i data-lucide="arrow-right"
                                        class="w-4 h-4 mr-2"></i> Home </a>
                            </li>
                        <li>
                            <a href="index.php?url=logout" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Đăng xuất </a>
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
            <div class="intro-y col-span-11 2xl:col-span-9">
                <!-- BEGIN: Uplaod Product -->
                <div class="intro-y box p-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Chỉnh sửa ảnh sản phẩm
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
                                            <div>kích thước ảnh là bao nhiêu đó.</div>
                                            <div class="mt-2">tối đa bao nhiêu ảnh.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                    <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                                        <div class="col-span-5 md:col-span-2 h-28 relative image-fit cursor-pointer zoom-in">
                                            
                                            <!-- <img class="rounded-md" alt="Midone - HTML Admin Template" src="dist/images/preview-5.jpg"> -->
                                            <div id="selectedBanner" style="width: 100%; height:100%;"></div>
                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- file ảnh -->
                                    <div class="px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                        <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span>
                                        <input type="file" name="img_product" id="img_product">
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
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Chỉnh sửa thông tin sản phẩm
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
                                    <input id="product-name" name="name_product" type="text" class="form-control" placeholder="Product name">
                                    <div class="form-help text-right">Maximum character 0/70</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- LOẠI SẢN PHẨM  -->
                <!-- <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Thêm loại sản phẩm
                        </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Tên loại sản phẩm</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                                Yêu cầu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                   <select name="get_category" id="">
                                       <?php 
                                            foreach($getAllDataCategory as $value) {
                                               $data = "<option value='$value[id_category]'>$value[name_category]</option>";
                                               echo $data;
                                            }
                                       ?>
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- END: Product Information -->
                <!-- BEGIN: Product Detail -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Chỉnh sửa chi tiết sản phẩm
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
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="editor">
                                        <textarea name="description_product" id="" cols="60" rows="4"><?= $dataProductId['description_product'] ?>"</textarea>
                                    </div>
                                    <div class="form-help text-right">Maximum character 0/2000</div>
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
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i>  Chỉnh sửa quản lý sản phẩm
                        </div>
                        <div class="mt-5">
                        

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
                                    <input id="product-stock" value="<?= $dataProductId['amount_product'] ?>" name="amount_product" type="text" class="form-control" placeholder="Số lượng hàng">
                                </div>
                            </div>

                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Giá sản phẩm</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                                Yêu cầu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-stock" type="text" value="<?= $dataProductId['price_product'] ?>"" name="price_product" class="form-control" placeholder="Giá sản phẩm">
                                </div>
                            </div>

                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Nhập số giảm giá theo %</div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-stock" type="text" value="<?= $dataProductId['sale'] ?>" name="sale_product" class="form-control" placeholder="Giá sản phẩm">
                                </div>
                            </div>

                    
                        </div>
                    </div>
                </div>
                <!-- END: Product Management -->
                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</button>
                    <input type="submit"  class="btn py-3 btn-primary w-full md:w-52" name="updateProduct" value="Sửa">
                </div>
            </div>
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
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/captcha/jquery.clientsidecaptcha.js" type="text/javascript"></script>

<script>
    var selDiv = "";
    var storedFiles = [];
    $(document).ready(function() {
        $("#img_product").on("change", handleFileSelect);
        selDiv = $("#selectedBanner");
    });

    function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function(f) {
            if (!f.type.match("image.*")) {
                return;
            }
            storedFiles.push(f);

            var reader = new FileReader();
            reader.onload = function(e) {
                var html =
                    '<img style="height:100%;" src="' +
                    e.target.result +
                    "\" data-file='" +
                    f.name +
                    "' class='avatar rounded lg' alt='Category Image' height='100%' width='100%'> ";
                selDiv.html(html);
            };
            reader.readAsDataURL(f);
        });
    }

    // form checkbox only one
    // form checked
    let checkProduct = $('.form-check-input');
    
   $('.form-check-input').on('change', function() {
        $('.form-check-input').not(this).prop('checked', false);
    })
</script>