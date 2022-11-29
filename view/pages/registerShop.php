<div class="row justify-content-center">
    <div class="col-12 col-md-9 p-3">
        <div class="row">
            <div class=".d-none .d-md-block col-md-6" style="height:60vh;
                    background-image: url('https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');
                    "></div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h2 class="text-center">Đăng ký shop trên forduck</h2>
                <p class="text-center">Chào mừng bạn đến với sàn thương mại điện tử <mark>Fourduck</mark></p>
                <p class="text-center">Đăng ký gian hàng của bạn để mọi người biết đến shop bạn</p>
                <form action="index.php?url=registerShop&act=addShop" method="post" enctype="multipart/form-data">
                    <div class=" form-group mt-3">
                        <label for="nameShop">Tên shop</label>
                        <input type="text" class="form-control" id="nameShop" name="nameShop">
                    </div>
                    <div class="form-group mt-3">
                        <label for="shopDicription" name="shop">Miêu tả shop bạn</label>
                        <input type="text" class="form-control" id="shopDicription" name="shopDescription">
                    </div>
                    <div class="form-group mt-3">
                        <label for="avatar">Chọn avatar shop bạn</label>
                        <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>
                    <div class="form-group mt-3">
                        <label for="dataUpdate">Thời gia hạn</label>
                        <select name="dataUpdate">
                            <option value="1-1000000">1 tháng - 1.000.000đ</option>
                            <option value="6-5000000">6 tháng - 5.000.000đ</option>
                            <option value="12-10000000">12 tháng - 10.000.000đ</option>
                        </select>
                    </div>
                    <button type="submit" name="addShop" value="addShop" class="btn btn-primary d-flex" style="margin: 20px auto; ">Gia hạn
                        ngay</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>