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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Services</a>
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


<!------ Services section ------>
<div id="services-offer-mainhead" style="padding: 200px 0 300px 0;">
    <div class="container text-center">
        <h1 class="ban-head"><i>Professional Technology Assistance</i></h1>
        <p style="font-size: 20px; color: lightblue;">We make technology accessible !</p>
        <p>Let us discuss a service package that meets your needs. Tell us a little about your business,<br> and we will get back to you with some ideas as soon as possible.</p>
        <a href="contact.php" style="color: white; text-decoration: none;"><button class="contact-movebtn my-lg-3 my-3"><i class="fa-solid fa-phone fa-beat"></i>&nbsp; Contact Us</button></a>
        <h1 style="color: aqua; font-size: 40px; margin-top:10px;">Services We Offer &nbsp;<i class="fa-solid fa-gear fa-spin" style="color:white;"></i></h1>
        <a href="#services-off-main" style="text-decoration: none;"><button class="btn btn-light">Get Started <i class="fa-solid fa-angle-down fa-beat"></i></button></a>
    </div>
</div>

<div id="services-off-main" style="padding-bottom: 100px;">
    <div id="services-offer" style="padding-top: 100px;">
        <div class="container-fluid col-11">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 order-1 reveal">
                    <h1 class="home-head display-5"><span class="ban-head-1">Microsoft Products</span></h1>
                    <p class="my-lg-2 my-3 mb-5">Get your online business essentials Choose the best plan for your needs, We offer range for Microsoft Products from Business Basic to Business Enterprises Edition at best market price.</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-check fa-xl"></i>&nbsp; See offers</a></button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 reveal1">
                    <img src="./assets/img/services_images/microsoft_prod.png" style="border: 2px solid black; background-color: white; border-radius: 20px;" alt="Microsoft_Products" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="services-offer" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2 reveal">
                    <img src="./assets/img/services_images/business_solutions.webp" style="float: right; border-radius: 20px;" alt="Business_Solutions" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 reveal1">
                    <h1 class="display-5"><span class="ban-head-1">Business Solutions</span></h1>
                    <p class="my-lg-2 my-3 mb-5">We offer solutions like Smart Cloud services , Smartflo - Cloud Communication Suite ,  Hosted IVR Services, Call Centre CRM Solutions</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-phone fa-xl"></i>&nbsp; Request Callback</a></button>
                </div>    
            </div>
        </div>
    </div>

    <div id="services-offer" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 order-1 reveal">
                    <h1 class="display-5"><span class="ban-head-1">Business Data & Voice Services</span></h1>
                    <p class="my-lg-2 my-3 mb-5">Business requires high bandwidth, safe and smart connectivity. We provide various Data services like Internet Leased Line, Business Broadband , Smart Office  , Secured VPN and Voice services like Centrex , PRI , Mobile Connections.</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-phone fa-xl"></i>&nbsp; Request Callback</a></button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 reveal1">
                    <img src="./assets/img/services_images/voice_services.webp" style="border-radius: 20px;" alt="Voice_Services" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="services-offer" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2 reveal">
                    <img src="./assets/img/services_images/business_process_services.webp" style="float: right; border-radius: 20px;" alt="Business_Process_Services" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 reveal1">
                    <h1 class="display-5"><span class="ban-head-1">Business Process Services</span></h1>
                    <p class="my-lg-2 my-3 mb-5">We offer a wide range of services, such as Tele-Calling , Field Support , that can help you reduce costs, improve efficiency, and enhance customer satisfaction. We have a team of qualified and experienced professionals who use the latest tools and technologies to deliver high-quality results.</p>
                    <button class="req-callback reveal3"><a href="contact.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-phone fa-xl"></i>&nbsp; Request Callback</a></button>
                </div>    
            </div>
        </div>
    </div>
</div>

<!---- End of Services section  ---->


<!------ Our Clients section start ------>
<div id="our-clients">
    <div class="wrapper">
        <div class="container">
        <h1 class="text-center" style="color: white; font-size: 60px;"><i><b>Our Clients</b></i></h1><br>
            <div class="carousel owl-carousel">
                <div class="card card-1"> 
                    <img src="./assets/img/clients_images/Microsoft.webp" width="auto" height="130px" alt="Microsoft">
                </div>
                <div class="card card-2">
                    <img src="./assets/img/clients_images/airtel.webp" width="auto" height="130px" alt="Airtel">
                </div>
                <div class="card card-3">
                    <img src="./assets/img/clients_images/ola.webp" width="auto" height="130px" alt="Ola">
                </div>
                <div class="card card-4">
                    <img src="./assets/img/clients_images/tata_comm.webp" width="auto" height="130px" alt="Tata_Communication">
                </div>
                <div class="card card-5">
                    <img src="./assets/img/clients_images/tata_tele.webp" width="auto" height="130px" alt="Tata_Telecommunication">
                </div>
                <div class="card card-6">
                    <img src="./assets/img/clients_images/swiggy.webp" width="auto" height="130px" alt="Swiggy">
                </div>
                <div class="card card-7">
                    <img src="./assets/img/clients_images/omega_health.webp" width="auto" height="130px" alt="Omega_Health">
                </div>
            </div>
        </div>
    </div>
</div>

<!---- End of Our clients section ---->


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
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-twitter fa-xl"></a></i>
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