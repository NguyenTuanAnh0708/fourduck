<?php
session_start();
require "./upload/imgur.php";
require "./controller/userC.php";
$userC = new userC();
if (isset($_POST['registerUser']) && $_POST['registerUser'] == "registerUser") {
    $name = $_POST['name'];
    $gmail = $_POST["gmail"];
    $password = $_POST['password'];
    if ($_FILES['avatar']['tmp_name'] == null) {
        $img_user = 'https://i.stack.imgur.com/l60Hf.png';
    } else {
        $img_user = upload($_FILES['avatar']['tmp_name']);
    }
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $role = $_POST['role'];
    $log = $userC->insertNew($name, $gmail, $password, $img_user, $phone, $location, $role);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./dist/css/login.css?v=<?php echo time(); ?>">
    <title>Đăng ký</title>
    <link rel="icon" href="./view/public/imgs/Logo4duck.png">
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container ">
            <div class="signin-signup">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" name="registration" id="registration" class="sign-up-form" method="Post" enctype="multipart/form-data" onsubmit="return validateform()">

                    <h2 class=" title">Đăng Ký</h2>

                    <div class="input-field">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Họ Và Tên" name="name" id="name" />
                        </div>
                        <div class="e-name" id="e-name" style="color:red;"></div>
                    </div>

                    <div class="input-field">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Email" name="gmail" id="gmail" />
                        </div>
                        <div class="err-gmail" id="err-gmail" style="color: red;"></div>

                    </div>

                    <div class="input-field">
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật Khẩu" name="password" id="password" />
                        </div>
                        <div id="e-password" style="color: red;"></div>
                    </div>

                    <div class="input-field">
                        <div class="input-box">
                            <i class="fas fa-phone"></i>
                            <input type="text" placeholder="Sô Điện Thoại" name="phone" id="phone" />
                        </div>
                        <div id="error-phone" style="color: red;"></div>
                    </div>

                    <div class="input-field">
                        <div class="input-box">
                            <i class="fas fa-address-book"></i>
                            <input type="text" placeholder="Địa chỉ" name="location" id="address" />
                        </div>
                        <div id="e-addr" style="color: red;"></div>
                    </div>
                    <div>
                        <span>Ảnh đại diện</span>
                        <input type="file" name="avatar" id="avatar" />
                    </div>

                    <select class="input-field" name="role" id="role">
                        <option value="2">Nguời Mua</option>
                        <option value="1">Người Bán</option>
                    </select>

                    <input type="submit" class="btn" value="registerUser" id="registerUser" name="registerUser" />
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
            </div>
        </div>
    </div>





    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
    <script src="./view/src/js/log.js"></script>
    <!-- validation -->

    <script>
        const usernameEle = document.getElementById('name');
        const emailEle = document.getElementById('gmail');
        const passwordEle = document.getElementById('password');
        const phoneEle = document.getElementById('phone');
        const addressEle = document.getElementById('address');
        const btnRegister = document.getElementById("registerUser");
        const avatar = document.getElementById("avatar")



        console.log([usernameEle, emailEle, passwordEle, phoneEle, addressEle, avatar]);
        // ERROR






        function validateform() {
            let email = emailEle.value;
            let phone = phoneEle.value;
            isCheck = true;
            let regexEmail = /^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/;
            let regexPhone = /^\d{10,11}$/
            if (usernameEle.value == '') {
                document.getElementById("e-name").innerHTML = "Không được bỏ trống"
                return !isCheck;
            } else if (usernameEle.value.length < 6) {
                document.getElementById("e-name").innerHTML = "Không được dưới 6 kí tự"
                return !isCheck;
            } else {
                document.getElementById("e-name").innerHTML = ""

            }

            if (emailEle.value == '') {
                document.getElementById("err-gmail").innerHTML = "Không được bỏ trống Gmail"
                return !isCheck;
            } else if (!regexEmail.test(emailEle.value)) {
                document.getElementById("err-gmail").innerHTML = "Phải là gmail"
                return !isCheck;
            } else {
                document.getElementById("err-gmail").innerHTML = " "

            }


            if (passwordEle.value == '') {
                document.getElementById("e-password").innerHTML = "Không được bỏ trống mật khẩu";

                return !isCheck;
            } else if (passwordEle.value.length < 8) {
                document.getElementById("e-password").innerHTML = "Phải từ 8 kí tự trở lên";
                return !isCheck;
            } else {
                document.getElementById("e-password").innerHTML = "";

            }


            if (addressEle.value == '') {
                document.getElementById("e-addr").innerHTML = "không được bỏ trống địa chỉ"
                return !isCheck;
            } else {
                document.getElementById("e-addr").innerHTML = " "

            }

            if (phoneEle.value == '') {
                document.getElementById("error-phone").innerHTML = "Không được bỏ trống số điện thoại";
                return !isCheck;
            } else if (!regexPhone.test(phoneEle.value)) {
                document.getElementById("error-phone").innerHTML = "Từ 10 -11 số";
                return !isCheck;
            } else {
                document.getElementById("error-phone").innerHTML = " ";

            }







            return isCheck;
        }
    </script>
    <script>
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