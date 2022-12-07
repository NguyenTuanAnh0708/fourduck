<div class="content-wrapper p-3">
    <h3>Gia hạn thêm cho shop (<mark><?= $dataOne['name_shop'] ?></mark>)</h3>
    <h2>Ngày kết thúc hiện tại của shop này là <mark><?= date("d-m-Y", strtotime($dataOne['end_shop'])); ?></mark></h2>
    <h2>Tổng số tiền gia hạn trước đó <mark><?= $dataOne['near_price'] ?>đ</mark></h2>
    <form class="form-group" action="index.php?url=shop&act=update&id_shop=<?= $dataOne['id_shop'] ?>" method="POST" enctype="multipart/form-data">
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