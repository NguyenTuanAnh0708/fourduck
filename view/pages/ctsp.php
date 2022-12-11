<div class="pd-wrap">
    <div class="container">
        <div class="heading-section">
            <h2></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col">
                    <div class="item">
                        <img style="width:350px; height: 400px; object-fit:cover; border:1px solid #ccc" src="<?php echo $shopDetail['img_product'] ?>" alt="..." id="MainImg" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name"><?php echo $shopDetail['name_product'] ?>
                        </div>

                        <?php
                        $price = $shopDetail['price_product'];
                        $discount = $shopDetail['sale'];
                        $oldPrice = intval($price * $discount) / 100;

                        $show = "
                                <div class='product-price-discount text-danger'><span class='text-discount'> $oldPrice
                                </span><sup>vnđ</sup></div>
                                ";
                        if ($discount < 10) {
                            $show = " <div class='product-price-discount text-danger'><span class='text-discount'> $price
                                    </span><sup>vnđ</sup></div>
                                    ";
                        }

                        echo $show;


                        ?>

                    </div>
                    <div class="row">

                        <div class="col-sm-3">
                            <p>Số lượng</p>
                        </div>
                        <div class="col-sm-9 pt-2">
                            <span class="border border-dark bg-dark px-2" style=" color:#ffffff;max-width: 1.8rem; max-height: 0.5rem; font-size: 1.4rem;">+</span>
                            <input class="border border-dark px-2" type="text" name="quantity" value="1" style="line-height: 0.5rem ; max-width:2.2rem;text-align: center; font-size:1.4rem;">
                            <span class="border border-dark  bg-dark px-2" style=" color:#ffffff;max-width:1.8rem; max-height: 0.5rem; font-size: 1.4rem;">-</span>
                        </div>
                        <p class="" style="margin-top: 5px;">
                            <button type="button" class="btn btn-outline-danger btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>Thêm vào giỏ hàng</button>
                            <a href="#" class="bg-danger btn btn-outline-danger btn-lg active ">Mua ngay</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-info-tabs">
            <div class="row">
                <div class="col-md-12 bg-light " style="margin-top:2rem ;">
                    <div class="row">
                        <div class="col-12 bg-light my-2">

                            <div class="row align-items-center">
                                <div class="col-md-6 my-2 d-flex flex-row align-items-center">

                                    <?php
                                    echo "<div class='dropdown'>
                                            <img src=' $shopDetail[img_shop]' alt='' class='avatar dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            </div>";
                                    ?>

                                    <div class="ml-2">
                                        <h5 class="col"><?php echo $shopDetail['name_shop'] ?></h5>
                                        <span class="border border-dark px-2 py-2 mx-3" style="max-width: 3rem; max-height: 0.5rem; font-size: 1.2rem;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z" />
                                            </svg><a href="" style="color:#5c5050">Cửa hàng</a> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-2 l-0 bg-light">
                    <div class="bg-light">
                        <div>CHI TIẾT SẢN PHẨM </div>
                    </div>
                    <div class="Ezi7D0" style="margin: 1.875rem 0.9375rem 0.9375rem;">

                        <div class="vymrqq" style=" display: flex;margin-bottom: 1.125rem;">
                            <label class="ZgeHl-">danh mục</label>
                            <div class="flex items-center y7IkgP">
                                <a class="_4Zf0hw bi-phone-flipkozQ" href="index.php?url=product-category&id_category=<?= $shopDetail['id_category'] ?>"><?= $nameCategory['name_category'] ?></a>
                            </div>
                        </div>
                        <div class="vymrqq" style=" display: flex;margin-bottom: 1.125rem;">
                            <label class="ZgeHl-">Thương hiệu </label>
                            <div class="flex items-center y7IkgP">
                                <p><?php echo $shopDetail['name_shop'] ?></p>

                            </div>

                        </div>
                    </div>
                    <div class="bg-light">
                        <div>MÔ TẢ SẢN PHẨM</div>
                        <div class="Ezi7D0">
                            <div class="sJarux">
                                <p class="NSVAH-">
                                    <?php echo $shopDetail['description_product'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (!isset($_SESSION['user'])) {
                    $showComment = 'd-none';
                }
                ?>
                <div class="col-md-12 bg-light my-2">
                    <ul>
                        <li class="border-bottom <?= $showComment ?> ">
                            <div class="col-12 bg-light my-2">
                                <div class="row align-items-center">
                                    <div class="col-md-6 my-2 d-flex flex-row align-items-center">
                                        <?php
                                        echo "<div class='dropdown'>
                                            <img src=" . $_SESSION["user"]["img_user"] . " alt='' class='avatar dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            </div>";
                                        ?>
                                        <h5 class="col"><?php echo $_SESSION["user"]["name_user"] ?></h5>
                                    </div>

                                    <form action="index.php?url=detail-product&id_product=<?php echo $shopDetail['id_product'] ?>" method="POST" class="col-md-6 ">
                                        <div class="input-group">
                                            <input tpe="text" class="form-control " name="cmt" placeholder="Bình Luận">
                                            <div class="input-group-append ">
                                                <button class="input-group-text" id="basic-addon2" name="btnCmt" style="background-color: #F94E2F; color: #ffffff;">Bình
                                                    luận</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <?php
                        foreach ($data as $row) {
                            $view = " 
                            <li class='border-bottom '>
                            <div class='col-12 bg-light my-2'>
                                <div class='row align-items-center'>
                                    <div class='col-md-6 my-2 d-flex flex-row align-items-center'>
                                        <img src='$row[img_user]' alt='' class='avatar dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        <h5 class='col'>$row[name_user]<br>
                                        $row[create_at]
                                        </h5>
                                    </div>
                                    <div class='col-md-7 '>
                                        <p>$row[coment_data]</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                            ";
                            echo $view;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>