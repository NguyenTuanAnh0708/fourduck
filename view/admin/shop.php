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
                    <h1 class="m-0">Quản lý cửa hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin.html">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <br>
            <table class="table table-collapse">
                <br>
                <tr>
                    <td>STT</td>
                    <td>Tên shop</td>
                    <td>Chủ sở hửu</td>
                    <td>Chuyên bán</td>
                    <td>Số lượng sản phẩm ở shop</td>
                    <td>Hành động</td>
                </tr>
                <?php
                $i = 0;
                foreach ($dataShop as $row) {
                    $amount = $shopC->amountProduct($row['id_shop']);
                    $view = "<tr>
                        <td>$i</td>
                        <td>$row[name_shop]</td>
                        <td>$row[name_user]</td>
                        <td>$row[type_shop]</td>
                        <td>$amount</td>
                        <td><a class=xoa href=>Xóa</a></td>
                        </tr>";
                    echo $view;
                    $i++;
                }
                ?>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>