<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

</head>
<link rel="stylesheet" href="../src/css/main.css">

<body>
    <div class="app">
        <header>
            <div class="row header-inner align-items-center">
                <div class="col-1 header-innerLogo ">
                    <img class="float-start" src="../public/imgs/Logo4duck.png" alt="Logo4duck">
                </div>
                <div class="col-8 offset-1 header-innerSeach nopadding">
                    <input class="header-innerSeach-input" type="text" placeholder="Sản phẩm bạn cần tìm......">
                    <button class="header-innerSeach-button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <div class="col-1 offset-1 header-innerCart">
                    logo cart
                </div>
            </div>
            <div>
            </div>
        </header>
        <div class="wapper-inner card-shop">
            <h2 class="text-center p-3">Đăng ký gian hàng trên fourduck</h2>
            <div class="row">
                <form action="">
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-5">
                            <label style="min-width:150px" for="">Tên Shop</label>
                            <input />
                        </div>
                        <div class="col-12 col-md-5">
                            <label style="min-width:150px" for="">Miêu tả mặc hàng</label>
                            <input />
                        </div>
                    </div>
                    <div class=" row justify-content-center">
                        <div class="col-12 col-md-5 mt-2">
                            <span>Ảnh đại diện shop</span>
                            <input type="file">
                        </div>
                    </div>
                    <div class=" row justify-content-center">
                        <div class="col-12 col-md-5 mt-2">
                            <button type="submit" class="btn btn-info" style="width:100%">Tạo</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>