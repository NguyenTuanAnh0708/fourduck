<div class="content-wrapper">
    <div class=" card" style="min-height: 85vh;">
        <div class="card-body mx-4">
            <div class="container">
                <div class="d-flex">
                    <p style="font-size: 30px;">Thông tin chi tiết shop <mark><?= $dataOne['name_shop'] ?></mark></p>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <td>Mã id shop</td>
                            <td><?= $dataOne['id_shop'] ?></td>
                        </tr>
                        <tr>
                            <td>Chủ shop:</td>
                            <td><?= $dataOne['name_user'] ?></td>
                        </tr>
                        <tr>
                            <td>Miêu tả shop</td>
                            <td><?= $dataOne['type_shop'] ?></td>
                        </tr>
                        <tr>
                            <td>Thời gian tạo</td>
                            <td><?= $dataOne['create_at'] ?></td>
                        </tr>
                        <tr>
                            <td>Tổng số tiền đã chi cho FOURDUCK</td>
                            <td><mark><?= $dataOne['price'] ?></mark></td>
                        </tr>
                        <tr>
                            <td>Thời gian gia hạn gần nhất</td>
                            <td><?= $dataOne['create_shop'] ?></td>
                        </tr>
                        <tr>
                            <td>Thời gian kết thúc gia hạn</td>
                            <td><mark><?= $dataOne['end_shop'] ?></mark></td>
                        </tr>
                        <tr>
                            <td>Số tiền chi cho gia hạn</td>
                            <td><mark><?= $dataOne['near_price'] ?>đ</mark></td>
                        </tr>
                        <tr>
                            <td>Trang thai</td>
                            <td><mark><?= $dataOne['status'] ?></mark></td>
                        </tr>
                        <tr>
                            <td>Quay về</td>
                            <td><a href="index.php?url=shop">Tại đây</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>