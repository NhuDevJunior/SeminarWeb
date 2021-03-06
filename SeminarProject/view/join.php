<?php
   ob_start();
   session_start();
   // if(!isset($_SESSION["login"]))
   // {
   //  header("location:login.php");
   // }
   
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>tham gia</title>
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
       	       	    				<li><a href="news.php">Tin Tức</a></li>
       	       	    				<li><a href="contact.php">Liên Hệ</a></li>
                                    <li class="cta"><a href="login.php">Đăng Nhập</a></li>
       	       	    			</ul>
       	       	    		</nav>
       	       	    	</div>
       	       	    <!-- 	<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative;top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div> -->
       	       	    </div>
       	       </div>
       </header>
  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
               <form action="#">

                        <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label class="" for="fname">Họ Đệm</label>
                          <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label class="" for="lname">Tên</label>
                          <input type="text" id="lname" class="form-control">
                        </div>
                      </div>

                     <div class="row form-group">
                          <div class="col-md-12">
                               <label class="" for="email">Email</label>
                               <input type="email" name="email" class="form-control">
                          </div>
                     </div>
                    
                <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="subject">Số CMT</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>
               <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="subject">Điện Thoại</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="message">Ghi Chú</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Đăng Kí" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

               </form>
          </div>
          <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="p-4 mb-3">
              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">CHÚ Ý</p>
              <p class="mb-4">- yêu cầu điền đầy đủ thông tin trước khi gửi đơn đăng kí</p>

            <!--   <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Số Điện Thoại</p> -->
                        <p class="mb-4">- chúng tôi sẽ gửi lịch trình và thông tin chi tiết vào email của bạn</p>

                        <p class="mb-4">- mọi thắng mắc liên hệ số: 0213 456 7895</p>
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
  </div>
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