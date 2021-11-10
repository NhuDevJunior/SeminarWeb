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
	<title>Thông tin về chúng tôi</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  		<div class="site-mobile-menu-close mt-3">
  			<span class="icon-close2 js-menu-toggle"></span>
  		</div>
  	</div>
  	<div class="site-moblie-menu-body"></div>
  	</div>
<!--   	THIET KE MENU CHO ABOUT US -->
       <header class="site-navbar py-3" role=banner>
           <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-11 col-xl-2">
                    <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Hội<span class="text-success">Thảo</span> </a></h1>
               </div>
               <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li class="active"><a href="about.php">Thông Tin</a></li>
                    <li><a href="speakers.php">Diễn Giả</a></li>
                    <li><a href="news.php">Tin Tức</a></li>
                    <li><a href="contact.php">Liên Hệ</a></li>
                    <!-- border nut tham gia trong style.css voi id cta -->
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
         <!--       <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
               </div> -->
           </div>
       </header>
<!--        THIET KE TIEU DE CHO ABOUT US -->
        <div class="site-section site-hero">
          <div class="image" style="background-image: url('./../images//abouts.jpg');">
        	<div class="container">
        		<div class="row align-items-center">
        			<div class="col-md-10">
        				<span class="d-block mb-3 caption" data-aos="fade-up">Tìm Hiểu</span>
        				<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Về Chúng Tôi</h1>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
<!--         CHAO MUNG TOI VOI HOI THAO -->
        <div class="site-section">
        	<div class="container">
        		<div class="row mb-5">
        			<div class="col-lg-4">
        				<div class="site-section-heading" data-aos="fade-up" data-aos-delay="100">
        					<h2>Chào Mừng Đến Hội Thảo</h2>
        				</div>
        			</div>
        			<div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
        				<p>Sự thay đổi nhanh chóng của công nghệ trong Y tế có thể mang lại những bước đột phá ngoạn mục và phương pháp điều trị mới mà trước đây tưởng chừng bất khả thi.</p>
        				<p>Chuyển đổi số nói chung và Trí tuệ nhân tạo (AI) nói riêng cuối cùng đã có thể giúp các bệnh viện, tổ chức và doanh nghiệp y tế có được sự hài lòng cao nhất của khách hàng thông qua các chẩn đoán chính xác và chi tiết hơn, tỷ lệ điều trị thành công cao và trong thời gian ngắn hơn đồng thời cung cấp được dịch vụ tốt hơn và sự thuận tiện cho cả khách hàng và người cung cấp dịch vụ.</p>
        			</div>
        		</div>
        		<div class="row mb-5">
        			<div class="col-12" data-aos="fade-up" data-aos-delay="300">
        				<img src="../images//test.jpg" alt="Image" class="img-fluid">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-4" data-aos="fade-up" data-aos-delay="400"><span class="text-success">Hội Nghị</span></div>
        			<div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
        				 <p>Là hội thảo chuyên sâu đầu tiên về Ứng dụng trí tuệ nhân tạo (AI) trong Y tế tại Việt Nam, với sự tham gia chia sẻ của các giáo sư hàng đầu thế giới về AI.</p>
        				 <p>Có cái nhìn bao quát và cập nhật về cách thức Trí tuệ nhân tạo (AI) đang biến đổi toàn bộ ngành Y tế toàn cầu (tổng quan, xu hướng và thực tiễn). Lắng nghe chia sẻ của các giáo sư nổi tiếng về nhu cầu AI trong Y tế. Tiếp cận các công nghệ AI có thể được áp dụng ngay trong Y tế để phân tích hồ sơ y tế điện tử, phân tích chẩn đoán cơ mỡ thông qua quét CT và phát hiện các bệnh về da, ung thư da.</p>
        				 <p class="mb-5">Cơ hội kết nối quý giá với 100 khách tham dự là các giáo sư, bác sĩ, chuyên gia toán học-AI-IT và khách mời quan tâm trong ngành công nghệ thông tin và Y tế. Học hỏi từ các chuyên gia và thực tiễn nghiên cứu, áp dụng của các tổ chức, đồng nghiệp. Tạo dựng các mối quan hệ có giá trị mới.</p>
        			</div>
        		</div>
        	</div>
        </div>
       <!--  THIET KE DOI NGU -->
       <div class="site-section">
       	    <div class="container">
       	    	<div class="row mb-5 justify-content-center">
       	    		<div class="col-lg-4 mb-5">
       	    			<div class="site-section-heading" data-aos="fade-up">
       	    				 <h2>Đội Kĩ Thuật</h2>
       	    			</div>
       	    		</div>
       	    	</div>
       	    	<div class="row">
       	    		<div class="col-md-6 col-lg-4 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
       	    			<div class="testimony text-center">
       	    				<figure>
       	    					<img src="../images//nv5.jpg" alt="Image" class="img-fluid">
       	    				</figure>
       	    				<blockquote>
       	    					<p class="author mb-0">Hoàng Bá Ý</p>
       	    					<p class="text-muted mb-4">Kiểm Soát Viên</p>
       	    					<p>Người kiểm soát danh sách người tham dự xếp chỗ và ổn định chỗ ngồi</p>
       	    				</blockquote>
       	    			</div>
       	    		</div>
       	    		<div class="col-md-6 col-lg-4 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
       	    			<div class="testimony text-center">
       	    				<figure>
       	    					<img src="../images//nv9.jpg" alt="Image" class="img-fluid">
       	    				</figure>
       	    				<blockquote>
       	    					<p class="author mb-0">Hàn Công Nhu</p>
       	    					<p class="text-muted mb-4">Quản Lí</p>
       	    					<p>Người quản lí tiến trình chuẩn bị và chỉ đạo sản xuất hội thảo</p>
       	    				</blockquote>
       	    			</div>
       	    		</div>
       	    		<div class="col-md-6 col-lg-4 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
       	    			<div class="testimony text-center">
       	    				<figure>
       	    					<img src="../images//nv2.jpg" alt="Image" class="img-fluid">
       	    				</figure>
       	    				<blockquote>
       	    					<p class="author mb-0">Hà Ngọc Sang</p>
       	    					<p class="text-muted mb-4">Điều Phối Viên</p>
       	    					<p>Người trực tiếp thực hiện các chương trình,hướng dẫn các nhân viên thực hiện các vấn đề kĩ thuật như máy móc,dẫn chương trình,trang trí.....</p>
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