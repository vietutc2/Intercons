<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
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
                    <a href="indexENG.php" class="active">INTERCONS</a>
                    <span style="border-color: #666666; margin: 10px;">|</span>
                    <a href="indexENG.php" class="active">DESIGN & BUILD</a>
                </div>
                <div class="top-language col">
                    <a href="tel:84914938844" style="color: #FFFFFF;"><span class="ic-phone"></span> HOTLINE:
                        +84989948611 </a>
                    <a href="Company.php" class="btn-language active"><span class="ic-en"></span> ENG</a>
                    <a href="congty.php" class="btn-language left-r"><span class="ic-vn"></span> VIE</a>
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
                    <li class="nav-item dropdown active aa">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" onclick="showDropDown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                              <a class="dropdown-item" href="LeDucQuyENG.php">Le Duc Quy</a>
                              <a class="dropdown-item" href="company.php">Company</a>
                            </div>
                          </li>
                            <li class="nav-item dropdown aa">
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

    <div class="container-fluid">
      
        </ul>
        <hr style="margin-top: -10px; width: 87%;">
        <h1 style="text-align: center; margin-top: 50px;"><p>ABOUT COMPANY</p></h1>
        <hr style="margin-top: 30px; width: 87%;">
    </div>
    <div class="container">
       

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-7">
                <img src="images/COMPANY1.png" class="img-fluid" style="height: 800px;">
            </div>
            <div class="col" style=" margin-left: -15px;">
                <h5 style="font-size: 16px; color: #fff;">
                    <span style="font-weight: bold;">| OVERVIEW</span>
                    <br>
                    <br>
                    Intercons IDC Corp,. Was established in 2018, we offer the consultancy service of construction,
                    include:
                    <br>
                    <br>
                    Architectural and interior design <br>
                    Construction of Building <br>
                    Architectural design <br>
                    Structural design MEPF design <br>
                    Construction inspection <br><br>
                    Since its inception, Intercons has been making the great effort in enriching the construction
                    knowledge,
                    consolidating our organization, maximizing all resources and improving technology in order to
                    provide the most efficiency, the best quality, and the highest competitiveness capability in the
                    construction industry. Therefore, Intercons is affirming its position in Vietnam market, possessing
                    the
                    high prestige to local and abroad investors with the regarded character: “Build value – Create
                    Future”
                    <br><br>
                    Hitherto, Intercons has given the valued attendance in many construction projects, including office
                    buildings, high-rise apartment buildings, hotels, resorts, hospitals, factories, and all kinds of
                    civil or industrial projects. So far, all our participation has brought out the customers’
                    satisfaction, that become the precious experiences to serve our future customers.
                </h5>
            </div>

            <div class="col-md-5" style="margin-top: 50px;">
                <h5 style="font-size: 16px; color: #fff; margin-top: 20px;">
                    <span style="font-weight: bold;">| VISSON</span>
                    <br><br>
                    Intercons has oriented developing into a leading company in the construction consultant in Vietnam and
                    expanding abroad.
                    <hr>
                    <span style="font-weight: bold;">| MISSON</span>
                    <br><br>
                    Provide quality services to bring added- value and measurable apparent to customers.
                    Contribute to build a progress and effectiveness of the construction industry. Develop a work
                    environment to use the maximum human capacity.
                    <hr>
                    <span style="font-weight: bold;">| CORE VALUES</span>
                    <br><br>
                    <strong>Pioneer:</strong> Pioneering in technology, innovation and making a difference.
                    <br><br>
                    <strong>Passion:</strong> Parallel passion at work with creating the best products.
                    <br><br>
                    <strong>Creative:</strong> Always looking for the better
                    <br><br>
                    <strong>Never stop learning:</strong> For improving our construction knowledge and service.
                    <br><br>
                    <strong>Integrity:</strong> Intercons gets the customer’s trust by their integrity.
                    <br><br>
                    <strong>Teamwork:</strong> We is interested in development of teamwork. Intercons has the excellent
                    teams from the best individual person.
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
                            <span style="font-weight: bold;">| RAISE VALUE</span>
                            <br><br>
                            We create added value in the products and services provided, with the philosophy of value
                            for customers is the motivation of development of the company.
                            <br><br>
                            <span style="font-weight: bold;">| HIGHT QUALITY</span>
                            <br><br>
                            We bring to customers the satisfaction of quality. The target of sustainable development to
                            balance benefits of every project participants, who participate in the valuable chain of
                            Intercons, is always the guide, the standard for every activity of the Company.
                            <br><br>
                            <span style="font-weight: bold;">| SCHEDULE ENSURED</span>
                            <br><br>
                            Time is money of clients, company, staffs and society. In construction projects, ensuring
                            the planed schedule makes the added value to every project participants.

                        </h5>
                    </div>
                    <div class="col" style="margin-left: 10px; margin-right: 14px; margin-top: 20px;">
                        <h5 style="font-size: 16px; color: #fff;">
                            <span style="font-weight: bold; ">| SAFETY FIRST</span>
                            <br><br>
                            We seriously care about working safety, for the happiness worker, staffs, clients, community
                            and society.
                            <br><br><br>
                            <span style="font-weight: bold;">| REASONABLE EXPENSE</span>
                            <br><br>
                            The value brought to customers is the quality of the project after completion with the
                            lowest expense.
                            <br><br>
                            <span style="font-weight: bold;">| PROTECT THE ENVIRONMENT</span>
                            <br><br>
                            Along with the success of the project, we are always interested in solutions to reduce
                            progress, smoke, friendly materials, green buildings ...
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
<footer class="footer-distributed">

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