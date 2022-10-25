<!DOCTYPE html>
<html dir="rtl" lang="ar">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>تعليم الاطفال</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">...جاري التحميل</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="home.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i> تعليم الاطفال </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="home.php" class="nav-item nav-link active">الصفحة الرئيسية</a>
                    <a href="about.html" class="nav-item nav-link">معلومات عنا</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">المحتويات</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="videos.html" class="dropdown-item">الفيديوهات</a>
                            <a href="math.html" class="dropdown-item">رياضيات</a>
                            <a href="test/test.html" class="dropdown-item">اختبار الانجليزي</a>
                            <a href="ar.html" class="dropdown-item">الحروف العربية</a>

                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">التواصل معنا</a>
                </div>
                <a href="index.html" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> خروج <i class="fa fa-arrow-left ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">

            </div>
        </div>



        <section class="contents" id="contents">
            <h2 class="title" style="
                display: flex;
                justify-content: center;
                color: #3a6cf4;
                font-size: 2.2em;
                font-weight: 800;
                margin-bottom: 30px;
            ">المحتويات</h2>
            <div class="content">
                <div class="content-card">
                    <a href="admin/media/uploads.php" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/kids.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"></p>
                            <strong class="content-title">
                                <span>الحروف الانجليزية</span>
                            </strong>
                        </div>
                    </a>
                </div>
                <div class="content-card">
                    <a href="admin/media/Arbletter/uploads.php" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/arbic.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"></p>
                            <strong class="content-title">
                                <span>الحروف العربية</span>
                            </strong>
                        </div>
                    </a>
                </div>
                <div class="content-card">
                    <a href="admin/media/colors/uploads.php" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/color.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"></p>
                            <strong class="content-title">
                                <span>الالوان</span>
                            </strong>
                        </div>
                    </a>
                </div>
                <div class="content-card">
                    <a href="admin/media/Shapes/uploads.php" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/shapes/Circle.png" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"></p>
                            <strong class="content-title">
                                <span>الاشكال</span>
                            </strong>
                        </div>
                </div>
                </a>
                <div class="content-card">
                    <a href="math.html" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/maths.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category">العمليات الرياضية</p>
                            <strong class="content-title">
                                <span>الضرب والطرح والجمع والقسمة</span>
                            </strong>
                        </div>
                    </a>
                </div>
                <div class="content-card">
                    <a href="videos.html" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/videos.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category">فيديوهات </p>
                            <strong class="content-title">
                                <span>فيديوهات متنوعة</span>
                            </strong>
                        </div>
                    </a>
                </div>

                <div class="content-card">
                    <a href="admin/media/Numbers/uploads.php" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/maths.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"></p>
                            <strong class="content-title">
                                <span>الأرقام الرياضية</span>
                            </strong>
                        </div>
                    </a>
                </div>
                <div class="content-card">
                    <a href="test/test.html" class="navbar-brand">
                        <div class="content-image">
                            <img src="img/test.jpg" />
                        </div>
                        <div class="content-info">
                            <p class="content-category"> </p>
                            <strong class="content-title">
                                <span>اختبار الانجليزي</span>
                            </strong>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">الوصف</h1>
                    <p></p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">فيديوهات</h3>
                                <p class="mb-0">..........</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">انجليزي</h3>
                                <p class="mb-0">..........</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">عربي</h3>
                                <p class="mb-0">..........</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">رياضيات</h3>
                                <p class="mb-0">الضرب والطرح والجمع والقسمة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">تعرف على المزيد حول عملنا وأنشطتنا الثقافية</h1>
                        <p></p>
                        <p class="mb-4"></p>
                        <div class="row g-4 align-items-center">
                            
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->







        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">ابقى على تواصل</h3>
                       
                       
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Childrenlearning@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">روابط سريعة</h3>
                        <a class="btn btn-link text-white-50" href="">معلومات عنا</a>
                        <a class="btn btn-link text-white-50" href="">اتصل بنا</a>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">معرض الصور</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="footer-menu">
                                        <a href="">الصفحة الرئيسية</a>
                                        <a href="">Cookies</a>
                                        <a href="">مساعدة</a>
                                        <a href="">FQAs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>