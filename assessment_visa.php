<?php
include 'header.php';
include 'navbar.php';
?>


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Skill Assessment</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="migration.html">Migration Services</a></li>
            <li class="breadcrumb-item active text-primary">Skill Assessment</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid bg-light py-5">
    <div class="left">
        <div class="row justify-content-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="left">What is Skill Assessment?</h1>
                <p class="left">We continues to adapt to new ways of teaching, new disciplines of study and new ways
                    of learning. Your gift enriches the experience of all students by supporting efforts to recruit
                    top faculty, expand academic programs and respond to the emerging needs of our campus and our
                    world.
                    <br><br>
                    Not only does Kingster University provide you the practical skills that is necessary to
                    transition seamlessly into the workforce upon your graduation, but we also make sure that you
                    will have a good sense of social justice so that you make the transition responsibly.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Accounting</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Engineering</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Nursing and Midwifery</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Information Technology</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-4">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-start">Hospitality</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center text-center">
            <img src="img/assessment.jpg">
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>