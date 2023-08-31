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


<!------ Contact Section Start ------>
<section id="contact">
    <div class="col-lg-4 col-md-6 col-sm-6 col-10 pt-5 mt-5 contact-main" style="margin: 10px 50px 50px 50px;">
        <!-- <form id="myForm" action="https://api.web3forms.com/submit" method="POST" class="contact-form-anim animate__animated animate__backInDown"> -->

        <form id="myForm" action="#" method="POST" class="contact-form-anim animate__animated animate__backInDown">
            <div class="text-center">
                <h3 class="py-lg-1 py-3" style="font-size: 40px;"><i class="fa-solid fa-phone fa-bounce" style="color: white;"></i>&nbsp;&nbsp;<span class="ban-head"><b>Contact &nbsp;Us</b></span></h3>
                <p style="color:lightgray;">Fill in your details to get a call back</p>
            </div>
            <!-- <div><input type="hidden" name="access_key" value="3b61bb72-83bd-4f80-8260-d1daad156465"></div>
            <div><input type="hidden" name="Contact Form"></div> -->
            <div class="mb-3">
                <input id="name" type="text" name="name" placeholder="Name" class="form-control" required>
            </div>
            <div class="mb-3">
                <input id="email" type="email" name="email" placeholder="Email*" class="form-control" required>
            </div>
            <div class="mb-3">
                <input id="mobile" type="text" name="mobile" placeholder="Mobile no*" class="form-control" required>
            </div>
            <div class="mb-3">
                <textarea id="message" name="message" class="form-control" placeholder="Share your message" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <!-- <button type="submit" value="Send An Email" class="submit-contactbtn">Submit &nbsp;<i class="fa-solid fa-angle-right fa-xl"></i></button> -->
                <button type="button" onclick="sendEmail()" value="Send An Email" class="submit-contactbtn">Submit &nbsp;<i class="fa-solid fa-angle-right fa-xl"></i></button>
            </div>
		    <h6 class="sent-notification text-center" style="color: lightgreen; margin-top: 20px;"></h6>
        </form>
    </div>
</section>


<!------ Contact Address ------>
<div id="contact-address">
    <div class="container-fluid">
        <div class="contact-sec">
            <div class="row pt-3 pb-3">
                <div class="contact-head col-lg-6 col-md-6 col-12 order-1 pt-5">
                    <h1 style="color: white;" class="text-center"><span class="ban-head">Company Name</span></h1><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="info-post" style="margin-top: 15px;">
                                <div class="icon text-center">
                                    <img src="./assets/img/icon/phone-icon.png" alt="Contact">
                                    &nbsp;&nbsp;<a href="#" style="text-decoration: none;">+919876543210</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-post" style="margin-top: 15px;">
                                <div class="icon text-center">
                                    <img src="./assets/img/icon/email-icon.png" alt="Email">
                                    &nbsp;&nbsp;<a href="#" style="text-decoration: none;">info@mail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-post" style="margin-top: 15px;">
                                <div class="icon text-center">
                                    <img src="./assets/img/icon/location-icon.png" alt="Location">
                                    &nbsp;&nbsp;<a href="#" style="text-decoration: none;">Chennai_India</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="text-center">
                        <p>Monday - Friday  : 9.30 am - 6.30 pm</p>
                        <p>Saturday - Sunday: Closed</p>
                        <a href="index.php" style="text-decoration: none;"><button class="back-homeBtn my-lg-3 my-3"><i class="fa-solid fa-house"></i>&nbsp; Back to Home</button></a>
                    </div>               
                </div>
                <div class="text-center col-lg-6 col-md-6 col-12 py-lg-0">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.23106089875!2d79.87933151977576!3d13.047985945577162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1693501938273!5m2!1sen!2sin" width="90%" height="450" style="border: 2px solid purple; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---- End of Contact section ---->


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
                        <a href="#" class="soc-icon" style="color: white"><i class="fa fa-facebook-official fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white"><i class="fa fa-linkedin-square fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white"><i class="fa fa-instagram fa-xl"></i></a>&nbsp;
                        <a href="#" class="soc-icon" style="color: white"><i class="fa fa-twitter fa-xl"></i></a>
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

    <!-- Web3forms -->
    <!-- <script src="https://web3forms.com/client/script.js" async defer></script> -->
    
    <!-- PHP mailer -->
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var mobile = $("#mobile");
            var message = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(mobile) && isNotEmpty(message)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       mobile: mobile.val(),
                       message: message.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully !");
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
