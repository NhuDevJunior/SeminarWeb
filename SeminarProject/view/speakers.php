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
       	       	    				<li class="active"><a href="speakers.php">Diễn Giả</a></li>
       	       	    				<li><a href="news.php">Tin Tức</a></li>
       	       	    				<li><a href="news.php">Liên Hệ</a></li>
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
       	     <!--   	    	<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative;top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div> -->
       	       	    </div>
       	       </div>
       </header>
<!--        THIET KE TIEU DE CHO SPEAKERS -->
       <div class="site-section site-hero">
       	 <div class="image" style="background-image: url('./../images/MLRoundtable-Hero-2x1.png');">
       	    <div class="container">
       	    	<div class="row align-items-center">
       	    		 <div class="col-md-10">
       	    		 	<span class="d-block mb-3 caption" data-aos="fade-up">Đội Ngũ</span>
       	    		 	<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Diễn Giả</h1>
       	    		 </div>
       	    	</div>
       	    	</div>
       	    </div>
       </div>
<!--        THIET KE VI TRI CAC SPEAKER -->
       <div class="site-section">
       	<div class="container">
     <!--   		DOC GIA 01 -->
       		 <div class="row align-items-center speaker">
       		 	  <div class="col-lg-6 mb-5 mb-lg-0">
       		 	  	  <img src="../images/hotubao02.jpg" alt="Image" class="img-fluid">
       		 	  </div>
       		 	  <div class="col-lg-6 ml-auto">
       		 	  	   <h2 class="text-black mb-4 name" data-aos-delay="200">GS.TS. Hồ Tú Bảo</h2>
       		 	  	   <div class="bio pl-lg-5">
       		 	  	   	    <span class="text-uppercase text-success d-block mb-3" data-aos="fade-right" data-aos-delay="300">AI Researcher</span>
       		 	  	   	    <p class="mb-4" data-aos="fade-right" data-aos-delay="400">- Giáo sư Viện Khoa học và Công nghệ Tiên tiến Nhật Bản (JAIST), Giám đốc Phòng thí nghiệm Khoa học dữ liệu của Viện Nghiên cứu Cao cấp về Toán (VIASM) và Viện John von Neumann (JVN).<br>
- Tốt nghiệp đại học ngành Toán điều khiển tại Đại học Bách khoa Hà Nội (1978), Thạc sĩ (1984) và Tiến sĩ (1987) về Trí tuệ nhân tạo tại Đại học Paris 6, và Tiến sĩ Habil (1998) tại Đại học Paris 9, Cộng hoà Pháp.<br>
- Làm nghiên cứu và giảng dạy về AI, học máy, khoa học dữ liệu, tin y-sinh... trong gần 40 năm qua với các ứng dụng AI trong Y tế từ 1987.</p>
       		 	  	   </div>
       		 	  </div>
       		 </div>
       		               <!-- DOC GIA 02 -->
         <div class="row align-items-center speaker">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
            <img src="../images/nguyentiendung02.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 ml-auto order-lg-1">
            <h2 class="text-black mb-4 name" data-aos="fade-left" data-aos-delay="200">GS. Nguyễn Tiến Dũng</h2>
            <div class="bio pr-lg-5">
              <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-left" data-aos-delay="300">AI Researcher</span>
              <p class="mb-4" data-aos="fade-left" data-aos-delay="400">- Hiện là Giáo sư Toán tại Đại học Paul Sabatier Toulouse, là người sáng lập Công ty Giáo dục Sputnik Education ở Việt Nam và startup trí tuệ nhân tạo Torus Actions ở Pháp.<br>
- Giành huy chương vàng Olympic Toán quốc tế (IMO) (1985 ở tuổi 15), tiến sĩ toán học tại Đại học Strasbourg (1994), được phong hàm Giáo sư hạng nhất (bởi Ủy ban Quốc gia về đại học của Pháp năm 2007 khi mới 37 tuổi) và hàm giáo sư hạng đặc biệt (2015).<br>
- GS Dũng làm việc trong nhiều lĩnh vực toán học khác nhau, từ hình học, hệ động lực cho đến toán tài chính và trí tuệ nhân tạo.</p>
            </div>
          </div>
        </div>
        <!-- DOC GIA 03 -->
          <div class="row align-items-center speaker">
               <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                 <img src="../images/dinhvanhan.jpg" alt="Image" class="img-fluid">
               </div>
               <div class="col-lg-6 ml-auto">
                <h2 class="text-black mb-4 name" data-aos-delay="200">BS.PGS.TS. Đinh Văn Hân</h2>
                 <div class="bio pl-lg-5">
                   <span class="text-uppercase text-success d-block mb-3" data-aos="fade-right" data-aos-delay="300">Doctor</span>
                   <p class= "mb-4" data-aos="fade-right" data-aos-delay="400">- Hiện là Chủ nhiệm Khoa Labo nghiên cứu ứng dụng trong điều trị Bỏng - Viện Bỏng Quốc Gia Lê Hữu Trác. Chủ nhiệm Khoa Liền vết thương- Viện Bỏng Quốc Gia Lê Hữu Trác<br>
- Bác sĩ Đinh Văn Hân đã được đào tạo cơ bản về nuôi cấy tế bào da và tế bào gốc tại Singapore, đã chủ trì, tham gia nhiều công trình khoa học về nuôi cấy tế bào da, tế bào gốc và liền vết thương; tham dự nhiều hội nghị, hội thảo khoa học về các lĩnh vực liên quan.</p>
                 </div>
               </div>
          </div>
              <!-- DOC GIA 04 -->
          <div class="row align-items-center speaker">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
            <img src="../images/phamhoangkham.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 ml-auto order-lg-1">
            <h2 class="text-black mb-4 name" data-aos="fade-left" data-aos-delay="200">PGS.TS Phạm Hoàng Khâm</h2>
            <div class="bio pr-lg-5">
              <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-left" data-aos-delay="300">Doctor</span>
              <p class="mb-4" data-aos="fade-left" data-aos-delay="400">- Chủ nhiệm khoa da liễu bệnh viện 103</p>
            </div>
          </div>
        </div>
       	</div>
       	
       </div>
<!-- THIET KE SLIDE CHO SPEAKER -->
       <div class="site-section" data-aos="fade">
       	   <div class="container">
       	   	   <div class="row mb-5 justify-content-center">
       	   	   	    <div class="col-lg-4 mb-5">
       	   	   	    	<div class="site-section-heading">
       	   	   	    		<h2 class="text-center">Phát biểu</h2>
       	   	   	    	</div>
       	   	   	    </div>
       	   	   </div>

       	   	   <div class="slide-one-item home-slider owl-carousel">
       	   	   	     <div class="row justify-content-center">
       	   	   	     	<div class="testimony text-center col-md-5">
       	   	   	     	  <figure>
       	   	   	     	  	<img src="../images/hotubao02.jpg" alt="Image" class="img-fluid">
       	   	   	     	  </figure>
       	   	   	     	  <blockquote>
       	   	   	     	  	<p>&ldquo;AI ngày càng phát triển chúng ta cần kết hợp nó với các lãnh vực khác giúp tăng năng suất làm việc&rdquo;</p>
       	   	   	     	  </blockquote>
       	   	   	     	</div>
       	   	   	     </div>
       	   	   	     <div class="row justify-content-center">
       	   	   	     	<div class="testimony text-center col-md-5">
       	   	   	     	  <figure>
       	   	   	     	  	<img src="../images/nguyentiendung02.jpg" alt="Image" class="img-fluid">
       	   	   	     	  </figure>
       	   	   	     	  <blockquote>
       	   	   	     	  	<p>&ldquo;Chúng ta cần đón nhận công nghệ đây là thời đại 4.0&rdquo;</p>
       	   	   	     	  </blockquote>
       	   	   	     	</div>
       	   	   	     </div>
       	   	   	     <div class="row justify-content-center">
       	   	   	     	<div class="testimony text-center col-md-5">
       	   	   	     	  <figure>
       	   	   	     	  	<img src="../images/dinhvanhan.jpg" alt="Image" class="img-fluid">
       	   	   	     	  </figure>
       	   	   	     	  <blockquote>
       	   	   	     	  	<p>&ldquo;Y học cần phát triển hơn để cứu được nhiều người hơn&rdquo;</p>
       	   	   	     	  </blockquote>
       	   	   	     	</div>
       	   	   	     </div>
       	   	   	     <div class="row justify-content-center">
       	   	   	     	<div class="testimony text-center col-md-5">
       	   	   	     	  <figure>
       	   	   	     	  	<img src="../images/phamhoangkham.jpg" alt="Image" class="img-fluid">
       	   	   	     	  </figure>
       	   	   	     	  <blockquote>
       	   	   	     	  	<p>&ldquo;Y tế luôn là ưu tiên số một trong việc phát triển,sức khỏe là vàng bạc&rdquo;</p>
       	   	   	     	  </blockquote>
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