<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản Lý Event</h1>
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
                    <td>SST</td>
                    <td>Tên Event</td>
                    <td>Ảnh Event</td>
                    <td>Người đăng</td>
                    <td>Trạng thái</td>
                    <td style='width:200px'>Tùy chọn</td>
                </tr>
                <tbody>
                    <?php
                    foreach ($dataEvent as $row) {
                        $status = "Đã kết thúc";
                        $class = "end";
                        if ($row['status'] == 0) {
                            $status = "Đang diễn ra";
                            $class = "start";
                        }
                        $row_id_user = $row['id_user'];
                        if ($row_id_user) {
                            $row_id_user = 'Quản trị viên';
                        }
                        $view = "
                        <tr>
                        <td>$row[id_event]</td>
                        <td>$row[name_event]</td>
                        <td  style='width: 40%'><img style='width: 20%' src='$row[img_event]' alt='Ảnh banner'></td>
                        <td>$row_id_user</td>
                        <td class=$class>$status</td>
                        <td>
                        <a class='sua' href='index.php?url=event&act=editEvent&id_event=$row[id_event]'>Sửa</a> |
                        <a class='xoa' href='index.php?url=event&act=delEvent&id_event=$row[id_event]'>Xóa</a>
                    </td>
                        </tr>
                        ";
                        echo $view;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </section>
    <!-- /.content -->
</div>