<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architectural Structural MEPF Design</title>
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
                    <a href="indexENG.php" class="active">INTERCONS</a>
                    <span style="border-color: #666666; margin: 10px;">|</span>
                    <a href="indexENG.php" class="active">DESIGN & BUILD</a>
                </div>
                <div class="top-language col">
                    <a href="tel:84914938844" style="color: #FFFFFF;"><span class="ic-phone"></span> HOTLINE:
                        +84989948611 </a>
                    <a href="Architectural-Structural-MEPFDesign.php" class="btn-language active"><span class="ic-en"></span> ENG</a>
                    <a href="Thiet ke kien truc ket cau co dien.php" class="btn-language left-r"><span class="ic-vn"></span> VIE</a>
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
                    <a class="navbar-brand" href="indexENG.php">
                        <img src="./images/logo_2.png" alt="logo" style="width: 150px; height: 43px;">
                    </a>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown  aa">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" onclick="showDropDown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                              <a class="dropdown-item" href="LeDucQuyENG.php">Le Duc Quy</a>
                              <a class="dropdown-item" href="company.php">Company</a>
                            </div>
                          </li>
                            <li class="nav-item dropdown active aa">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                  <a class="dropdown-item" href="Architectural-Structural-MEPFDesign.php">Architectural, Structural & MEPF Design</a>
                                  <a class="dropdown-item" href="InteriorDesign.php">Interior Design</a>
                                  <a class="dropdown-item" href="projectconstructionmanagement.php">Project and construction management</a>
                                </div>
                              </li>
                        <li class="nav-item">
                            <a class="nav-link aa" href="projects.php">PROJECTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link drop-content aa" href="PARTNERS.php">PARTNERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link aa" href="CAREER.php">CAREER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link aa" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </nav>
                <div class="booklich">
                <Button
                    style="width: 220px; height: 50px; left: 85%; bottom: 20px;background: #000000; border: solid 1px #fff;"
                    class="fixed-bottom"> <i class="fa fa-th-list" style="color: #fff;"></i> <a
                        href="contact.php" style="color: #fff;"> &nbsp;BOOK AN APPOINTMENT
                    </a></Button>
                </div>
            </div>
            </div>
    </header>
<body>

    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="indexENG.php">Home</a></li>
            <li><a href="Architectural-Structural-MEPFDesign.php">Services</a></li>
            <li>Architectural, Structural & MEPF Design</li>
        </ul>
        <hr style="margin-top: -10px; width: 87%;">

       
    </div>
    <div class="container-fluid" >

        <div class="cover" style="padding-left: 100px; padding-right: 100px; padding-top: 80px;">

            <div class="blog-content">
                <div>
                    <div class="col">
                        <h2 style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: -50px;padding-bottom: 50px;">ARCHITECTURAL DESIGN</h2>
                        <img style="float: right; margin-left: 100px;"
                            src="./images/khothi_q2_19.png" alt="" width="605px" height="350px">
                    </div>
                    <div style="font-size: 16px; line-height: 2;">
                        <p>
                             The art and technique of designing and building, as distinguished from the skills associated with construction. The practice of architecture is employed to fulfill both practical and expressive requirements, and thus it serves both utilitarian and aesthetic ends. Although these two ends may be distinguished, they cannot be separated, and the relative weight given to each can vary widely. Because every society—settled or nomadic—has a spatial relationship to the natural world and to other societies, the structures they produce reveal much about their environment (including climate and weather), history, ceremonies, and artistic sensibility, as well as many aspects of daily life.
                        </p>
                        
                    </div>
                    <hr style="margin-top: 150px; width: 100%;">
                    <div class="col">
                        <h2 style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: 40px;padding-bottom: 50px;">STRUCTURAL DESIGN</h2>
                        <img style="float: right; margin-left: 100px;"
                            src="./images/thiet ke ket cau.jpg" alt="" width="605px" height="350px">
                    </div>
                    <div style="font-size: 16px; line-height: 2;">
                        <p>
                            One project, whether residential, villas, resorts, restaurants, hotels, commercial areas or industrial parks outside the standard of architectural aesthetics and utility, the structural part of the building is also the first step first need to consider to ensure the safety and sustainability of the project.
                            <br>
                            With over 10 years of experience design consultancy for most civil works, industrial in Vietnam, INTERCONS known and reputable company in the effective structural solutions, financial management and quality of works.
                        </p>

                        <hr style="margin-top: 150px; width: 100%;">
                        <div class="col">
                            <h2 style="font-family: 'Montserrat', sans-serif; text-align: center; font-size:3rem;margin-top: 40px;padding-bottom: 50px;">MEPF DESIGN</h2>
                            <img style="float: right; margin-left: 100px;"
                                src="./images/Thiet ke co dien.jpg" alt="" width="605px" height="350px">
                        </div>
                        <div style="font-size: 16px; line-height: 2;">
                            <p>
                                We’re always interested in water saving criteria, energy, strict compliance with the provisions of Vietnam and international environmental protection, scientific application of the most advanced techniques, always trying innovative the modern design options to increase the efficiency and long-term benefits for the use of customers.
                            </p>
                        
                            <hr style="margin-top: 280px; width: 100%;">
 
            </div>
                    </div>

                </div>
                </div>
                </div>
                </div>
           

                <style>
* {box-sizing: border-box}
body { margin:0}

/* Slideshow container */
.slides{
    padding-top: 80px;
}
.slideshow-container {
  position: relative;
  background-color:#222222;
  font-family: 'Libre Baskerville', serif;
  font-size:25px;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
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
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background-color:#222222;
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
<div class="slideshow-container">

<div class="mySlides">
  <q>Thu Hoai believes in the aesthetics and design of the Intercons team of architects.</q>
</br>
</br>
  <p class="author">Mrs.Thu Hoai - Miss</p>
</div>

<div class="mySlides">
  <q>I am very satisfied with the service of Intercons, the professional team. Work in a short time, effectively.</q>
  </br>
  </br>
  <p class="author">Mr.Hung - businessmen Ha Noi</p>
</div>

<div class="mySlides">
  <q>The space designed by Intercons brings positive energy to the users.</q>
  </br>
  </br>
  <p class="author">Mr.Thien - Restaurant owner Phuong Xua</p>
</div>

<div class="mySlides">
    <q>All JOOLUX stores are designed by Intercons architects. JOOLUX puts absolute trust in the design consulting service provided by Intercons.</q>
    </br>
    </br>
    <p class="author">Mr. Hien – CEO JOOLUX</p>
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
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
<footer class="footer-distributed" >

			<div class="footer-left">

				<h3>Intercons</h3>

				<p class="footer-links">
					<a href="indexENG.php" class="link-1">Home</a>
					
					<a href="LeDucQuyENG.php">About</a>
				
					<a href="Architectural-Structural-MEPFDesign.php">Services</a>
				
					<a href="projects.php">Projects</a>
					
					<a href="PARTNERS.php">Partners</a>
					
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Copyright © 2022 Intercons. All Rights Reserved.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>53 Kenh Nuoc Den, Binh Hung Hoa A  Ward,</span> Binh Tan District, Ho Chi Minh City</p> 
               

				</div>

                <div>
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
					<p><span>Shop House TM1.27, No. 1, Street No. 1,
</span> Phuoc Long B Ward, Thu Duc City, Ho Chi Minh City</p>
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
                <span>About Company</span>
                Intercons IDC Corp,. Was established in 2019, we offer the consultancy service of construction.
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
    margin-top :-40px;
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