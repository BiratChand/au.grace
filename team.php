<?php 
$pageTitle = "Our Team";
$currentPage = "team";
include 'header.php'; 
include 'navbar.php'; 
?>
<!-- Page Specific Content Starts Here -->
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Team</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-4">Our Grace International Dedicated Team Member</h1>
            </div>
            <div class="row g-4 justify-content-center team-grid">
                <?php
                include 'includes/team_data.php';
                $teamMembers = getTeamMembers();
                $delay = 0.1;
                
                foreach ($teamMembers as $member) {
                    echo '<div class="col-md-6 col-lg-6 col-xl-6 mb-4 wow fadeInUp" data-wow-delay="' . $delay . 's">
                        <div class="card team-card h-100">
                            <div class="position-relative overflow-hidden">';
                            
                    // Only render image if it exists
                    if (!empty($member['image'])) {
                        echo '<img src="' . $member['image'] . '" class="card-img-top" alt="' . $member['name'] . '">';
                    } else {
                        echo '<div class="placeholder-image"></div>';
                    }
                    
                    echo '<div class="team-social">';
                    
                    // Only render social links if they exist
                    if (!empty($member['social']['linkedin'])) {
                        echo '<a href="' . $member['social']['linkedin'] . '" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>';
                    }
                    
                    if (!empty($member['social']['facebook'])) {
                        echo '<a href="' . $member['social']['facebook'] . '" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>';
                    }
                    
                    if (!empty($member['social']['twitter'])) {
                        echo '<a href="' . $member['social']['twitter'] . '" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>';
                    }
                    
                    echo '</div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">' . $member['name'] . '</h4>';
                                
                    if (!empty($member['position'])) {
                        echo '<span class="team-position">' . $member['position'] . '</span>';
                    }
                    
                    if (!empty($member['marn'])) {
                        echo '<div class="marn-badge">MARN: ' . $member['marn'] . '</div>';
                    }
                    
                    if (!empty($member['description'])) {
                        echo '<p class="card-text">' . $member['description'] . '</p>';
                    }
                    
                    echo '</div>
                        </div>
                    </div>';
                    $delay += 0.2;
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
<!-- Page Specific Content Ends Here -->
<?php 
include 'footer.php'; 
?>
