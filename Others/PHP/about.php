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
                        <a class="nav-link active dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
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


<!------ About Section ------>
<div id="about" style="padding: 100px 0;">
    <div class="container-fluid col-11">
        <div class="row pt-5">
            <div class="about-main col-lg-6 col-md-6 col-12 order-1 animate__animated animate__fadeInRight">
                <h1 style="color: white; font-size: 50px;">About Us</h1>
                <h1><span class="ban-head">Company Name</span></h1>
                <p>We are a team of seasoned experts from various business sectors. We partner with top-tier technology companies to offer our clients relevant, reliable, and cost-effective solutions based on our experience and understanding of markets.</p>
                <p style="color: lightgray;"><b>We assure you of our utmost satisfaction guarantee for the work we deliver.</b></p><br>
                <a href="services.php" style="color: white; text-decoration: none;"><button class="btn btn-danger my-lg-3 my-3" style="border: 2px solid white;"><i class="fa-solid fa-check"></i>&nbsp; Our Services</button></a>&nbsp;&nbsp;
            </div>
            <div class="about-image col-lg-6 col-md-6 col-12 py-lg-0 animate__animated animate__backInLeft">
                <img src="./assets/img/about_page/about.webp" style="border-radius: 20px;" alt="About_Company" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!---- End of About Company Section ---->


<!------ About Content Section ------>
<div id="about-cont">
    <div class="container content">
        <div class="box" style="background-color: white;">
            <img src="./assets/img/about_page/vision.webp" alt="Vision" class="img-fluid">
        </div>
        <div class="box" style="background-color: white;">
            <img src="./assets/img/about_page/mission.webp" alt="Mission" class="img-fluid">
        </div>
        <div class="box" style="background-color: white;">
            <img src="./assets/img/about_page/values.webp" alt="Values" class="img-fluid">
        </div>
    </div>
</div>

<!---- End of About Content Section ---->


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
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-facebook-official"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-linkedin-square"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-instagram"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white;"><i class="fa fa-twitter"></i></a>
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