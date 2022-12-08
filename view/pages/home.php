<div class="container">
    <div class="banner mt-4 row">
        <div class="banner-big-banner col-lg-12 col-md-12 custom-padding-right-banner">
            <div class="owl-slider-banner">
                <div id="owl-slider-banner" class="owl-carousel">
                    <?php foreach ($getAllEvent as $value) : ?>
                        <?php
                        $status = $value['status'];


                        $banner = " 
                                    <div class='item '>
                                        <img src='$value[img_event]' alt='' class='setup-height-banner'>
                                    </div>
                               ";
                        if ($status != 0) {
                            $banner = " <div class='items'>
                                <img src='https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-banner-pic/b61ed4ead2296f2695da4d16d4369a9a.png' class='setup-height-banner'>
                                </div>
                                ";
                        }

                        ?>
                        <?php echo $banner; ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>



    <!-- danh mục -->
    <div class="margin"></div>
    <h2 class="text-secondary mb-4 class-category-margin">DANH MỤC</h2>
    <div class="container">
        <div class="row custom-row">
            <?php foreach ($getAllDataCategory as $category) : ?>
                <a href="index.php?url=product-category&id_category=<?= $category['id_category'] ?>">
                    <div class="col- custom-margin-category">
                        <div class="cartegory-items">
                            <img src="<?= $category['img_category'] ?>" alt="" style="max-width:100%; max-height:100%;">
                            <p style="color: black; text-align:center;"><?= $category['name_category'] ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>


        <!-- DANH MỤC  -->


        <div class="margin"></div>
        <div class="flash-sale-title">
            <h3 class="mt-4 mb-4"><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/flashsale/fb1088de81e42c4e538967ec12cb5caa.png" alt=""></h3>
            <div class="flash-sale-showall">
                <a href="index.php?url=top-sale">
                    <span>Xem tất cả</span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>
        <div class="owl-slider">
            <div id="carousel" class="owl-carousel">
                <?php foreach ($showProductSale as $value) : ?>
                    <?php
                        $price = $value['price_product'];
                        $discount = $value['sale'];
                        $oldPrice = intval($price * $discount) / 100;


                        $checkPriceSale = "
                            <div class='carousel-item-title text-center mt-3 home__product-items-old'>
                             $value[price_product] đ
                            </div>
                            <div class='carousel-item-title text-center mt-3'>
                                $oldPrice đ
                            </div>
                            ";
                        if ($value['sale'] < 10)   {
                            $checkPriceSale = "
                            <div class='carousel-item-title text-center mt-3 home__product-items-old'>
                             $value[price_product]đ
                            </div>
                            ";
                        }
                    ?>
                    <div class="item">
                        <a href="index.php?url=detail-product&id_product=<?= $value['id_product'] ?>" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    <?= $value['sale'] ?>%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="<?= $value['img_product'] ?>" alt="" class="max-height">
                                </div>
                            </div>
                            <?php echo $checkPriceSale ?>
                          
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="">
                            <div class="home__product-items-saleoff">
                                <div class="home__product-items-saleoff-percent">
                                    50%
                                </div>
                                <div class="home__product-items-saleoff-label">
                                    GIẢM
                                </div>
                            </div>
                            <div class="carousel-item-child">
                                <div class="carousel-sale">
                                    <img src="https://cf.shopee.vn/file/86e4196ee16efe4b43e45d65cac2397c_tn" alt="">
                                </div>
                                <div class="carousel-item-product">
                                    <img src="https://cf.shopee.vn/file/sg-11134201-22100-anlsmqpv4live5_tn" alt="">
                                </div>
                            </div>
                            <div class="carousel-item-title text-center mt-3">
                                1.200.300đ
                            </div>
                            <div class="has-sale mt-4">
                                <div class="has-sale-task">
                                    <div class="has-sale-title">
                                        Đã bán 4
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->
            </div>
        </div>
    </div>




    <!--  -->
    <div class="banner-off-sale mt-4">
        <img src="https://cf.shopee.vn/file/2d3a844e83b74419e08d5b800ed10d54" alt="">
    </div>

    <div class="margin"></div>


    <!-- top content -->
    <div class="margin"></div>
    <h2 class="mt-4 mb-4 text-center" style="color: #EE4D2D;">GỢI Ý HÔM NAY</h2>
    <div class="container">
        <div class="top-sale-layout">
            <div class="row">
              
                <?php foreach ($topNewProducts as $value) : ?>
                    <?php
                    $price = $value['price_product'];
                    $discount = $value['sale'];
                    $oldPrice = ($price * $discount) / 100;


                    $checkPrices = "
                        <div class='today-item-price d-flex justify-content-between align-items-center mt-4 px-2'>
                        <div class='price'>
                            <div class='home__product-items-old fix-margin'> 
                            $value[price_product]đ
                            </div>
                            <span class='price-money'>
                                $oldPrice đ
                            </span>
                        </div>
                        <div class='have-sale'>
                            <span>
                                Đã bán
                            </span>
                            <span>
                                32,4k
                            </span>
                        </div>
                    </div>";
                    if ($value['sale'] == 0) {
                        $checkPrices = "<div class='today-item-price d-flex justify-content-between align-items-center mt-4 px-2'>
                            <div class='price'>
                               
                                <span class='price-money'>
                                    $value[price_product] đ
                                </span>
                            </div>
                            <div class='have-sale'>
                                <span>
                                    Đã bán
                                </span>
                                <span>
                                    32,4k
                                </span>
                            </div>
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
                                    <?php echo $checkPrices ?>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="more">
        <a href="index.php?url=show-all-product" class="btn btn-light btn--m btn--inline btn-light--link more-href float-right">Xem thêm</a>
    </div>


    <!-- top content -->


</div>


<!-- slick carousel -->


</div>
<!-- bs4 js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // $('.owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     lazyLoad: true,
    //     dots: false,
    //     navText: [
    //         "<i class='fa-solid fa-chevron-left'></i>",
    //         "<i class='fa-solid fa-chevron-right'></i>"
    //     ],
    //     responsive: {
    //         0: {
    //             items: 2
    //         },
    //         600: {
    //             items: 4
    //         },
    //         1000: {
    //             items: 6
    //         }
    //     }
    // })



    jQuery("#carousel").owlCarousel({
        autoplay: true,
        loop: true,
        /* use rewind if you don't want loop */
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 5000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 2
            },

            600: {
                items: 3
            },

            1024: {
                items: 4
            },

            1366: {
                items: 6
            }
        }
    });


    jQuery("#carousel-top-sale").owlCarousel({
        autoplay: true,
        loop: true,
        /* use rewind if you don't want loop */
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 2
            },

            600: {
                items: 3
            },

            1024: {
                items: 4
            },

            1366: {
                items: 6
            }
        }
    });

    jQuery("#owl-slider-banner").owlCarousel({
        autoplay: true,
        loop: true,
        /* use rewind if you don't want loop */
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 1
            },

            1024: {
                items: 1
            },

            1366: {
                items: 1
            }
        }
    });
</script>

</html>