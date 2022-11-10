<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Loại</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin.html">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <a href="index.php?url=formcategory">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Thêm Loại Mới</button>
                </div>
            </a>


            <br>
            <table class="table table-collapse table-category">
                <tr>
                    <td class="col-md-3">STT</td>
                    <td class="col-md-3">Mã Loại</td>
                    <td class="col-md-3">Loại sp</td>
                    <td class="col-md-3">Hình ảnh</td>
                    <td class="col-md-3">Tùy chọn</td>
                </tr>
                <?php
                $i = 0;
                foreach ($dataCategory as $row) {
                    $view = "
                    <tr'>
                    <td>1</td>
                    <td>$row[id_category]</td>
                    <td>$row[name_category]</td>
                    <td  style='width:100%'><img style='width:50%;' src='$row[img_category]' alt='$row[name_category]'></td>
                    <td>
                    <a class='sua' href='index.php?url=category&act=edit&id_category=$row[id_category]'>Sửa</a> |
                    <a class='xoa' href='index.php?url=category&act=del&id_category=$row[id_category]'>Xóa</a>
                </td>
                    </tr>
                    ";
                    echo $view;
                    $i++;
                }
                ?>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>