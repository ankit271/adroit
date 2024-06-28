<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Adroit Academy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top" style="background-color: dodgerblue;">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:rm5531574@gmail.com">rm5531574@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 9984957534, +91 6388542104</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="https://www.youtube.com/@ADROITENGLISHHUB" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/share/8KHa4CWakNjW8VV2/?mibextid=qi2Omg" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/adroitacademy12?igsh=MTc4MmM1YmI2Ng==" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Adroit Academy</h1>
                    <span></span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home<br></a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="./forms/contact.php">Student Info</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2><span>Welcome to </span><span class="accent">Adroit Academy</span></h2>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <section id="student_info">
            <div class="container">
                <div class="col-lg-4"></div>
                <div class="col-lg-12">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </section>


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-9 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Adroit Academy</span>
                    </a>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.youtube.com/@ADROITENGLISHHUB" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.facebook.com/share/8KHa4CWakNjW8VV2/?mibextid=qi2Omg" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/adroitacademy12?igsh=MTc4MmM1YmI2Ng==" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Beside Falahe Ummat Grils PG College</p>
                    <p>Near Soumya Hospital</p>
                    <p>Bhadohi - 221401</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+91 9984957534, +91 6388542104</span></p>
                    <p><strong>Email:</strong> <span>rm5531574@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© 2024 <span>Copyright</span> <strong class="px-1 sitename">Adroit Academy</strong> <span>All Rights Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>