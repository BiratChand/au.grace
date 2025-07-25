<?php
// Start session at the very beginning before any output
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Grace International"; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Header Styles -->
    <link href="css/header-styles.css" rel="stylesheet">
    
    <!-- WhatsApp Button Styles -->
    <link href="css/whatsapp.css" rel="stylesheet">
    
    <!-- Universities Styles -->
    <link href="css/universities.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script>
        window.onload = function() {
            document.getElementById('spinner').classList.remove('show');
        }
    </script>

    <?php
    // Pre-load location handler to avoid headers already sent issues
    include_once 'includes/location_handler.php';
    ?>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 d-lg-block">
        <div class="container px-0">
            <div class="row gx-0 align-items-center">
                <div class="col-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <?php
                        // Display city selector (location_handler.php already included in header)
                        echo generateCitySelectorHtml();

                        $cityContent = getCityContent();
                        ?>
                        <a href="tel:<?php echo $cityContent['contact_info']['phone']; ?>" class="text-white ms-4 me-2 me-lg-4">
                            <i class="fas fa-phone-alt text-primary me-2"></i>
                            <span class="d-none d-md-inline"><?php echo $cityContent['contact_info']['phone']; ?></span>
                        </a>
                        <a href="mailto:<?php echo $cityContent['contact_info']['email']; ?>" class="text-white me-0">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <span class="d-none d-md-inline"><?php echo $cityContent['contact_info']['email']; ?></span>
                        </a>

                    </div>
                </div>
                <div class="col-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="<?php echo $cityContent['contact_info']['facebook']; ?>" class="btn-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['twitter']; ?>" class="btn-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['instagram']; ?>" class="btn-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['linkedin']; ?>" class="btn-square rounded-circle me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0" style="z-index: 10;">
        <!-- The <nav> element will be in navbar.php -->
        <!-- End of content for header.php before navbar -->

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