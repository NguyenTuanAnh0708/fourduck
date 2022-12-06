
<div class="margin"></div>
<div class="container">
    <div class="row">
        <div class="sidebar-show-all col-sm-2">
            <h2>Danh mục</h2>
        </div>
        <div class="container-product-show-all col-sm-10">
            <div class="home__filter">
                <span class="home__filter-title">Sắp xếp theo</span>
                <button class="home__filter-btn home__filter-btn--primary">Phổ Biến</button>
                <button class="home__filter-btn">Mới Nhất</button>
                <button class="home__filter-btn">Bán chạy</button>

                <div class="selec__input">
                    <span class="selec__input-lable">
                        Giá
                    </span>
                    <i class="selec__input-icon fas fa-angle-down"></i>
                    <ul class="selec__input-list">
                        <li class="selec__input-item">
                            <a href="" class="selec__input-link">
                                Giá: thấp đến cao
                            </a>
                        </li>
                        <li class="selec__input-item">
                            <a href="" class="selec__input-link">
                                Giá: cao đến thấp
                            </a>

                        </li>

                    </ul>
                </div>

                <div class="home__filter-page">
                    <span class="home__filter-numb">
                        <span class="home__filter-numb--curren">1</span>/14

                    </span>
                    <div class="home__filter-page-control">
                        <a href="" class="home__filter-page-btn home__filter-page-btn--disable">
                            <i class="home__filter-page-icon fas fa-angle-left"></i>
                        </a>
                        <a href="" class="home__filter-page-btn">
                            <i class="home__filter-page-icon fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- products -->
            <div class="top-sale-layout">
                <div class="row">
                    <?php foreach ($product_category as $value) : ?>
                        <?php
                        $checkDiscount = "<div class='home__product-items-saleoff'>
                         <div class='home__product-items-saleoff-percent'>
                                 $value[sale]%
                         </div>
                         <div class='home__product-items-saleoff-label'>
                             GIẢM
                         </div>
                     </div>";
                        if ($value['sale'] == 0) {
                            $checkDiscount = " <div class='home__product-items-saleoff display-none-discount'>
                             <div class='home__product-items-saleoff-percent'>
                              
                             </div>
                             <div class='home__product-items-saleoff-label'>
                                 GIẢM
                             </div>
                         </div>";
                        }
                        ?>
                        <div class="col-lg-2 col-md-3 col-sm-3 col-6 today-product-items mt-3 mb-3">
                            <a href="index.php?url=detail-product&id_product=<?= $value['id_product'] ?>">
                                <div class="top-layout-boder rounded">
                                    <div class="home__product-items--favourite">
                                        <i class="fas fa-check"></i>
                                        <span>Yêu thích</span>
                                    </div>
                                    <?php echo $checkDiscount ?>
                                    <div class="today-item-child">
                                        <!-- <div class="today-sale">
                                        <img src="https://cf.shopee.vn/file/a95f5c1f7ab5a75d353e1f2e4258aaf2" alt="">
                                    </div> -->
                                        <div class="today-item-product">
                                            <img src="<?= $value['img_product'] ?>" alt="" class="option-today-custom-img">
                                        </div>
                                        <h5 class="today-item-content mt-2 pl-2">

                                            <?= $value['name_product'] ?>

                                        </h5>
                                        <div class="home__product-items-price">
                                            <span class="home__product-items-old">2.000.0000vnđ</span>
                                            <span class="home__product-items-current">5.000vnđ</span>
                                        </div>

                                        <!-- <div class="home__product-items-action">
                                            <span class="home__product-item--sold">32,4k đã bán</span>
                                        </div> -->
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php endforeach; ?>

                    <!-- TOP SALE -->

                </div>
            </div>
        </div>
    </div>
</div>