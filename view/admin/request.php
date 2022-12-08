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
                    <h1 class="m-0">Yêu cầu của khách hàng gửi đến admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <br>
            <table class="table table-collapse text-center">
                <br>
                <tr>
                    <td>STT</td>
                    <td>Tên shop</td>
                    <td>Chủ sở hửu gửi yêu cầu</td>
                    <td>Tháng dăng ký</td>
                    <td>Số tiền phải trả cho thời gian thuê</td>
                    <td colspan="2">Hành động</td>
                </tr>
                <?php
                foreach ($dataRequest as $row) {
                    $view = "
                    <tr>
                    <td>1</td>
                    <td>$row[id_shop]</td>
                    <td>$row[id_user]</td>
                    <td><mark>$row[extension_time] tháng</mark></td>
                    <td>$row[price]</td>
                    <td>
                    <form action=index.php?url=request&act=accept method=post>
                    <input type=hidden value=$row[id_bill] name=id_bill>
                    <input type=hidden value=$row[id_shop] name=id_shop>
                    <input type=hidden value=$row[extension_time] name=extension_time>
                    <input type=hidden value=$row[price] name=price>
                    <button type='submit' class='btn btn-danger'>Chấp nhận</button>
                    </form>
                    </td>
                    <td>
                    <a href=index.php?url=request&act=delete&id=$row[id_bill]><button class='btn btn-danger'>Xoá</button></a>
                    </td>
                    </tr>
                    ";
                    echo $view;
                }
                ?>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>