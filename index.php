<?php
$pageTitle = "Grace International";
$currentPage = "index";
include 'header.php';
include 'navbar.php';
include 'database.php';
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />
<!-- Page Specific Content Starts Here -->
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <?php
    // Location handler is already included in header.php

    // Get sliders for current city
    $sliders = getCitySliders();

    // Loop through sliders
    foreach ($sliders as $index => $slider) {
        $position = isset($slider['position']) ? $slider['position'] : 'center';
        $alignClass = '';

        if ($position == 'start') {
            $alignClass = 'text-start';
        } elseif ($position == 'end') {
            $alignClass = 'text-end';
        } else {
            $alignClass = 'text-center';
        }

        $imgClass = "header-carousel-item-img-" . ($index + 1);
    ?>
        <div class="header-carousel-item <?php echo ($position == 'center') ? 'mx-auto' : ''; ?>">
            <div class="<?php echo $imgClass; ?>">
                <img src="<?php echo $slider['image']; ?>" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner <?php echo $alignClass; ?> p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;"><?php echo $slider['title']; ?>
                    </h1>
                    <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                        style="animation-delay: 1.5s; color:white "><?php echo $slider['subtitle']; ?>
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="form1.php">Apply
                        Now</a>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mb-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="migration.php">Read
                        More</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<!-- Carousel End -->


<!-- Modern Welcome Section Start -->
<div class="container-fluid py-5 glossy-bg">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="glossy-card p-3" style="position: relative;">
                    <img src="img/Aus.png" class="img-fluid rounded-4" alt="Australia Map">
                    <div class="position-absolute" style="bottom: -20px; right: -20px; z-index: -1; width: 150px; height: 150px; border-radius: 50%; background: rgba(0, 123, 255, 0.1);"></div>
                    <div class="position-absolute" style="top: -20px; left: -20px; z-index: -1; width: 120px; height: 120px; border-radius: 50%; background: rgba(0, 123, 255, 0.05);"></div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                <?php
                // Location handler is already included in header.php

                // Get welcome content for current city
                $welcome = getCityWelcome();
                $title = isset($welcome['title']) ? $welcome['title'] : 'Welcome to Grace International';
                $subtitle = isset($welcome['subtitle']) ? $welcome['subtitle'] : 'Where we connect life & learning.';
                $stats = isset($welcome['stats']) ? $welcome['stats'] : [
                    'students' => '26K+',
                    'partners' => '500+',
                    'years' => '18'
                ];
                ?>
                <div class="ms-lg-4">
                    <h1 class="display-5 mb-4 gradient-text"><?php echo $title; ?></h1>
                    <h4 class="text-dark opacity-75 mb-4 fw-light"><?php echo $subtitle; ?></h4>

                    <div class="row g-4">
                        <div class="col-sm-4">
                            <div class="stat-card p-4 text-center h-100">
                                <div class="mb-2">
                                    <?php
                                    // Parse the students value to separate number and suffix
                                    preg_match('/^(\d+)(.*)$/', $stats['students'], $matches);
                                    $studentNum = isset($matches[1]) ? $matches[1] : '26';
                                    $studentSuffix = isset($matches[2]) ? $matches[2] : 'K+';
                                    ?>
                                    <span class="counter-value display-5 fw-bold text-primary" data-toggle="counter-up"><?php echo $studentNum; ?></span>
                                    <span class="display-5 fw-bold text-primary"><?php echo $studentSuffix; ?></span>
                                </div>
                                <p class="mb-0 text-dark fw-medium">STUDENTS</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat-card p-4 text-center h-100">
                                <div class="mb-2">
                                    <?php
                                    // Parse the partners value to separate number and suffix
                                    preg_match('/^(\d+)(.*)$/', $stats['partners'], $matches);
                                    $partnersNum = isset($matches[1]) ? $matches[1] : '500';
                                    $partnersSuffix = isset($matches[2]) ? $matches[2] : '+';
                                    ?>
                                    <span class="counter-value display-5 fw-bold text-primary" data-toggle="counter-up"><?php echo $partnersNum; ?></span>
                                    <span class="display-5 fw-bold text-primary"><?php echo $partnersSuffix; ?></span>
                                </div>
                                <p class="mb-0 text-dark fw-medium">EDUCATION PARTNERS</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat-card p-4 text-center h-100">
                                <div class="mb-2">
                                    <span class="counter-value display-5 fw-bold text-primary" data-toggle="counter-up"><?php echo $stats['years']; ?></span>
                                </div>
                                <p class="mb-0 text-dark fw-medium">YEARS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modern Welcome Section End -->


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
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-4">Our Grace International Dedicated Team Member</h1>
            <a href="team.php" class="btn btn-primary rounded-pill py-2 px-4">View All Team Members</a>
        </div>
        <div class="row g-4">
            <?php
            $delay = 0.1;

            $teamMembers = getCityTeamMembers();

            $teamMembers = array_slice($teamMembers, 0, 4);

            foreach ($teamMembers as $member) {
                echo '<div class="col-lg-6 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="' . $delay . 's">
                    <div class="card team-card h-100">
                        <div class="position-relative overflow-hidden">
                            <img src="' . $member['image'] . '" class="card-img-top" alt="' . $member['name'] . '">
                            <div class="team-social">
                                <a href="' . $member['social']['linkedin'] . '" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="' . $member['social']['facebook'] . '" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="' . $member['social']['twitter'] . '" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">' . $member['name'] . '</h4>
                            <span class="team-position">' . $member['position'] . '</span>
                            <div class="marn-badge">MARN: ' . $member['marn'] . '</div>
                            <p class="card-text">' . $member['description'] . '</p>
                        </div>
                    </div>
                </div>';
                $delay += 0.2;
            }
            ?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial-bg bg-light py-5 mb-0">
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

<!-- Branches part -->
<?php
// Assuming branches.json is in a 'data' directory relative to index.php
$branches_json_path = __DIR__ . "/data/branches.json";
$branches_data = [];

if (file_exists($branches_json_path)) {
    $json_content = file_get_contents($branches_json_path);
    $branches_data = json_decode($json_content, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        // Handle JSON decoding error
        error_log("Error decoding branches.json: " . json_last_error_msg());
        $branches_data = []; // Reset to empty array if there's an error
    }
} else {
    // Handle file not found error
    error_log("branches.json not found at: " . $branches_json_path);
}

// Convert PHP array to JSON string for JavaScript
$branches_json_for_js = json_encode($branches_data);
?>


<div class="container-fluid py-5" style="background-color: #eee;">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Branches</h4>
            <h1 class="display-4">Our Grace International Branches</h1>
        </div>
        <div id="map" style="width: 100%; height: 600px; margin-bottom: 3rem; border-radius: .5rem; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);"></div>

        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

        <script>
            // Load branches data from the PHP variable
            const branches = <?php echo $branches_json_for_js; ?>;

            // Initialize the map
            let map;
            let initialLat = 27.7172; // Default: Kathmandu, Nepal
            let initialLng = 85.3240;
            let initialZoom = 8; // Adjust initial zoom level as needed

            if (branches && branches.length > 0 && branches[0].latitude && branches[0].longitude) {
                initialLat = parseFloat(branches[0].latitude);
                initialLng = parseFloat(branches[0].longitude);
            }

            map = L.map('map').setView([initialLat, initialLng], initialZoom);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Create a LatLngBounds object to encompass all markers
            const bounds = L.latLngBounds([]);

            // Add markers for each branch
            branches.forEach(branch => {
                if (branch.latitude && branch.longitude) {
                    const lat = parseFloat(branch.latitude);
                    const lng = parseFloat(branch.longitude);
                    const latLng = L.latLng(lat, lng);

                    const marker = L.marker(latLng).addTo(map)
                        .bindPopup(`<h3>${branch.name}</h3><p>${branch.address || 'Address not available'}</p>`);

                    // Extend the bounds to include this marker
                    bounds.extend(latLng);
                } else {
                    console.warn(`Branch "${branch.name}" has missing latitude or longitude and will not be displayed.`);
                }
            });

            // Fit the map to the bounds of all markers, but only if there are markers to fit
            if (bounds.isValid()) {
                map.fitBounds(bounds);
            }
        </script>
    </div>
</div>


<!-- FAQ Start -->
<?php
include 'includes/faq_handler.php';
echoFAQs(['limit' => 4]);
?>
<!-- FAQ End -->

<!-- form start -->



<!-- Page Specific Content Ends Here -->
<?php
include 'form.php';
include 'footer.php';
?>