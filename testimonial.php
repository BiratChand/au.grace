<?php 
$pageTitle = "Testimonials";
$currentPage = "testimonial";
include 'header.php'; 
include 'navbar.php'; 
?>
<!-- Page Specific Content Starts Here -->
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Testimonial</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-light py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-100 rounded">
                        <h4 class="text-primary">Our Feedbacks</h4>
                        <h1 class="display-4 mb-4">Clients are Talking</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque soluta unde
                            itaque. Consequatur quam odit blanditiis harum veritatis porro.</p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read All Reviews <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                    impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
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
                                <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                    impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
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
                                <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                    impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
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
<!-- Page Specific Content Ends Here -->
<?php 
include 'footer.php'; 
?>
