<div class="margin"></div>
<div class="container">
    <div class="row">
        <div class="sidebar-show-all col-sm-2">
            <h2 class="">Danh mục</h2>
            <?php foreach ($getAllCategoryByNames as $values) : ?>
                <div class="categories"><a class="categories-items" href="index.php?url=product-category&id_category=<?= $values['id_category'] ?>" style="font-size: 18px;"><?= $values['name_category'] ?></a></div>
            <?php endforeach; ?>
        </div>
        <div class="container-product-show-all col-sm-10">
            <!-- products -->
            <div class="top-sale-layout">
                <div class="row">
                    <?php foreach ($productCategory as $value) : ?>
                        <?php
                        $price = $value['price_product'];
                        $discount = $value['sale'];
                        $oldPrice = ($price * $discount) / 100;


                        $checkPrice = "
                                <div class='home__product-items-price'>
                                <span class='home__product-items-old'> $value[price_product]đ</span>
                                <span class='home__product-items-current'>$oldPrice đ</span>
                            </div>";
                        if ($value['sale'] < 10) {
                            $checkPrice = "<div class='home__product-items-price'>
                                
                                <span class='home__product-items-current'>$value[price_product] đ</span>
                            </div>
                                ";
                        }
                        ?>
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
                                        <?php echo $checkPrice; ?>


                                        <!-- <div class="home__product-items-action">
                                            <span class="home__product-item--sold">32,4k đã bán</span>
                                        </div> -->
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php endforeach; ?>

                    <!-- TOP SALE -->
                    <?php
                    if (!$productCategory) {
                        $emptyProduct = "  <div class='col-12'>
                            <img src='https://kalpamritmarketing.com/design_img/no-product-found.jpg' alt=''>
                        </div>
                            ";
                    }
                    echo $emptyProduct;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>