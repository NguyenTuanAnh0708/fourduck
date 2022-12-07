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
            <!-- modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Thêm event</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tạo sự kiện mới</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php?url=event&act=add" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
                                <div class=" form-group">
                                    <label for="recipient-name" class="col-form-label">Tên sự kiện</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name_event">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Ảnh miêu tả sự kiện</label>
                                    <input type="file" class="form-control" id="recipient-name" name="file">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Ngày kết thúc</label>
                                    <input type="date" class="form-control" id="recipient-name" name="end_event">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="btnThem" value="Thêm">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
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
                       
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal$row[id_event]'  data-whatever='@mdo'>sửa</button>
                        <div class='modal fade' id='exampleModal$row[id_event]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Tạo sự kiện mới</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <form action='index.php?url=event&act=update' method='POST' enctype='multipart/form-data' enctype='multipart/form-data'>
                                        <div class=' form-group'>
                                                <label for='recipient-name' class='col-form-label'>id_Event</label>
                                                <input type='text' class='form-control' id='recipient-name' name='id_event' value='$row[id_event]' hidden>
                                                <input type='text' class='form-control' id='recipient-name' name='id' value='$row[id_event]' disabled>
                                            </div>
                                            <div class=' form-group'>
                                                <label for='recipient-name' class='col-form-label'>Tên sự kiện</label>
                                                <input type='text' class='form-control' id='recipient-name' name='name_event' value='$row[name_event]'>
                                            </div>
                                            <div class='form-group'>
                                                <label for='recipient-name' class='col-form-label'>Ảnh miêu tả sự kiện</label>
                                                <input type='file' class='form-control' id='recipient-name' name='file' value='$row[img_event]'>
                                            </div>
                                            <div class='form-group'>
                                                <label for='message-text' class='col-form-label'>Ngày kết thúc</label>
                                                <input type='date' class='form-control' id='recipient-name' name='end_event' value='$row[end_event]'>
                                            </div>
            
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                                <input type='submit' class='btn btn-primary' name='btnUpdate' value='Send message'>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a> |
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