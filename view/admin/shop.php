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
                    <td>Chủ sở hửu</td>
                    <td>Ngày đăng ký gần đây</td>
                    <td>Ngày kết thúc</td>
                    <td>Trạng thái</td>
                    <td>Số tiền phải trả cho thời gian thuê</td>
                    <td colspan=2>Hành động</td>
                </tr>
                <?php
                if (count($dataShop) > 0) {
                    $i = 0;
                    $total = 0;
                    foreach ($dataShop as $row) {
                        $total += $row['near_price'];
                        $status = "Không còn hoạt động";
                        $class = "end";
                        $classEdit = "";
                        if ($row['status'] == 0) {
                            $status = "Đang hoạt động";
                            $class = "start";
                            $classEdit = "disable";
                        }
                        $dateStart = date("d-m-Y", strtotime($row['create_shop']));
                        $dateEnd = date("d-m-Y", strtotime($row['end_shop']));
                        $view = "<tr>
                            <td>$i</td>
                            <td>$row[name_shop]</td>
                            <td>$row[name_user]</td>
                            <td>$dateStart</td>
                            <td><mark>$dateEnd</mark></td>
                            <td class=$class>$status</td>
                            <td>$row[near_price]đ</td>
                            <td><a href=index.php?url=editShop&id_shop=$row[id_shop] class=$classEdit>Gia hạn thêm</a></td>
                            <td><a href=index.php?url=infoShop&id_shop=$row[id_shop]>Chi tiết</a></td>
                            </tr>";
                        echo $view;
                        $i++;
                    }
                } else {
                    echo "
                    <tr>
                    <td colspan=9>Không có shop nào được đăng ký</td>
                    </tr>
                    ";
                }
                ?>
            </table>

        </div>
    </section>
    <!-- /.content -->
</div>