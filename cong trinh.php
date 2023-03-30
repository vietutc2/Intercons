<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công trình</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
 integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="images/favicon_logo.ico">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
        }

        .span {
            font-size: 15px;
        }

        .breadcrumb {
            width: 90%;
            margin-left: 85px;
        }

        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #111111;
        }

        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: #fff;
            content: "/\00a0";
        }

        ul.breadcrumb li a {
            color: #666666;
            text-decoration: none;
        }

        ul.breadcrumb li a:hover {
            color: #666666;
            text-decoration: underline;
        }

        .team {
            margin: 4em 0;
            position: relative;

        }

        .team h1 {
            color: #1397e4;
            margin: 2em;
        }

        .team .item {
            position: relative;
            overflow: hidden;
        }

        .team .des {
            background: #1397e4;
            color: #fff;
            text-align: center;
            border-top-right-radius: 93%;
            transition: .3s ease-in-out;
            position: absolute;
            width: 88%;
            bottom: 24px;


        }

        .team .item:hover .des {
            height: 100%;
            background: #1397e47d;
            position: absolute;
            width: 89%;
            padding: 5em;
            top: 0;
            border-top-right-radius: 0;
        }
        .dropdown:hover .dropdown-menu {
    display: block;
}
    </style>
</head>

<body>
    <header>

    <div class="top container-fluid">
            <div class="row">
                <div class="top-left col-sm-8">
                    <a href="index.php" class="active">INTERCONS</a>
                    <span style="border-color: #666666; margin: 10px;">|</span>
                    <a href="index.php" class="active">DESIGN & BUILD</a>
                </div>
                <div class="top-language col">
                    <a href="tel:84914938844" style="color: #FFFFFF;"><span class="ic-phone"></span> HOTLINE:
                        +84989948611 </a>
                    <a href="projects.php" class="btn-language left-r"><span class="ic-en"></span> ENG</a>
                    <a href="cong trinh.php" class="btn-language active"><span class="ic-vn"></span> VIE</a>
                </div>
            </div>
            <hr>
            <div class="bottom container-mt3">

                <nav id="nav-bar" class="navbar navbar-expand-sm navbar-dark">
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo_2.png" alt="logo" style="width: 150px; height: 43px;">
                    </a>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown aa">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" onclick="showDropDown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GIỚI THIỆU</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                              <a class="dropdown-item" href="LeDucQuyVI.php">Lê Đức Quý</a>
                              <a class="dropdown-item" href="congty.php">Công ty</a>
                            </div>
                          </li>
                            <li class="nav-item dropdown aa">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DỊCH VỤ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                  <a class="dropdown-item" href="Thiet ke kien truc ket cau co dien.php">Thiết kế kiến trúc, kết cấu & cơ điện</a>
                                  <a class="dropdown-item" href="thiet ke noi that.php">Thiết kế nội thất</a>
                                  <a class="dropdown-item" href="quan ly va giam sat xay dung.php">Quản lý dự án và giám sát xây dựng</a>
                                </div>
                              </li>
                        <li class="nav-item active">
                            <a class="nav-link aa" href="cong trinh.php">CÔNG TRÌNH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link drop-content aa" href="doitac.php">ĐỐI TÁC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link aa" href="tuyendung.php">TUYỂN DỤNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link aa" href="lienhe.php">LIÊN HỆ</a>
                        </li>
                    </ul>
                </nav>
              <div class="booklich">
                <Button
                    style="width: 220px; height: 50px; left: 85%; bottom: 20px;background: #000000; border: solid 1px #fff;"
                    class="fixed-bottom"> <i class="fa fa-th-list" style="color: #fff;"></i> <a
                        href="lienhe.php" style="color: #fff;"> &nbsp;ĐẶT LỊCH THIẾT KẾ
                    </a></Button>
    </div>
            </div>
            </div>
    </header>
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="index.php">Trang chủ</a></li>
            <li>Công trình</li>
        </ul>
        <hr style="margin-top: -10px; width: 86%;">
    </div>
    <div class="container-mt3">
       
        <div class="wrap-main">
            <h2 style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: 50px;margin-bottom: 50px;">CÔNG TRÌNH</h2>
        </div>
        <hr style="margin-top: -10px; width: 84%;">
      
        <div class="row" style="padding-left: 100px; padding-right: 100px; padding-top: 40px;">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <a style="text-decoration: none;" href="Đà Lạt Villas.php" data-toggle="tooltip"
                    title="ĐÀ LẠT HIDEAWAY VILLA">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/Dalat villa.png" width="450" height="400">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">ĐÀ LẠT HIDEAWAY VILLA</h4>
                            <p class="card-text">
                            Đến với Đà Lạt Hideaway Villa bạn như được đắm chìm trong không gian xanh mướt của cỏ cây hoa tại villa. Với không gian thoáng mát, villa đầy đủ tiện nghi, nội thất sang trọng…


                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3></h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">

                <a style="text-decoration: none;" href="SASCO CIGAR TSN.php"
                    data-toggle="tooltip" title="SASCO CIGAR TSN">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/SASCO CIGAR TSN.png" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">SASCO CIGAR TSN</h4>
                            <p class="card-text">
                                
                                    SASCO CIGAR TSN do Intercons thiết kế, mang vẻ đẹp tinh tế sang trọng, công trình mang hơi hướng hiện đại và được nhiều nhà báo, khách hàng dùng các mỹ từ để mô tả...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>OFFICE BUILDINGS</h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4s col-sm-12">
                <a style="text-decoration: none;" href="VINHOME SYMNONYM.php" data-toggle="tooltip" title="VINHOME SYMNONYM">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/VINHOME SYMNONYM.png" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">VINHOME SYMNONYM</h4>
                            <p class="card-text">

                                Vinhome Symnonym mang dấu ấn hiện đại, sang trọng. Là nơi ở thích hợp của 
                                các gia đình hạnh phúc với đầy đủ tiện nghi gần gũi. Không gian nội thất hiện đại, màu sắc trầm ấm và sang trọng...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>HOTELS</h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <!-- hang 2 -->
            <div class="col-md-4 col-lg-4 col-sm-12">
                <a style="text-decoration: none;" href="THEMACHHOUSE.php" data-toggle="tooltip" title="THE MACH HOUSE">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/slide6.png" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">THE MACH HOUSE</h4>
                            <p class="card-text">

                                Công trình The match house của Intercons tại Thảo Điền. Công trình đánh dấu ấn cá nhân của Lê Đức Quý rất nhiều. Không gian hiện đại dễ nhìn, màu sắc trầm ấm và sang trọng...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>RESIDENTAL BUILDINGS</h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <a style="text-decoration: none;" href="khothiq2.php" data-toggle="tooltip" title="KHƠ THỊ QUẬN 2">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/slide5.png" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">KHƠ THỊ QUẬN 2</h4>
                            <p class="card-text">
                                Khơ thị quận 2 sử dụng tone màu sáng, nội thất sang trọng tạo nên không gian
                                trầm ấm, gần gũi. Không gian bên ngoài hòa quyện với thiên nhiên, rất thích hợp để thư giãn và tạo nguồn cảm hứng trong công việc...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>VILLAS</h3> 
                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4s col-sm-12">
                <a style="text-decoration: none;" href="VINHOME BẰNG LĂNG.php" data-toggle="tooltip"
                    title="VINHOME BẰNG LĂNG">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/vinhomlangbang_p.jpg" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">VINHOME BẰNG LĂNG
                            </h4>
                            <p class="card-text">
                                Không gian thiết kế theo phong cách tân cổ điển, ngoại thất màu trắng làm tone màu chủ đạo kết hợp với kính tạo ra không gian thơ mộng thu hút mọi ánh nhìn bên trong mang đậm phong cách tân cổ điển...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>INDUSTRIAL - CULTURE - EDUCATION - HEALTH - PROJECTS</h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <a style="text-decoration: none;" href="jooluxđồngkhởi.php" data-toggle="tooltip" title="JOOLUX ĐỒNG KHỞI">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/joolux 2.jpg" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">JOOLUX ĐỒNG KHỞI</h4>
                            <p class="card-text">
                              Công trình mang một không khí trẻ trung, hiện đại phù hợp với chủ nhân trẻ tuổi, năng động. Nội thất mang màu sắc tươi mới với những chất liệu cao cấp tô đậm thêm các sản phẩm trở nên cao cấp hơn...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>RESIDENTAL BUILDINGS</h3>

                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <a style="text-decoration: none;" href="pulmanHaiPhong.php" data-toggle="tooltip" title="WYNDHAM FIVESTAR HOTEL">
                    <div class="card">
                        <div class="card-img zoom">
                            <img src="images/Pullman (3).jpg" width="450" height="400">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">WYNDHAM FIVESTAR HOTEL</h4>
                            <p class="card-text">
                                Wyndham FiveStar Hotel được đặt ở trung tâm thành phố, với sự khác biệt về kiến trúc như thổi thêm làn gió mới vào các công trình khác ở đây. Ngoại thất gần gũi với thiên nhiên...
                            </p>
                        </div>
                        <!-- <div class="content">
                            <h3>VILLAS</h3> 
                        </div> -->
                        <div class="card-footer">
                            <!-- Tooltip -->

                            <!-- <a href="" class="card-link">Read more</a> -->
                        </div>
                        <hr style="min-width: 100%;">
                    </div>
                </a>
            </div>
        </div>

    </div>


    <div class="pt100"></div>
    

<div class="content-wrapper container main">
</div>
    <style>
       

        .work-img-rows {
            margin-top: 50px;
        }

        .work-img-rows .row {
            margin-bottom: 20px;

        }

        .work-img-rows .row img {
            max-width: 100%;
            width: 100%;
        }

        .image-horizontal {
            margin-bottom: 20px;
        }

        .image-vertical {
            margin-bottom: 20px;
        }

        img:not([src]):not([srcset]) {
            visibility: hidden;
        }
    </style>

    <script src="./app.js"></script>
</body>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Intercons</h3>

				<p class="footer-links">
					<a href="index.php" class="link-1">Trang chủ</a>
					
					<a href="LeDucQuyVI.php">Giới thiệu</a>
				
					<a href="Thiet ke kien truc ket cau co dien.php">Dịch vụ</a>
				
					<a href="cong trinh.php">Công trình</a>
					
					<a href="doitac.php">Đối tác</a>
					
					<a href="lienhe.php">Liên hệ</a>
				</p>

				<p class="footer-company-name">Copyright © 2022 Intercons. All Rights Reserved.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>53 Kênh Nước Đen, Bình Hưng Hòa A</span> Quận Bình Tân, TP. Hồ Chí Minh</p>
				</div>

                <div>
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
					<p><span>Shop House TM1.27, Số 1, Đường số 1</span> Phường Phước Long B, TP. Thủ Đức, TP. Hồ Chí Minh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+84989948611</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSDXXkBTpHvjsQQdxXMQbvLzCTpmMxbVWQMzmxNqVGNGlmNmwXjFZGZvHrTZBkLfRfJLBmhV">interconsidc@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
                <span>Giới thiệu Công ty</span>
					Công ty Cổ Phần TVTK và Kiểm định Xây dựng Intercons thành lập năm 2019, chuyên cung cấp các dịch vụ tư vấn xây dựng.
				</p>


				<div class="footer-icons">

                    <a href="https://www.facebook.com/InterconsCorp" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/intercons_corp/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCh9W--3fwMqzEuE-9sMCzpg" target="_blank"><i class="fa fa-youtube"></i></a>
					<a href="https://www.tiktok.com/@intercons" target="_blank"><i class="fab fa-tiktok"></i></a>
                    

				</div>

			</div>
</footer>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);
section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
    font-family: Open Sans;
    background-color:  #000000;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
    
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color: #444444;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
    
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
    background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	
	text-align: center;
	line-height: 35px;
    color:#F8F8FF;

	margin-right: 3px;
	margin-bottom: 5px;
}



/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
}
@media screen and (max-width: 768px) {
    
    .wrap-main h2{
        font-size: 1.8rem !important;
    }
    .wrap-main h4{
        font-size: 1.5rem !important;
    }
    .breadcrumb {
        width: 80%;
        margin-left: 25px;
    }
    ul.breadcrumb li{
        font-size: 12px;
    }
    .row{
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .row{
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .test-responsive{
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .row {
        margin-bottom: 0px;

    }
    .footer-center p {
        font-size: 13px !important;
    }
    .footer-center span {
        font-size: 13px !important;
    }

    img{
        width: 100%;
        height: auto;
    }
    .booklich Button{
        min-width: 100%;
        position: fixed;
        margin-left: -85%;
        bottom: -1px !important;
    }

   


}
</style>
</html> 