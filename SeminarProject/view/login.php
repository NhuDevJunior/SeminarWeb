<?php
     // ob_start();
     include("../controller/checklogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="../colorlib/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../colorlib/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Đăng nhập</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Tên của bạn" required autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mật khẩu" required autocomplete="off"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
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
                    <p class="loginhere">
                        Bạn chưa có tài khoản ? <a href="register.php" class="loginhere-link">Tạo tài khoản</a>
                    </p>
                    <p style="margin-left: 30%;margin-top: 10%"><a href="loginAdmin.php" class="loginhere-link">Đăng nhập quản trị viên</a>
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