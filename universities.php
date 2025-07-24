<?php
$pageTitle = "Associated Universities - Grace International";
$currentPage = "universities";
include 'header.php';
include 'navbar.php';
include 'includes/universities_handler.php';
?>

<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb py-5" style="background-image: url('img/Library-400x267.jpg');">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Associated Universities</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Universities</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Universities Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 mb-3 gradient-text">Our Educational Partners</h1>
            <p class="mb-5">Grace International has partnered with leading educational institutions across Australia to provide our students with the best possible education and career opportunities.</p>
        </div>

        <div class="universities-grid wow fadeInUp" data-wow-delay="0.3s">
            <?php
            $universities = getAllUniversities();
            
            if (empty($universities)) {
                echo '<div class="alert alert-info">No universities found.</div>';
            } else {
                foreach ($universities as $university) {
                    ?>
                    <div class="university-grid-item">
                        <div class="university-grid-logo">
                            <img src="<?php echo htmlspecialchars($university['logo']); ?>" alt="<?php echo htmlspecialchars($university['name']); ?>" class="img-fluid">
                        </div>
                        <h3 class="university-grid-name"><?php echo htmlspecialchars($university['name']); ?></h3>
                        <p class="university-grid-description"><?php echo htmlspecialchars($university['description']); ?></p>
                        <a href="<?php echo htmlspecialchars($university['website']); ?>" target="_blank" class="university-grid-link">Visit Website</a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- Universities Section End -->

<!-- Contact CTA Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Need Help Choosing the Right University?</h1>
                <p class="mb-4">Our experienced education counselors can help you select the right university and program based on your academic background, career goals, and personal preferences.</p>
                <p class="mb-4">Contact us today for a free consultation and take the first step towards your educational journey in Australia.</p>
            </div>
            <div class="col-lg-5 text-center wow fadeInUp" data-wow-delay="0.3s">
                <a href="contact.php" class="btn btn-primary rounded-pill py-3 px-5">Contact Us Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Contact CTA End -->

<?php
include 'form.php';
include 'footer.php';
?> 