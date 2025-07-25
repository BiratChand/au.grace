<?php
$pageTitle = "Grace International";
$currentPage = "blog";
include 'header.php';
include 'navbar.php';
?>
<!-- Page Specific Content Starts Here -->
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blogs</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
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
<!-- Page Specific Content Ends Here -->
<?php
include 'footer.php';
?>