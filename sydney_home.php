<?php
$pageTitle = "Grace International";
$currentPage = "index";
include 'header.php';
include 'navbar.php';
include 'database.php';
?>
<!-- Page Specific Content Starts Here -->
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-1">
            <img src="img/Melbourne.jpg" class="img-fluid w-100" alt="Image">
        </div>

        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">STUDY|WORK|MIGRATE
                </h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s; color:white ">in Australia
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" style="background-color: #198754;" href="form1.php">Apply
                    Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="migration.php">Read
                    More</a>

            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="img/passports.jpg" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-center p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">STUDY|WORK|MIGRATE</h1>
                <p class="mb-5 fs-5" style="color:white">in Australia
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" style="background-color: #198754;" href="form1.php">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="migration.php">Read More</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-3">
            <img src="img/world-map.jpg" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-end p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">STUDY|WORK|MIGRATE</h1>
                <p class="mb-5 fs-5" style="color:white">in Australia
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" style="background-color: #198754;" href="form1.php">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="migration.php">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="img/Aus.png" class="img-fluid w-100 rounded-top bg-white" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="text-primary"></h4>
                <h1 class="display-5 mb-4">Welcome to
                    Grace International Sydney</h1>
                <h4 class="text ps-4 mb-4">Where we connect life & learning.</h4>
                <div class="row g-4 text-center align-items-center justify-content-center">
                    <div class="col-sm-4">
                        <div class="bg-primary rounded p-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value fs-1 fw-bold text-dark"
                                    data-toggle="counter-up">26</span>
                                <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">K+</h4>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-center">
                                <p class="text-white mb-0">STUDENTS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bg-primary rounded p-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value fs-1 fw-bold text-dark"
                                    data-toggle="counter-up">500</span>
                                <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-center">
                                <p class="text-white mb-0">EDUCATION PARTNERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bg-primary rounded p-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value fs-1 fw-bold text-dark"
                                    data-toggle="counter-up">18</span>
                                <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;"></h4>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-center">
                                <p class="text-white mb-0">YEARS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid service py-5 testimonial-bg bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <!--  <h4 class="text-primary">Our Services</h4>-->
            <h1 class="display-4" style="color: white;">How We Can Help You</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/Migration.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="migration.php" class="h4 mb-4 d-inline-flex text-start">Migration</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/Education.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Education</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/Professional year.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Professional Year</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/naati pte.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">NAATI|PTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
<div class="container-fluid project">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">

            <h1 class="display-4">Featured Courses</h1>
        </div>
        <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-img">
                    <img src="img/Business studies.jpg" class="img-fluid w-100 rounded" alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <div class="project-icon mb-3"><i class="fas fa-chart-line fa-4x text-primary"></i>
                        </div>
                        <p class="text-dark fs-5 mb-3"></p>
                        <a href="#" class="h4">Business Studies</a>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="business_pc.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-img">
                    <img src="img/Engineering.jpg" class="img-fluid w-100 rounded" alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                        <p class="text-dark fs-5 mb-3"></p>
                        <a href="#" class="h4">Engineering</a>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item h-100">
                <div class="project-img">
                    <img src="img/Health and Science.jpg" class="img-fluid w-100 rounded" alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                        <p class="text-dark fs-5 mb-3"></p>
                        <a href="#" class="h4">Health and Science</a>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item h-100">
                <div class="project-img">
                    <img src="img/Information Technology.jpg" class="img-fluid w-100 rounded" alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                        <p class="text-dark fs-5 mb-3"></p>
                        <a href="#" class="h4">Information Technology</a>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blogs</h4>
            <h1 class="display-4">Latest Articles & News from the Blogs</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Investment</h4>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0"><span class="text-dark fw-bold">On</span> Mar 14, 2024</p>
                            <p class="mb-0"><span class="text-dark fw-bold">By</span> Mark D. Brock</p>
                        </div>
                    </div>
                    <div class="project-img">
                        <img src="img/blog-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="blog-plus-icon">
                            <a href="img/blog-1.jpg" data-lightbox="blog-1"
                                class="btn btn-primary btn-md-square rounded-pill"><i
                                    class="fas fa-plus fa-1x"></i></a>
                        </div>
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Revisiting Your Investment & Distribution Goals</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Business</h4>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0"><span class="text-dark fw-bold">On</span> Mar 14, 2024</p>
                            <p class="mb-0"><span class="text-dark fw-bold">By</span> Mark D. Brock</p>
                        </div>
                    </div>
                    <div class="project-img">
                        <img src="img/blog-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="blog-plus-icon">
                            <a href="img/blog-2.jpg" data-lightbox="blog-2"
                                class="btn btn-primary btn-md-square rounded-pill"><i
                                    class="fas fa-plus fa-1x"></i></a>
                        </div>
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Dimensional Fund Advisors Interview with Director</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                    <div class="mb-4">
                        <h4 class="text-primary mb-2">Consulting</h4>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0"><span class="text-dark fw-bold">On</span> Mar 14, 2024</p>
                            <p class="mb-0"><span class="text-dark fw-bold">By</span> Mark D. Brock</p>
                        </div>
                    </div>
                    <div class="project-img">
                        <img src="img/blog-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="blog-plus-icon">
                            <a href="img/blog-3.jpg" data-lightbox="blog-3"
                                class="btn btn-primary btn-md-square rounded-pill"><i
                                    class="fas fa-plus fa-1x"></i></a>
                        </div>
                    </div>
                    <div class="my-4">
                        <a href="#" class="h4">Interested in Giving Back this year? Here are some tips</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-4">Our Grace International Dedicated Team Member</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="img/Pawan-Thapaliya-600x428.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Pawan Thapaliya</h4>
                            <h6 class="text-white">MARN: 1466008</h6>
                            <p class="text-muted mb-0">Pawan, our principal migration agent, leads Grace
                                International’s Melbourne team. Registered since 2014, he excels in time
                                management, team leadership, and delivering exceptional migration services
                                with expertise and dedication.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="img/Viola-Rong-600x428.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Viola Rong</h4>
                            <h6 class="text-white">MARN: 1801289</h6>
                            <p class="text-muted mb-0">Certified migration agent since 2018 Viola has been
                                working in visa and migration for almost seven years. She has an eye for
                                detail and has excellent communication and interpersonal skills.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="img/Simrita-Ranjitkar-1.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Simrita Kanjitkar</h4>
                            <h6 class="text-white">MARN: 1798972</h6>
                            <p class="text-muted mb-0">Simrita, a highly focused and reliable registered
                                migration agent since 2017, works at Grace International’s Sydney office.
                                A team player with exceptional communication, she embraces challenges to
                                support clients effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="img/Sirat-Teji-400x400.jpeg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Sirat Teji</h4>
                            <h6 class="text-white">MARN: 22717800</h6>
                            <p class="text-muted mb-0">Sirat Teji, a skilled Registered Migration Agent at Grace
                                International Sydney, specializes in Australian Migration Law, offering tailored
                                solutions for General Skilled Migration, Partner, Student, and Temporary
                                Graduate
                                visas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial-bg bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h4 class="text-primary">Our Feedbacks </h4>
                    <h1 class="display-4 mb-4" style="color: white;">Clients are Talking</h1>
                    <p class="mb-4" style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum atque soluta unde
                        itaque. Consequatur quam odit blanditiis harum veritatis porro.</p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read
                        All Reviews <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae
                                nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-1.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae
                                nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-2.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae
                                nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-3.jpg" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- FAQ Start -->
<div class="container-fluid faq py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="pb-5">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-4">Get the Answers to Common Questions</h1>
                </div>
                <div class="accordion bg-light rounded p-4" id="accordionExample">
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button text-dark fs-5 fw-bold rounded-top" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseTOne">
                                What Does a Financial Advisor Do?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                                    nemo impedit,
                                    sapiente quis illo quia nulla atque maxime fuga minima ipsa
                                    quae cum
                                    consequatur, sit, delectus exercitationem odit officiis
                                    maiores! Neque, quidem
                                    corrupti modi architecto eos saepe incidunt dignissimos
                                    rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                What industries do you specialize in?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                                    nemo impedit,
                                    sapiente quis illo quia nulla atque maxime fuga minima ipsa
                                    quae cum
                                    consequatur, sit, delectus exercitationem odit officiis
                                    maiores! Neque, quidem
                                    corrupti modi architecto eos saepe incidunt dignissimos
                                    rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Can you guarantee for growth?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                                    nemo impedit,
                                    sapiente quis illo quia nulla atque maxime fuga minima ipsa
                                    quae cum
                                    consequatur, sit, delectus exercitationem odit officiis
                                    maiores! Neque, quidem
                                    corrupti modi architecto eos saepe incidunt dignissimos
                                    rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-0">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                What makes your business plans so special?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                                    nemo impedit,
                                    sapiente quis illo quia nulla atque maxime fuga minima ipsa
                                    quae cum
                                    consequatur, sit, delectus exercitationem odit officiis
                                    maiores! Neque, quidem
                                    corrupti modi architecto eos saepe incidunt dignissimos
                                    rerum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="faq-img RotateMoveRight rounded">
                    <img src="img/faq-img.jpg" class="img-fluid rounded w-100" alt="Image">
                    <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read
                        More Q & A <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<!-- form start -->



<!-- Page Specific Content Ends Here -->
<?php
include 'form.php';
include 'footer.php';
?>