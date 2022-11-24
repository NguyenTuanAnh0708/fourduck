<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - From Login</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Form Đăng Nhập</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="sign-in-form">
            <h2 class="title">Đăng Nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="gmail" placeholder="Gmail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Mật Khẩu" />
            </div>
            <input type="submit" name="login" value="Đăng nhập" class="btn solid" />
            <!-- <p class="social-text">Hoặc Đăng nhập bằng các nền tảng xã hội</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Đăng Ký</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Họ Và Tên" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mật Khẩu" />
            </div>

            <div class="input-field">
              <i class="fas fa-image"></i>
              <input type="text" placeholder="Link ảnh của bạn" />
            </div>

            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Sô Điện Thoại" />
            </div>

            <div class="input-field">
              <i class="fas fa-address-book"></i>
              <input type="text" placeholder="Địa chỉ" />
            </div>

            <select class="input-field">
              <option>Nguời Mua</option>
              <option>Người Bán</option>
            </select>

            <input type="submit" class="btn" value="Đăng Ký" />
            <!-- <p class="social-text">Hoặc Đăng nhập bằng các nền tảng xã hội</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Thông BÁO</h3>
            <p>
              Khách hàng nhập đúng thông tin tài khoản để truy cập, không cung cấp thông tin tài khoản cho bất kỳ ai
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng Ký
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Thông Báo</h3>
            <p>
              Thành viên đăng ký tài khoản, vui lòng nhập đúng định dạng "Email"
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng Nhập
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>

  </html>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>