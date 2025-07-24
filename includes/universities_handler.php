<?php
/**
 * Universities Handler
 * 
 * Loads university data from JSON file
 */

/**
 * Get all universities from the JSON file
 * 
 * @return array Array of university data
 */
function getAllUniversities() {
    $jsonFile = __DIR__ . '/associated_universities.json';
    $universities = [];
    
    if (file_exists($jsonFile)) {
        $jsonContent = file_get_contents($jsonFile);
        $data = json_decode($jsonContent, true);
        
        if (json_last_error() === JSON_ERROR_NONE && isset($data['universities'])) {
            $universities = $data['universities'];
        } else {
            error_log("Error decoding universities JSON: " . json_last_error_msg());
        }
    } else {
        error_log("Universities JSON file not found: " . $jsonFile);
    }
    
    return $universities;
}

/**
 * Get featured universities only
 * 
 * @param int $limit Optional limit on number of universities to return
 * @return array Array of featured university data
 */
function getFeaturedUniversities($limit = null) {
    $universities = getAllUniversities();
    $featured = array_filter($universities, function($uni) {
        return isset($uni['featured']) && $uni['featured'] === true;
    });
    
    // Reset array keys
    $featured = array_values($featured);
    
    // Apply limit if specified
    if (is_numeric($limit) && $limit > 0) {
        $featured = array_slice($featured, 0, $limit);
    }
    
    return $featured;
}

/**
 * Get university by ID
 * 
 * @param int $id University ID to find
 * @return array|null University data or null if not found
 */
function getUniversityById($id) {
    $universities = getAllUniversities();
    
    foreach ($universities as $university) {
        if (isset($university['id']) && $university['id'] == $id) {
            return $university;
        }
    }
    
    return null;
}

/**
 * Echo universities carousel HTML
 * 
 * @param array $options Options for the carousel
 */
function echoUniversitiesCarousel($options = []) {
    $limit = isset($options['limit']) ? $options['limit'] : null;
    $featuredOnly = isset($options['featuredOnly']) ? $options['featuredOnly'] : true;
    
    $universities = $featuredOnly ? getFeaturedUniversities($limit) : getAllUniversities();
    
    if (empty($universities)) {
        echo '<div class="alert alert-info">No universities found.</div>';
        return;
    }
    
    // Generate a unique ID for this carousel instance
    $carouselId = 'universities-carousel-' . rand(1000, 9999);
    
    ?>
    <div class="container-fluid py-5" style="background-color: #fff;">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 mb-3" style="color: #0d6efd;">Associated Universities</h1>
                <p class="mb-0">Partner with leading educational institutions across Australia</p>
            </div>
            
            <div id="<?php echo $carouselId; ?>" class="universities-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($universities as $university): ?>
                <div class="university-item text-center">
                    <a href="<?php echo htmlspecialchars($university['website']); ?>" target="_blank" class="university-link">
                        <div class="university-logo">
                            <img src="<?php echo htmlspecialchars($university['logo']); ?>" alt="<?php echo htmlspecialchars($university['name']); ?>" class="img-fluid">
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-5">
                <a href="universities.php" class="btn btn-primary rounded-pill py-2 px-5">View All Partners</a>
            </div>
        </div>
    </div>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if jQuery and Owl Carousel are loaded
        if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
            // Initialize Owl Carousel
            jQuery("#<?php echo $carouselId; ?>").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                margin: 25,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>'
                ],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 5
                    }
                }
            });
        } else {
            console.error("jQuery or Owl Carousel not loaded");
            
            // Fallback to initialize later when libraries are loaded
            setTimeout(function() {
                if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
                    jQuery("#<?php echo $carouselId; ?>").owlCarousel({
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        smartSpeed: 1000,
                        margin: 25,
                        loop: true,
                        nav: true,
                        navText: [
                            '<i class="fas fa-chevron-left"></i>',
                            '<i class="fas fa-chevron-right"></i>'
                        ],
                        dots: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            576: {
                                items: 2
                            },
                            768: {
                                items: 3
                            },
                            992: {
                                items: 5
                            }
                        }
                    });
                }
            }, 1000);
        }
    });
    </script>
    <?php
} 