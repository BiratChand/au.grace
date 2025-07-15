<?php 
$pageTitle = "FAQs";
$currentPage = "faqs";
include 'header.php'; 
include 'navbar.php'; 
?>
<!-- Page Specific Content Starts Here -->
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our FAQs</h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">FAQs</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- FAQs Start -->
    <div class="container-fluid faq py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="pb-5">
                        <h4 class="text-primary">FAQs</h4>
                        <h1 class="display-4">Get the Answers to Common Questions</h1>
                    </div>
                    <div class="accordion bg-light rounded p-4" id="accordionExample">
                        <?php
                        include 'includes/faq_data.php';
                        $faqs = getFAQs();
                        
                        foreach($faqs as $index => $faq) {
                            $collapseId = 'collapse' . $faq['id'];
                            $headingId = 'heading' . $faq['id'];
                            $isFirst = $index === 0;
                            
                            echo '<div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header" id="' . $headingId . '">
                                    <button class="accordion-button ' . (!$isFirst ? 'collapsed' : '') . ' text-dark fs-5 fw-bold rounded-top" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="' . ($isFirst ? 'true' : 'false') . '"
                                        aria-controls="' . $collapseId . '">
                                        ' . $faq['question'] . '
                                    </button>
                                </h2>
                                <div id="' . $collapseId . '" class="accordion-collapse collapse ' . ($isFirst ? 'show' : '') . '" aria-labelledby="' . $headingId . '"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body my-2">
                                        <p>' . $faq['answer'] . '</p>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
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
    <!-- FAQs End -->
<!-- Page Specific Content Ends Here -->
<?php 
include 'footer.php'; 
?>
