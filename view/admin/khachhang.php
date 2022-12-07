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
                    <h1 class="m-0">Quản Lý Khách Hàng</h1>
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
            <br>
            <table class="table table-collapse">
                <br>
                <tr>
                    <td>Stt</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Phone</td>
                    <td>Quyền</td>
                    <td>Xoá</td>
                </tr>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($dataUser as $row) {
                        $role = 'Người mua';
                        if ($row['role'] == 0) {
                            $role = 'Người quản trị';
                        } else if ($row['role'] == 1) {
                            $role = 'Người bán';
                        }
                        $view = "<tr>
                        <td>$i</td>
                        <td>$row[gmail]</td>
                        <td>$row[password]</td>
                        <td>$row[phone]</td>
                        <td>$role</td>
                        <td><a class=xoa href=index.php?url=clienMange&act=del&id_user=$row[id_user]>Xóa</a></td>
                        </tr>";
                        echo $view;
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>