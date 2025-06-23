<?php 
$pageTitle = "Student Services";
$currentPage = "student_service";
include 'header.php'; 
include 'navbar.php'; 
?>
<!-- Page Specific Content Starts Here -->
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Student Services</h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Student Services</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <br><br>
                <h1 class="display-4">Student Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                        <div class="mb-4">
                            <h4 class="text-primary mb-2">Education Service</h4>
                        </div>
                        <div class="project-img">
                            <img src="img/Education.jpg" class="img-fluid w-100 rounded" alt="Image">

                        </div>
                        <div class="my-4">
                            <a href="#" class="h4"></a>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="education_service.php">Explore
                            More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                        <div class="mb-4">
                            <h4 class="text-primary mb-2">Education Partners</h4>
                        </div>
                        <div class="project-img">
                            <img src="img/education2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="my-4">
                            <a href="#" class="h4"></a>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="educational_partners.php">Explore
                            More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                        <div class="mb-4">
                            <h4 class="text-primary mb-2">Scholarships</h4>
                        </div>
                        <div class="project-img">
                            <img src="img/Scholarship1.jpg" class="img-fluid w-100 rounded" alt="Image">

                        </div>
                        <div class="my-4">
                            <a href="#" class="h4"></a>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="scholarship_service.php">Explore
                            More</a>
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
