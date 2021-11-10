<?php
     // ob_start();
     include("../controller/checkloginAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../colorlib/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../colorlib/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Admin</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Tên admin" required autocomplete="off"/>
                        </div>
                        <!-- <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Địa chỉ emal" required autocomplete="off"/>
                        </div> -->
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mật khẩu" required autocomplete="off"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <!-- <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu" required autocomplete="off"/>
                        </div> -->
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Tôi đồng ý với  <a href="#" class="term-service">Điều khoản dịch vụ</a></label>
                        </div> -->
                        <div class="form-group">
                            <?php
                                if(@$_GET['Invalid'])
                                {
                                    ?>
                                    <div class="alert alert-danger" role="alert"><?php echo $_GET['Invalid']?></div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Đăng nhập"/>
                        </div>
                    </form>
                    <p class="loginhere"><a href="login.php" class="loginhere-link">Quay lại đăng nhập khách hàng</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../colorlib/vendor/jquery/jquery.min.js"></script>
    <script src="../colorlib/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>