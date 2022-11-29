<?php
session_start();
require "./controller/userC.php";
$userC = new userC();
$errorLogin = '';
if (isset($_POST['login'])) {
    $gmail = $_POST["gmail"];
    $password = $_POST['password'];
    $errorLogin = $userC->checkUser($gmail, $password);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login-fourDuck</title>
    <link rel="stylesheet" href="./dist/css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>Form Đăng Nhập</title>
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" class="sign-in-form" method="Post">
                        <h2 class="title">Đăng Nhập</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Gmail" name="gmail" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật Khẩu" name="password" />
                        </div>
                        <input type="hidden" id="myPhpValue" value="<?= $errorLogin; ?>" />
                        <input type="submit" value="Đăng nhập" class="btn solid" name="login" />
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <img src="./view/public/imgs/Logo4duck.png" class="image" alt="" />
                        <h3>Thông BÁO</h3>
                        <p>
                            Khách hàng nhập đúng thông tin tài khoản để truy cập, không cung cấp thông tin tài khoản cho bất kỳ ai
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            <a href="register.php"> Đăng Ký</a>

                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="app.js"></script>
    </body>

    </html>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
    <script src="./view/src/js/log.js"></script>
    <!-- partial -->
    <script>
        // log error/////////////
        let errorLogin = '<?= $errorLogin ?>';
        if (errorLogin == 'errorLogin') {
            Swal.fire({
                icon: 'error',
                title: 'Tài khoảng không tồn tại',
                text: 'Bạn đã nhập sai tài khoảng và mật khẩu !',
            })
        } else if (errorLogin == 'okLogin') {
            Swal.fire(
                'Đăng nhập thành công',
                'Bạn sẽ được đưa vào trang đăng nhập trong 5s nữa',
                'success'
            )
            setTimeout(() => {
                window.location = "index.php";
            }, 2000);
        }
    </script>
</body>

</html>