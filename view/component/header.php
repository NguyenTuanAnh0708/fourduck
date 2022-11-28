<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- BS4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <!-- HOME pages -->
    <link rel="stylesheet" href="./view/src/css/home.css?v=<?php echo time(); ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./view/src/css/showAllProduct.css">
    <link rel="stylesheet" href="./view/src/css/ctsp.css">
    <link rel="stylesheet" href="./view/src/css/main.css?v=<?php echo time(); ?>">


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <header>
            <div class="row header-inner align-items-center">
                <div class="col-1 header-innerLogo ">
                    <img class="float-start" src="./view/public/imgs/Logo4duck.png" alt="Logo4duck">
                </div>
                <div class="col-8 offset-1 header-innerSeach nopadding">
                    <input class="header-innerSeach-input" type="text" placeholder="Sản phẩm bạn cần tìm......">
                    <button class="header-innerSeach-button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <div class="col-1 offset-1 header-innerCart">
                    <?php
                    if (isset($_SESSION["user"])) {
                        if ($_SESSION["user"]["role"] == 0) {
                            $option = "<li><a class='dropdown-item' href='index.php?url=backAdmin'>Quay về admin</a></li>";
                        } else if ($_SESSION["user"]["role"] == 1) {
                            $option = "<li><a class='dropdown-item' href='#'>Quay về shop</a></li>";
                        }
                        echo "<div class='dropdown'>
                        <img src=" . $_SESSION["user"]["img_user"] . " alt='' class='avatar dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='#'>Giỏ hàng</a></li>
                            <li><a class='dropdown-item' href='#'>Thông tin</a></li>
                            <li><a class='dropdown-item' href='index.php?url=logout'>Đăng xuất</a></li>
                            " . $option . "
                        </ul>
                    </div>";
                    } else {
                        echo '<a href="index.php?url=login">Login</a>';
                    }
                    ?>
                </div>
            </div>
        </header>
    </div>