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
                    <h1 class="m-0">Quản Lý Comment</h1>
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
                <tr>
                    <td class="col-md-3">Stt</td>
                    <td class="col-md-3">Tên user</td>
                    <td class="col-md-3">Id_shop được comment</td>
                    <td class="col-md-3">Comment</td>
                    <td class="col-md-3">Tuỳ chọn</td>
                    
                </tr>
                <?php
                $i = 0;
                foreach ($data as $row) {
                    $nameShop = $shopC -> getNameShop($row['id_shop']);
                   
                    $view = "<tr>
                        <td>$i</td>
                        <td>$row[name_user]</td>
                        <td><mark>$nameShop</mark></td>
                        <td>$row[coment_data]</td>
                        <td><a class=xoa href=index.php?url=comment_user&act=deleteComment&id_comment=$row[id_comment]>Xóa</a></td>
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