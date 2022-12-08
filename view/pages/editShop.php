<div class="content-wrapper p-3">
    <h3>Shop (<mark><?= $dataShop['name_shop'] ?></mark>) của bạn đã hết thời gian kinh doanh trên fourduck</h3>
    <h3>Gia hạn thêm cho shop (<mark><?= $dataShop['name_shop'] ?></mark>)</h3>
    <h2>Ngày kết thúc hiện tại của shop này là <mark><?= date("d-m-Y", strtotime($dataShop['end_shop'])); ?></mark></h2>
    <form class="form-group" action="index.php?url=editShop&act=update&id_shop=<?= $dataShop['id_shop'] ?>" method="POST" enctype="multipart/form-data">
        <select name="dataUpdate">
            <option value="1-1000000">1 tháng - 1.000.000đ</option>
            <option value="6-5000000">6 tháng - 5.000.000đ</option>
            <option value="12-10000000">12 tháng - 10.000.000đ</option>
        </select>
        <div class="col-auto p-3 ">
            <input type="submit" class="btn btn-danger mb-3" name="btnUpdate" value="Cập nhập">
        </div>
    </form>
</div>