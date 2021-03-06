<?php
   // ob_start();
   session_start();
   // if(!isset($_SESSION["login"]))
   // {
   //  header("location:login.php");
   // }
   
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Thông tin về diễn giả</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="site-wrap">
  	   <div class="site-mobile-menu">
  	   	   <div class="site-mobile-menu-header">
  	   	   	   <div class="site-mobile-menu-header">
  	   	   	   	      <div class="site-mobile-menu-close mt-3">
  	   	   	   	      	   <span class="icon-close2 js-menu-toggle"></span>
  	   	   	   	      </div>
  	   	   	   </div>
  	   	   </div>
  	   	<div class="site-mobile-menu-body"></div>
  	   </div>
<!--   	   THIET KE MENU CHO SPEAKER -->
       <header class="site-navbar py-3" role=banner>
       	       <div class="container-fluid">
       	       	    <div class="row align-items-center">
       	       	    	<div class="cold-11 col-xl-2">
       	       	    		 <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Hội<span class="text-success">Thảo</span></a></h1>
       	       	    	</div>
       	       	    	<div class="col-12 col-md-10 d-none d-xl-block">
       	       	    		<nav class="site-navigation position-relative text-right" role="navigation">
       	       	    			<ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
       	       	    				<li><a href="index.php">Trang Chủ</a></li>
       	       	    				<li><a href="about.php">Thông Tin</a></li>
       	       	    				<li><a href="speakers.php">Diễn Giả</a></li>
       	       	    				<li class="active"><a href="news.php">Tin Tức</a></li>
       	       	    				<li><a href="contact.php">Liên Hệ</a></li>
                    <?php
                      if(isset($_SESSION["username"]))
                        {
                          $nameuser = $_SESSION["username"]
                        ?>
                          <li class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "xin chao ".$nameuser?>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Trang cá nhân</a>
                            <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                          </div>
                           </li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li class="cta"><a href="login.php">Đăng Nhập</a></li>
                        <?php
                        }
                    ?>
       	       	    			</ul>
       	       	    		</nav>
       	       	    	</div>
       	       	<!--     	<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative;top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
       	       	    </div> -->
       	       </div>
       </header>
       <!--        THIET KE TIEU DE CHO SPEAKERS -->
       <div class="site-section site-hero">
         <div class="image" style="background-image: url('./../images/MLRoundtable-Hero-2x1.png');">
            <div class="container">
              <div class="row align-items-center">
                 <div class="col-md-10">
                  <span class="d-block mb-3 caption" data-aos="fade-up">Cập Nhật</span>
                  <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Tin Tức</h1>
                 </div>
              </div>
              </div>
            </div>
       </div>
       <div class="container">
        <div class="site-section">
            <div class="col-md-10">
              <div class="row-md-11">
                <h2 style="margin-top: 50px;margin-bottom: 20px;">Danh Sách Đăng kí</h2>
                <p style="margin-bottom: 50px;">Số người tham gia được hệ thống cập nhật liên tục</p>    
              </div>
            </div>
            <div class="col-md-10">   
            <div class="row-md-11"> 
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Họ Đệm</th>
                      <th>Tên</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Triệu Tử</td>
                      <td>Long</td>
                      <td>long@example.com</td>
                    </tr>
                    <tr>
                      <td>Tào Mạnh</td>
                      <td>Đức</td>
                      <td>duc@example.com</td>
                    </tr>
                    <tr>
                      <td>Quan Vân</td>
                      <td>Trường</td>
                      <td>truong@example.com</td>
                    </tr>
                    <tr>
                      <td>Hạ Hầu</td>
                      <td>Đôn</td>
                      <td>don@example.com</td>
                    </tr>
                    <tr>
                      <td>Gia Cát</td>
                      <td>Lượng</td>
                      <td>luong@example.com</td>
                    </tr>
                    <tr>
                      <td>Điêu Thị</td>
                      <td>Thuyền</td>
                      <td>thuyen@example.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
  </div>
</div>
<!-- THIET KE FOOTER CHO ABOUT US -->
       <footer class="site-footer">
            <div class="container">
               <div class="row mb-5">
                 <div class="col-md-4">
                    <h2 class="footer-heading text-uppercase mb-4"><span class="text-white">Xem sự kiện</span></h2>
                    <p><span class="text-white">Hãy tham gia hội thảo với chúng tôi để biết thêm nhiều kiến thức bổ ích.Đăng kí ngay hôm nay để được chọn vị trí đẹp<span></span></p>
                 </div>
                 <div class="col-md-3 ml-auto">
                    <h2>MENU</h2>
                    <ul class="list-unstyled">
                          <li><a href="about.php">Thông tin</a></li>
                                <li><a href="speakers.php">Diễn Giả</a></li>
                                <li><a href="news.php">Tin Tức</a></li>
                                <li><a href="contact.php">Liên Hệ</a></li>
                    </ul>
                 </div>
                 <div class="col-md-4">
                  <h2 class="footer-heading text-uppercase mb-4"><span class="text-white">Liên Hệ</span>
                  </h2>
                  <p>
                    <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-youtube"></span></a>
                    <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                  </p>
                 </div>
               </div>
               <div class="row">
                <div class="col-md-12 text-center">
                   <div class="border-top pt-5">
                    <p><span class="text-white">Bản quyền và đơn vị tổ chức là công ti ABC</span></p>
                   </div>
                </div>
               </div>
            </div>
       </footer>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
</body>
</html>