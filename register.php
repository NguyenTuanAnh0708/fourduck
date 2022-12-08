<?php
session_start();
require "./upload/imgur.php";
require "./controller/userC.php";
$userC = new userC();
if (isset($_POST['registerUser']) && $_POST['registerUser'] == "registerUser") {
    $name = $_POST['name'];
    $gmail = $_POST["gmail"];
    $password = $_POST['password'];
    $img_user = upload($_FILES['avatar']['tmp_name']);
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $role = $_POST['role'];
    $log = $userC->insertNew($name, $gmail, $password, $img_user, $phone, $location, $role);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./dist/css/login.css?v=<?php echo time(); ?>">

    <title>Login-fourDuck</title>

</head>

<body>
    <!-- partial:index.partial.html -->

    <div class="container sign-up-mode">
        <div class="forms-container ">
            <div class="signin-signup">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" id="reg" class="sign-up-form" method="Post" enctype="multipart/form-data" onsubmit="return validation()">;
                    <h2 class=" title">Đăng Ký</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Họ Và Tên" name="name" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="gmail" id="email" />
                      
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật Khẩu" name="password" id="password" />
                        <div id="e-pass" style="color: red;"></div>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Sô Điện Thoại" name="phone" id="phone" />
                        <div id="error-phone" style="color: red;"></div>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-address-book"></i>
                        <input type="text" placeholder="Địa chỉ" name="location" />
                    </div>
                    <div>
                        <span>Ảnh đại diện</span>
                        <input type="file" name="avatar" />
                    </div>

                    <select class="input-field" name="role">
                        <option value="2">Nguời Mua</option>
                        <option value="1">Người Bán</option>
                    </select>

                    <input type="submit" class="btn" value="registerUser" name="registerUser" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <img src="../public/imgs/Logo4duck.png" class="image" alt="" />
                    <h3>Thông Báo</h3>
                    <p>
                        Thành viên đăng ký tài khoản, vui lòng nhập đúng định dạng "Email"
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        <a href="login.php">
                            Đăng Nhập
                        </a>
                    </button>
                </div>
                <img src="./view/public/imgs/Logo4duck.png" class="image" alt="" />
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
    <script src="./view/src/js/log.js"></script>
    <script src="./dist/js/validate/validateForm.js?v=<?php echo time(); ?>"></script>
    <!-- partial -->
    <script>
        // log error exits
        let errorRegister = '<?= $log ?>';
        if (errorRegister == 'errorRegister') {
            Swal.fire({
                icon: 'error',
                title: 'Đăng ký thất bại rồi!',
                text: 'Tài khoảng của bạn đã tồi tại trên hệ thông',
            })
        } else if (errorRegister == 'okRegister') {
            Swal.fire(
                'Chúc mừng bạn đã đăng ký thành công!',
                'Bạn sẽ được chuyển đến trang đăng nhập!',
                'success'
            )
            setTimeout(() => {
                window.location = "login.php";
            }, 3000);
        }
    </script>
</body>

</html>