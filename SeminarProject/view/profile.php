<?php
    // session_start();
    include("../controller/profileupdate.php");
    if(!isset($_SESSION["username"]))
    {
        header("location:login.php");
        exit();
    }
    $dataUser = $_SESSION["dataUser"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/profilestyle.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="../images//nv2.jpg" alt="Image" class="img-fluid"><span class="font-weight-bold"><?php echo $dataUser["nameGuest"]?></span><span class="text-black-50"><?php echo $dataUser["mailGuest"]?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Trang cá nhân</h4>
                </div>
                <form  method="post">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Họ tên</label><input type="text" class="form-control" name="name" value="<?php echo $dataUser["nameGuest"]?>" placeholder="tên" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" name="phone" placeholder="điện thoại" value="<?php echo $dataUser["phoneGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control" name="address" placeholder="địa chỉ" value="<?php echo $dataUser["addressGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $dataUser["mailGuest"]?>"></div>
                    <div class="col-md-12"><label class="labels">Mật khẩu</label><input type="text" class="form-control" name="password" placeholder="mật khẩu" value="<?php echo $dataUser["password"]?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Giới tính</label><input type="text" class="form-control" name="sex" placeholder="giới tính" value="<?php echo $dataUser["sexGuest"]?>"></div>
                    <div class="col-md-6"><label class="labels">Tuổi</label><input type="text" class="form-control" name="age" value="<?php echo $dataUser["ageGuest"]?>" placeholder="tuổi"></div>
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
                <input type="submit" class="btn btn-primary profile-button" name="update" value="Lưu thay đổi" />
               </form>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Chi tiết đăng kí tham gia hội thảo</span></div><br>
<!--                 <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Địa điểm</th>
                      <th>Thời gian</th>
                      <th>Checkin</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Đại học Hà Nội</td>
                      <td>21/09/2020</td>
                      <td>7.AM</td>
                    </tr>
                </tbody>
            </table>
            </div>
<!--             <form method="POST">
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" name="backtohome" id="backtohome">quay về trang chủ</button></div>
            </form> -->
            <div class="mt-5 text-center">
            <form  method="post">
                <input type="submit" class="btn btn-primary profile-button" name="backtohome" value="Quay về trang chủ" />
            </form>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>