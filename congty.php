
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công ty</title>
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
                    <a href="Company.php" class="btn-language left-r"><span class="ic-en"></span> ENG</a>
                    <a href="congty.php" class="btn-language active"><span class="ic-vn"></span> VIE</a>
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
                    <li class="nav-item dropdown active aa">
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
                        <li class="nav-item">
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
        <hr style="margin-top: -10px; width: 87%;">
        <h1 style="text-align: center; margin-top: 50px;"><p>GIỚI THIỆU CÔNG TY</p></h1>
        <hr style="margin-top: 30px; width: 87%;">
    </div>
    <div class="container">
       

        <div class="row" style=" margin-top: 30px;">
            <div class="col-md-7">
                <img src="images/COMPANY1.png" class="img-fluid" style="height: 800px;">
            </div>
            <div class="col" style=" margin-left: -15px;line-height: 2;">
                <h5 style="font-size: 16px; color: #fff;">
                    <span style="font-weight: bold;">| Tổng quan</span>
                    <br>
                    <br>
                    Công ty Cổ Phần TVTK và Kiểm định Xây dựng Intercons thành lập năm 2018, chuyên cung cấp các dịch vụ tư vấn xây dựng bao gồm:
                    <br>
                    <br>
                    Thiết kế kiến trúc và nội thất <br>
                    Thiết kế kết cấu <br>
                    Thiết kế cơ điện <br>
                    Quản lý dự án và giám sát xây dựng <br>
                    Định giá, đấu thầu và quản lý chi phí xây dựng <br>
                    Thẩm tra thiết kế<br>
                    Kiểm định xây dựng<br><br>
                    Từ khi thành lập, Intercons đã không ngừng nỗ lực học hỏi, kiện toàn bộ máy tổ chức, sử dụng tối đa mọi nguồn lực và cải tiến công nghệ, nhằm mang lại hi ệu quả cao nhất công việc, nâng cao chất lượng sản phẩm, cũng như tăng khả năng cạnh tranh trong lĩnh vực tư vấn xây dựng. Từ đó, Intercons vươn lên khẳng định vị thế tại thi trường Việt Nam, tạo được uy tín cao đối với các nhà đầu tư trong và ngoài nước, xứng đáng với thương hiệu: “Xây giá trị - Tạo tương lai ”.
                    <br><br>
                    Cho đến nay, Intercons đã tham gia thực hiện nhiều cao ốc văn phòng, chung cư cao tầng, khách sạn, khu nghĩ dưỡng, bệnh viện, nhà máy, các loại công trình dân dụng và công nghiệp. Mọi dự án Intercons hoàn thành đều nhận được sự hài lòng cao nơi khách hàng, qua đó chúng tôi càng hoàn thiện, đúc kết nhiều kinh nghiệm phong phú, để phục vụ cho khách hàng tương lai.
                </h5>
            </div>

            <div class="col-md-5" style="margin-top: 50px;">
                <h5 style="font-size: 16px; color: #fff; margin-top: 20px; ">
                    <span style="font-weight: bold;">| TẦM NHÌN</span>
                    <br><br>
                    Chúng tôi định hướng phát triển thành một công ty tư vấn xây dựng hàng đầu Việt Nam và tiến đến trở thành tập đoàn xây dựng toàn cầu.
                    <hr>
                    <span style="font-weight: bold;">| SỨ MỆNH</span>
                    <br><br>
                    Cung cấp những dịch vụ chất lượng mang đến giá trị gia tăng rõ rệt và đo đếm được cho khách hàng. Đóng góp vào việc xây dựng một nền công nghiệp xây dựng tiến bộ. Xây dựng một môi trường làm việc giải phóng tối đa năng lực con người.
                    <hr>
                    <span style="font-weight: bold;">| GIÁ TRỊ CỐT LÕI</span>
                    <br><br>
                    <strong>Tiên phong: </strong> Tiên phong trong công nghệ - Tiên phong trong đổi mới - Tiên phong trong tạo sự khác biệt.
                    <br><br>
                    <strong>Đam mê: </strong> Lòng đam mê nghề nghiệp đồng hành với việc tạo ra sản phẩm tốt nhất.
                    <br><br>
                    <strong>Sáng tạo: </strong> Luôn đi tìm sự đổi mới.
                    <br><br>
                    <strong>Không ngừng học hỏi:</strong> Intercons luôn học hỏi để hoàn thiện và phục vụ khách hàng ngày càng tốt hơn.
                    <br><br>
                    <strong>Chính trực:</strong> Intercons có được niềm tin nơi khách hàng bằng sự chính trực của mình.
                    <br><br>
                    <strong>Làm việc nhóm:</strong> 
                    chúng tôi coi trọng phát triển đội ngũ và công cụ làm việc nhóm hiệu quả. Intercons có được đội nhóm xuất sắc từ việc sở hữu những cá nhân ưu tú.
                </h5>
            </div>
            <div class="col-md-2"></div>
            <div class="col" style=" margin-left: -15px; margin-top: 50px;">
                <img src="images/company2.jpg" class="img-fluid" style="height: 800px;">
            </div>

            <div class="col-md-6" style="margin-top: 50px;">
                <img src="images/company3.png" class="img-fluid" style="height: 800px;">
            </div>
            <div class="col" style=" margin-left: -15px; margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-6" style="margin-top: 20px;">
                        <h5 style="font-size: 16px; color: #fff;">
                            <span style="font-weight: bold; ">| NÂNG TẦM GIÁ TRỊ</span>
                            <br><br>
                            Chúng tôi tạo ra giá trị gia tăng ở những sản phẩm dịch vụ cung cấp, với triết lý giá trị mang lại cho khách hàng chính là động lực phát triển của công ty
                            <br><br>
                            <span style="font-weight: bold;">| CHẤT LƯỢNG CAO</span>
                            <br><br>
                            Đảm bảo sự hài lòng tuyệt đối của khách hàng về chất lượng công trình. Theo đó, đáp ứng mục tiêu phát triển bền vững, hài hòa lợi ích giữa các bên tham gia vào chuỗi giá trị của Intercons là kim chỉ nam, là chuẩn mực cho mọi hoạt động của Công ty.
                            <br><br>
                            <span style="font-weight: bold;">| ĐẢM BẢO TIẾN ĐỘ</span>
                            <br><br>
                            Thời gian là tiền bạc của khách hàng, công ty, nhân viên công ty và xã hội. Trong dự án xây dựng, việc đảm bảo tiến độ tạo ra giá trị gia tăng cho các bên tham gia dự án

                        </h5>
                    </div>
                    <div class="col" style="margin-left: 10px; margin-right: 14px; margin-top: 20px;">
                        <h5 style="font-size: 16px; color: #fff;">
                            <span style="font-weight: bold; ">| AN TOÀN TRÊN HẾT</span>
                            <br><br>
                            Chúng tôi quan tâm sâu sắc đến vấn đề an toàn lao động, vì sự hạnh phúc của công nhân, nhân viên, khách hàng, cộng đồng và xã hội là ưu tiên hàng đầu.
                            <br><br><br>
                            <span style="font-weight: bold;">| CHI PHÍ HỢP LÝ</span>
                            <br><br>
                            Giá trị mang lại cho khách hàng chính là chất lượng của dự án sau khi hoàn thành với chi phí thấp nhất.
                            <br><br>
                            <span style="font-weight: bold;">| BẢO VỆ MÔI TRƯỜNG</span>
                            <br><br>
                            Cùng với sự thành công của dự án, chúng tôi luôn quan tâm đến các giải pháp giảm thiểu tiếng ổn, khói bụi, vật liệu thân thiện với mối trường, công trình xanh …
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
<footer class="footer-distributed" >

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
        bottom: 0px !important;
    }
    
   


}

</style>
</html>