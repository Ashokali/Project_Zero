<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Zero - Custom Template</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/icon/7550688.png">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./packages/bootstrap/css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="./packages/carousel/owl.carousel.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="./packages/animate/animate.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="./assets/fonts/poppins.css">
    <!-- Custom Template by Ashok kumar -->
</head>


<body>
<!------ Preloader Start ------>
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!---- Preloader End ---->


<!------ Header Navbar Start ------>
<header id="head">
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient fixed-top animate__animated animate__slideInDown" style="background: rgba(0,0,0,0.6); backdrop-filter: saturate(180%) blur(10px);">   
        <div class="container-fluid col-11">
            <a href="index.php" style="text-decoration: none;"><img src="./assets/img/icon/7550688.png" class="logo-cmpy" width="auto" height="65px" alt="Company_Name" style="color:white;">&nbsp;&nbsp;<span style="font-size: 30px; color:white;"> Project</span> &nbsp; <span style="font-size: 30px; color:aqua;">Zero</span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Voices and Data</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="voice_services.php">Voice Services</a>
                            <a class="dropdown-item" href="data_services.php">Data Services</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="saas.php">SaaS</a>
                            <a class="dropdown-item" href="cyber_security.php">Cyber Security</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="about.php">About Us</a>
                            <a class="dropdown-item" href="contact.php">Contact Us</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---- End of Header Navbar ---->


<!------ Home Section Start ------>
<div id="home" style="padding: 100px 0 200px 0;">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="home-main col-lg-6 col-md-6 col-12 order-1 pt-5 animate__animated animate__fadeInRight">
                <h1 class="home-head display-5">We Empower Businesses with <span class="ban-head">Technology</span></h1>
                <p style="color: lightcyan; padding-bottom: 16px;"><b>We assure you of our utmost satisfaction guarantee for the work we deliver.</b></p>
                <p><span style="font-size: 18px; color:lightblue;">Get started</span>&nbsp;&nbsp;<a href="#home-cont-main" style="text-decoration: none; color: white;"><button class="morebtn" style="font-size: 15px;"><i class="fa-solid fa-angle-right fa-xl" style="color:white;"></i></button></a></p>
                <a href="contact.php" style="color: white; text-decoration: none;"><button class="contact-movebtn my-lg-3 my-3"><i class="fa-solid fa-phone fa-beat"></i>&nbsp; Reach us</button></a>
            </div>
            <div class="home-image col-lg-6 col-md-6 col-12 py-lg-0 py-2 animate__animated animate__backInLeft">
                <img src="./assets/img/main_work.png" alt="main_image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!---- End of Home Section ---->


<!----- Home main content Start  ----->
<div id="home-cont-main">
    <div id="home-cont" style="padding-top: 70px;">
        <div class="container-fluid col-11">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 order-1 reveal">
                    <h1 class="ban-head-1 display-4"><span><i>Technical Experience</i></span></h1>
                    <p class="my-lg-2 my-3 mb-5">We are well-versed in a variety of operating systems, networks, and databases. We work with just about any technology that a small business would encounter. We use this expertise to help customers with small to mid-sized projects.</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-phone fa-xl"></i>&nbsp; Contact Us</a></button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 reveal1">
                    <img src="./assets/img/home/technical_experience.webp" style="border-radius: 20px;" alt="Technical_Experience" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    
    <div id="home-cont" style="margin-top: 120px;">
        <div class="container-fluid col-11">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2 reveal">
                    <img src="./assets/img/home/data_services.webp" style="float: right; border-radius: 20px;" alt="Data_Services" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 reveal1">
                    <h1 class="ban-head-1 display-4"><span><i>Data Services</i></span></h1>
                    <p class="my-lg-2 my-3 mb-5">Internet or Data Connectivity enables business faster communication and decision making within organisation , allows business to reach more customers and markets. We offer services based on your business requirements.</p>
                    <button class="req-callback reveal3"><a href="services.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-check fa-xl"></i>&nbsp; Our Services</a></button>
                </div>    
            </div>
        </div>
    </div>
    
    <div id="home-cont" style="margin-top: 120px;">
        <div class="container-fluid col-11">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 order-1 reveal">
                    <h1 class="ban-head-1 display-4"><span><i>Satisfaction Guaranteed</i></span></h1>
                    <p class="my-lg-2 my-3 mb-5">The world of technology can be fast-paced and scary. That's why our goal is to provide an experience that is tailored to your company's needs. No matter the budget, we pride ourselves on providing professional customer service. We guarantee you will be satisfied with our work.</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-phone fa-xl"></i>&nbsp; Request Callback</a></button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 reveal1">
                    <img src="./assets/img/home/satisfaction_guaranteed.webp" style="border-radius: 20px;" alt="Satisfaction_Guaranteed" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</div>

<!---- End of Home main content ---->


<!------ Subscribe section Start ------>
<div id="free-quote" class="free-quote">
    <div class="container-fluid col-10">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 reveal">
          <div class="section-heading">
            <h1 class="ban-head-1">Newsletter</h1>
            <h4>Subcribe us to get Latest news & Updates</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2 reveal1">
          <!-- <form id="subForm" name="submit-form" action="https://api.web3forms.com/submit" method="POST"> -->
          
          <form id="subForm" name="submit-form" action="#" method="POST">
            <div class="row">
                <!-- <div><input type="hidden" name="access_key" value="3b61bb72-83bd-4f80-8260-d1daad156465"></div>
                <div><input type="hidden" name="Contact Form"></div> -->
                <div class="col-lg-4 col-sm-4">
                    <fieldset>
                        <input id="subsname" type="text" name="name" class="website" placeholder="Your Name..." required>
                    </fieldset>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <fieldset>
                        <input id="subsemail" type="email" name="email" class="email" placeholder="Email Address..." required>
                    </fieldset>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <!-- <fieldset><button type="submit" value="Send An Email" class="main-button">Subscribe</button></fieldset> -->
                    <fieldset>
                        <button type="button" onclick="subMail()" value="Send An Email" class="main-button">Subscribe</button>
                    </fieldset>
                </div>
            </div>
          </form>
		    <h5 class="sent-notification text-center" style="color: crimson; margin-top: 20px;"></h5>
        </div>
      </div>
    </div>
</div>

<!---- End of Subscribe section ---->


<!------ Contact Section Start ------>
<div id="contact-main">
    <div class="container-fluid">
        <div class="contact-sec">
            <div class="text-center pt-3 pb-3">
                <div class="contact-head col-lg-06 col-md-06 col-12 order-1 pt-5">
                    <h1 class="ban-head-2 display-5">Lets discuss with Us</h1>
                    <p class="my-lg-2 my-3">Let us discuss a service package that meets your needs. Tell us a little about your business,<br> and we will get back to you with some ideas as soon as possible.</p>
                    <a href="contact.php" style="color: white; text-decoration: none;"><button class="contact-movebtn my-lg-3 my-3"><i class="fa-solid fa-phone fa-beat"></i>&nbsp; Contact Us</button></a>
                    <p><span>About Us</span>&nbsp;&nbsp;<a href="about.php" style="text-decoration: none; color: white;"><button class="morebtn"><i class="fa-solid fa-angle-right" style="color: white;"></i></button></a></p>
                </div>
                <div class="col-lg-06 col-md-06 col-12 py-lg-0 reveal2">
                    <img src="./assets/img/contact-home.png" width="50%" height="auto" alt="Contact-image" class="img-fluid contact-main-image">
                </div>
            </div>
        </div>
    </div>
</div>

<!---- End of Contact Section ---->


<!------ Floating Buttons Start ------>
    <!---- Top Scroll Button ---->
    <button class="scroll-floatbtn animate__animated animate__bounce" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up fa-xl"></i></button>

<!---- End of Floating Buttons ---->


<!------ Footer Start ------>
<footer>
    <div class="container-fluid">
        <div class="footer-main">
            <div class="row">
                <div class="col-md-12">
                    <p style="margin-top: 10px;">Copyright © 2023 ||&nbsp;<a href="index.php"> Project Zero..</a>&nbsp;&nbsp; All Right Reserved.</p>
                </div>
                <div class="social-icons">
                    <p><span style="color: darkblue;">Follow us on:</span> &nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-facebook-official fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-linkedin-square fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-instagram fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-twitter fa-xl"></i></a>
                    </p>
                </div>
            </div>
        </div>    
    </div>
</footer>

<!---- End of Footer ---->

    
    <!-- Bootstrap JS -->
    <script src="./packages/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Fontawesome Icons -->
    <script src="./packages/fontawesome/fontawesome.js"></script>
    <!-- Jquery File -->
    <script src="./packages/jquery/jquery-3.6.4.js"></script>
    <!-- Carousel JS -->
    <script src="./packages/carousel/owl.carousel.min.js"></script>
    <!-- JavaScript -->
    <script src="./assets/js/custom.js"></script>

    <!-- PHP mailer -->
	<script type="text/javascript">
        function subMail() {
            var subsname = $("#subsname");
            var subsemail = $("#subsemail");

            if (isNotEmpty(subsname) && isNotEmpty(subsemail)) {
                $.ajax({
                   url: 'subMail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       subsname: subsname.val(),
                       subsemail: subsemail.val(),
                   }, success: function (response) {
                        $('#subForm')[0].reset();
                        $('.sent-notification').text("Thank You !");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/647580d174285f0ec46e5a00/1h1lfudlj';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->


</body>

</html>