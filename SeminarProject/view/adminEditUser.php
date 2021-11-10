<?php
    include("../controller/adminEditUserControl.php");
    if(!isset($_SESSION["usernameAdmin"]))
    {
        header("location:loginAdmin.php");
    }
    // $id = '';
    // if()
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin</title>
    <link rel="stylesheet" type="text/css" href="../css/profilestyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        <!--    phần avatar và tên -->
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Sửa thông tin</h4>
                </div>
                <form  method="post">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Họ tên</label><input type="text" class="form-control" name="name" value="<?php echo $row["nameGuest"]?>" placeholder="tên" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" name="phone" placeholder="điện thoại" value="<?php echo $row["phoneGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control" name="address" placeholder="địa chỉ" value="<?php echo $row["addressGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row["mailGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Tên đăng nhập</label><input type="text" class="form-control" name="username" placeholder="tên đăng nhập" value="<?php echo $row["username"]?>"></div>
                    <div class="col-md-12"><label class="labels">Mật khẩu</label><input type="text" class="form-control" name="password" placeholder="mật khẩu" value="<?php echo $row["password"]?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Giới tính</label><input type="text" class="form-control" name="sex" placeholder="giới tính" value="<?php echo $row["sexGuest"]?>"></div>
                    <div class="col-md-6"><label class="labels">Tuổi</label><input type="text" class="form-control" name="age" value="<?php echo $row["ageGuest"]?>" placeholder="tuổi"></div>
                    <div class="col-md-12" style="margin-top: 10%;">
                    <?php
                    if(@$_GET['error'])
                    {
                        ?>
                        <div class="alert alert-danger" role="alert"><?php echo $_GET['error']?></div>
                        <?php
                    }
                    elseif(@$_GET['successfull'])
                    {
                     ?>
                        <div class="alert alert-success" role="alert"><?php echo $_GET['successfull']?></div>
                        <?php
                    }
                ?>
                    </div>
                </div>
                <div class="mt-5 text-center">            
                <!-- <form  method="post"> -->
                <input type="submit" class="btn btn-primary profile-button" name="update" value="Lưa thay đổi" />
               </form>
                <form  method="post" style="margin-top: 8%;">
                <input type="submit" class="btn btn-success" name="backtoadmin" value="Trở về" />
              </form>
                </div>

            </div>
        </div>
        <div class="col-md-4">
<!--   chi tiết tham gia hội thảo -->
        </div>
    </div>
</body>
</html>