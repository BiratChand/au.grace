<?php 
$pageTitle = "Our Projects";
$currentPage = "project";
include 'header.php'; 
include 'navbar.php'; 
?>
<!-- Page Specific Content Starts Here -->
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Projects</h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Project</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Project Start -->
    <div class="container-fluid project pt-5">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Projects</h4>
                <h1 class="display-4">Explore Our Latest Projects</h1>
            </div>
            <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="img/projects-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-chart-line fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Business Growth</p>
                            <a href="#" class="h4">Business Strategy And Investment Planning Growth Consulting</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="project-img">
                        <img src="img/projects-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Marketing Strategy</p>
                            <a href="#" class="h4">Product Sailing Marketing Strategy For Improve Business</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item h-100">
                    <div class="project-img">
                        <img src="img/projects-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Marketing Strategy</p>
                            <a href="#" class="h4">Product Sailing Marketing Strategy For Improve Business</a>
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

    <!-- FAQ Start -->
    <div class="container-fluid faq pb-5">
        <div class="container pb-5">
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="faq-img RotateMoveRight rounded">
                        <img src="img/faq-img.jpg" class="img-fluid rounded w-100" alt="Image">
                        <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read More Q & A <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
<!-- Page Specific Content Ends Here -->
<?php 
include 'footer.php'; 
?>
