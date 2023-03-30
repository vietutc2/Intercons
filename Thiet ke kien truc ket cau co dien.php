<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiết kế kiến trúc, kết cấu & cơ điện</title>
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
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon_logo.ico">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat';
            line-height: 1.6;
            font-weight: 300;
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
                    <a href="Architectural-Structural-MEPFDesign.php" class="btn-language left-r"><span
                            class="ic-en"></span> ENG</a>
                    <a href="Thiet ke kien truc ket cau co dien.php" class="btn-language active"><span
                            class="ic-vn"></span> VIE</a>
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
                    <li class="nav-item dropdown  aa">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" onclick="showDropDown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GIỚI THIỆU</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                              <a class="dropdown-item" href="LeDucQuyVI.php">Lê Đức Quý</a>
                              <a class="dropdown-item" href="congty.php">Công ty</a>
                            </div>
                          </li>
                            <li class="nav-item dropdown active aa">
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
                        style="width: 220px; height: 50px;left: 85%; bottom: 20px;background: #000000; border: solid 1px #fff;"
                        class="fixed-bottom"> <i class="fa fa-th-list" style="color: #fff;"></i> <a href="lienhe.php"
                            style="color: #fff;"> &nbsp;ĐẶT LỊCH THIẾT KẾ
                        </a></Button>
                </div>
            </div>
        </div>
    </header>

    <body>

        <div class="container-fluid">
            <ul class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="Thiet ke kien truc ket cau co dien.php">Dịch vụ</a></li>
                <li>Thiết kế kiến trúc, kết cấu & cơ điện</li>
            </ul>
            <hr style="margin-top: -10px; width: 87%;">
        </div>
        <div class="container-fluid">

            <div class="cover" style="padding-left: 100px; padding-right: 100px; padding-top: 80px;">

                <div class="blog-content">

                    <div class="col">
                        <h2
                            style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: -50px;padding-bottom: 50px;">
                            THIẾT KẾ KIẾN TRÚC</h2>
                        <img style="float: right; margin-left: 100px;" src="./images/khothi_q2_19.png" alt=""
                            width="605px" height="350px">
                    </div>
                    <div class="intro" style="font-size: 16px; line-height: 2;">
                        <p style="margin-top: 20px;">
                            Nghệ thuật kiến trúc và kỹ thuật thiết kế xây dựng, được phân biệt với các kỹ năng khác
                            liên quan đến xây dựng. Thực hành kiến trúc được sử dụng để đáp ứng các yêu cầu thực tế,
                            biểu đạt, và do đó nó phục vụ cả mục đích tiện dụng và thẩm mỹ. Mặc dù hai phạm trù này
                            có thể phân biệt được, nhưng chúng không thể tách rời nhau và trọng lượng tương đối cho
                            mỗi phạm trù có thể rất khác nhau. Bởi vì mọi khía cạnh xã hội, văn hóa đều có mối quan
                            hệ không gian với thế giới tự nhiên và với các mối quan hệ xã hội khác, các cấu trúc mà
                            nó tạo ra tiết lộ nhiều về môi trường của chung (bao gồm cả khí hậu và thời tiết), lịch
                            sử, nghi lễ, và khả năng cảm thụ nghệ thuật cũng như nhiều khía cạnh của cuộc sống hàng
                            ngày.
                        </p>

                    </div>
                      
                    <hr style="margin-top: 150px; width: 100%;">

                    <div class="col">
                        <h2
                            style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: 40px;padding-bottom: 50px;">
                            THIẾT KẾ KẾT CẤU</h2>
                        <img style="float: right; margin-left: 100px;" src="./images/thiet ke ket cau.jpg" alt=""
                            width="605px" height="350px">
                    </div>
                    <div class="intro" style="font-size: 16px; line-height: 2;">
                        <p style="margin-top: 20px;">
                            Một công trình dù là khu dân cư, biệt thự, resort, nhà hàng, khách sạn, khu thương mại
                            hay khu công nghiệp, ngoài các tiêu chuẩn về kiến trúc thẩm mỹ và tiện ích thì giải pháp
                            kết cấu của công trình là bước đầu tiên cần phải xét đến nhằm đảm bảo sự an toàn và bền
                            vững cho công trình.
                            <br>
                            Với hơn 10 năm kinh nghiệm tư vấn thiết kế cho nhiều công trình dân dụng, công nghiệp
                            tại Việt Nam, INTERCONS được biết đến là công ty uy tín và hiệu quả trong các giải pháp
                            kết cấu, quản lý tài chính và chất lượng cho công trình.
                        </p>
                    </div>
                        
                    <hr style="margin-top: 150px; width: 100%;">

                    <div class="col">
                        <h2 style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: 40px;padding-bottom: 50px;">
                            THIẾT KẾ CƠ ĐIỆN</h2>
                        <img style="float: right; margin-left: 100px;" src="images/Thiet ke co dien.jpg" alt=""
                            width="605px" height="350px">
                    </div>
                    <div class="intro" style="font-size: 16px; line-height: 2;">
                        <p style="margin-top: 20px;">
                            Chúng tôi luôn quan tâm đến tiêu chí tiết kiệm nguồn nước, năng lượng, nghiêm ngặt
                            tuân thủ quy định của Việt Nam và quốc tế về bảo vệ môi trường, ứng dụng các khoa
                            học kỹ thuật tiên tiến nhất, luôn cố gắng sáng tạo ra các phương án thiết kế hiện
                            đại nhằm gia tăng hiệu quả và lợi ích sử dụng lâu dài cho khách hàng.
                        </p>
                    </div>
                       
                    <hr style="margin-top: 200px; width: 100%;">

                </div>
            </div>
        </div>
        </div>

        <style>
            * {
                box-sizing: border-box
            }

            body {
                margin: 0
            }

            /* Slideshow container */
            .slides {
                padding-top: 80px;
            }

            .slideshow-container {
                position: relative;
                background-color: #222222;
                font-family: 'Libre Baskerville', serif;
                font-size: 25px;
            }

            /* Slides */
            .mySlides {
                display: none;
                padding: 80px;
                text-align: center;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -30px;
                padding: 16px;
                color: #888;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                position: absolute;
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
                color: white;
            }

            /* The dot/bullet/indicator container */
            .dot-container {
                text-align: center;
                padding: 20px;
                background-color: #222222;
            }

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
        </style>
        <div class="slides">
            <div class="slideshow-container">
                <div class="mySlides">
                    <q>Thu Hoài đặt niềm tin vào thẩm mỹ và gout thiết kế của đội ngũ kiến trúc sư Intercons.</q>
                    </br>
                    </br>
                    <p class="author">Mrs.Thu Hoài - Hoa hậu</p>
                </div>

                <div class="mySlides">
                    <q>Tôi rất hài lòng với dịch vụ tư vấn Intercons cung cấp, đội ngũ làm việc chuyên nghiệp. Công việc
                        hoàn thành đúng tiến độ, hiệu quả</q>
                    </br>
                    </br>
                    <p class="author">Mr. Hùng - Doanh nhân Hà Nội</p>
                </div>

                <div class="mySlides">
                    <q>Không gian được thiết kế bởi Intercons mang lại nguồn năng lượng tích cực cho người sử dụng.</q>
                    </br>
                    </br>
                    <p class="author">Mr. Thiên - Chủ nhà hàng Phương Xưa</p>
                </div>

                <div class="mySlides">
                    <q>Toàn bộ các cửa hàng của JOOLUX đều do đội ngũ kiến trúc sư Intercons thiết kế. JOOLUX đặt niềm
                        tin tuyệt đối vào dịch vụ tư vấn thiết kế Intercons cung cấp.</q>
                    </br>
                    </br>
                    <p class="author">Mr. Hiển – CEO JOOLUX</p>
                </div>



                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>


            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>




        <div class="content-wrapper container main">
        </div>


        <style>
            /* .row {
            padding-left: 100px;
            padding-right: 100px;
            margin-top: -10px;
        } */
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
                <p><span>Shop House TM1.27, Số 1, Đường số 1</span> Phường Phước Long B, TP. Thủ Đức, TP. Hồ Chí Minh
                </p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+84989948611</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a
                        href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSDXXkBTpHvjsQQdxXMQbvLzCTpmMxbVWQMzmxNqVGNGlmNmwXjFZGZvHrTZBkLfRfJLBmhV">interconsidc@gmail.com</a>
                </p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Giới thiệu Công ty</span>
                Công ty Cổ Phần TVTK và Kiểm định Xây dựng Intercons thành lập năm 2019, chuyên cung cấp các dịch vụ tư
                vấn xây dựng.
            </p>


            <div class="footer-icons">

                <a href="https://www.facebook.com/InterconsCorp" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/intercons_corp/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i
                        class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCh9W--3fwMqzEuE-9sMCzpg" target="_blank"><i
                        class="fa fa-youtube"></i></a>
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

        .footer-distributed {
            font-family: Open Sans;
            background-color: #000000;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 55px 50px;
            margin-top: -50px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            width: 40%;
        }

        /* The company logo */

        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Open Sans', cursive;
            margin: 0;
        }

        .footer-distributed h3 span {
            color: lightseagreen;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
            padding: 0;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            font-weight: 400;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-company-name {
            color: #444444;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center {
            width: 35%;
        }

        .footer-distributed .footer-center i {
            background-color: #33383b;
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

        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            font-weight: 400;
            vertical-align: middle;
            margin: 0;
        }

        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .footer-distributed .footer-center p a {
            color: lightseagreen;
            text-decoration: none;
            ;
        }

        .footer-distributed .footer-links a:before {
            content: "|";
            font-weight: 300;
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

        .footer-distributed .footer-right {
            width: 20%;
        }

        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span {
            display: block;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons {
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a {

            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;

            text-align: center;
            line-height: 35px;
            color: #F8F8FF;

            margin-right: 3px;
            margin-bottom: 5px;
        }




        /* If you don't want the footer to be responsive, remove these media queries */

        @media (max-width: 880px) {

            .footer-distributed {
                font: bold 14px sans-serif;
            }

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 768px) {

            .col h2 {
                font-size: 1.8rem !important;
            }

            .breadcrumb {
                width: 80%;
                margin-left: 25px;
            }

            ul.breadcrumb li {
                font-size: 13px;
            }

            .cover {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            /* .cover {
                padding-left: 10px !important;
                padding-right: 10px !important;
            } */
            
            .intro p {
                font-size: 14px;
            }

            .intro {
                display: flex;
                line-height: 1.8;
                padding-left: 10px !important;
                padding-right: 0px !important;
                margin-top: 0px !important;
            }

            img {
                width: 100%;
                height: auto;
            }

            .booklich Button {
                min-width: 100%;
                position: fixed;
                margin-left: -85%;
                bottom: 0px !important;
            }

        }
    </style>

</html>