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
                    <h1 class="m-0">Doanh thu <span class="monthTurnover">tất cả các tháng</span></h1>
                    <p>Chi tiết doanh thu</p>
                    <select onchange="checkDate(this.value)">
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select>
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
            <table class="table table-collapse text-center dataTurnover">
                <br>
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Mã hoá đơn</td>
                        <td>Chủ sở hửu</td>
                        <td>Shop</td>
                        <td>Tháng dăng ký</td>
                        <td>Số tiền phải trả cho thời gian thuê</td>
                        <td>Thời gian tạo</td>
                    </tr>
                </thead>
                <?php
                $total = 0;
                foreach ($dataBillShop as $row) {
                    $total += $row['price'];
                    $view = "
                    <tr>
                    <td>1</td>
                    <td>$row[id_bill]</td>
                    <td>$row[id_user]</td>
                    <td>$row[id_shop]</td>
                    <td><mark>$row[extension_time] tháng</mark></td>
                    <td>$row[price]</td>
                    <td>$row[create_at]</td>
                    </tr>
                    ";
                    echo $view;
                }
                ?>
                <tr class="bg-blue">
                    <td colspan=3></td>
                    <td colspan=4>Doanh thu tháng này:<mark><?= $total ?>đ</mark></td>
                </tr>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>