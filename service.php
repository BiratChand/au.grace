<?php
$pageTitle = "Our Services";
$currentPage = "service";
include 'header.php';
include 'navbar.php';
?>
<!-- Page Specific Content Starts Here -->
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-primary">Services</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1>Our Services</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/service-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="education_service.php" class="h4 mb-4 d-inline-flex text-start"> Education Service</a>
                            <p class="mb-4">Since 2006, Grace International has provided comprehensive solutions, helping students study in top universities in Australia, the UK, and Canada.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="education_service.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/service-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="migration.php" class="h4 mb-4 d-inline-flex text-start">Migration Service</a>
                            <p class="mb-4">As a top migration agent, we offer expert visa and immigration services, guiding you through every stage of migrating to Australia.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="migration.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/service-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="naati_pte.php" class="h4 mb-4 d-inline-flex text-start">Pearson Test of English</a>
                            <p class="mb-4">The Pearson Test of English (PTE) is a leading computer-based exam, widely accepted for study, work, and migration visas worldwide.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="naati_pte.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="img/service-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="scholarship_service.php" class="h4 mb-4 d-inline-flex text-start">Abroad Studies</a>
                            <p class="mb-4">Since 2006, we have connected Nepal's students with global universities through our trusted, reliable service and honest student counseling.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="scholarship_service.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  <div class="col-12">
                <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                    href="#">Services More</a>
            </div> -->
        </div>
    </div>
</div>
<!-- Services End -->

<div class="container-fluid testimonial-bg bg-light py-5 mb-0">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h4 class="text-primary">Our Feedbacks </h4>
                    <h1 class="display-4 mb-4" style="color: white;">Clients are Talking</h1>
                    <p class="mb-4" style="color: white;"></p>
                    <!-- <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read
                        All Reviews <i class="fas fa-arrow-right ms-2"></i></a> -->
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">After my Bachelors, my only wish was to study abroad. I had chosen a destination but not a course due to insufficient knowledge of opportunities. Grace International cleared my dilemma, taking full responsibility from briefing me on course details to selecting the best university and city. For similar efficiency with your career, embrace your dream with Grace. </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Dibika Darshandari</h5>
                                <p class="mb-0">Master of International Nursing - UOW</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/woman (1).png" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">I'm glad I chose Grace International for my studies; they fully assisted and guided me through the entire process. I believe Grace is the best place for any student planning to study abroad. Their support, the administration, and the welcoming office environment are all truly impressive. Everything was completed right on time, without any deferrals. </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Nisha Baniya</h5>
                                <p class="mb-0">MBA - CSU</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/woman.png" class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">I feel fortunate to be related with the Grace International and satisfied with their entire service. I am extremely grateful to the consultancy for their support in making my processing much more efficient than I expected. I vouch for the organization and encourage to visit Grace International if you are looking for best consultancy for abroad study.
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Sanjeet Parajuli</h5>
                                <p class="mb-0">Bachelor of Business - Torrens University</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/man.png" class="rounded-circle p-2"
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

<?php
include 'includes/faq_handler.php';
echoFAQs(['limit' => 4]);
?>

<!-- FAQ End -->

<!-- Page Specific Content Ends Here -->
<?php
include 'footer.php';
?>