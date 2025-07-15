<?php
/**
 * FAQ Handler - Component for displaying FAQs
 * 
 * Usage: include this file and call displayFAQs([$options])
 * Options:
 *   - limit: Number of FAQs to display (default: all)
 *   - category: Filter by category if available
 *   - show_image: Whether to show the FAQ image (default: true)
 */

// Include FAQ data source
require_once __DIR__ . '/faq_data.php';

/**
 * Display FAQs with the specified options
 */
function displayFAQs($options = []) {
    // Default options
    $defaults = [
        'limit' => 0, // 0 means all
        'category' => '',
        'show_image' => true,
        'title' => 'Get the Answers to Common Questions',
        'subtitle' => 'FAQs'
    ];
    
    // Merge options with defaults
    $options = array_merge($defaults, $options);
    
    // Get FAQs data
    $faqs = getFAQs();
    
    // Apply category filter if specified
    if (!empty($options['category'])) {
        $filtered = [];
        foreach ($faqs as $faq) {
            if (isset($faq['category']) && $faq['category'] === $options['category']) {
                $filtered[] = $faq;
            }
        }
        $faqs = $filtered;
    }
    
    // Apply limit if specified
    if ($options['limit'] > 0 && count($faqs) > $options['limit']) {
        $faqs = array_slice($faqs, 0, $options['limit']);
    }
    
    // Start output buffering to return HTML
    ob_start();
    ?>
    
    <div class="container-fluid faq py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-<?php echo $options['show_image'] ? '6' : '12'; ?> wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="pb-5">
                        <h4 class="text-primary"><?php echo htmlspecialchars($options['subtitle']); ?></h4>
                        <h1 class="display-4"><?php echo htmlspecialchars($options['title']); ?></h1>
                    </div>
                    <div class="accordion bg-light rounded p-4" id="accordionFAQs">
                        <?php foreach ($faqs as $index => $faq): 
                            $collapseId = 'collapse' . $faq['id'];
                            $headingId = 'heading' . $faq['id'];
                            $isFirst = $index === 0;
                        ?>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                                <button class="accordion-button <?php echo (!$isFirst) ? 'collapsed' : ''; ?> text-dark fs-5 fw-bold rounded-top" 
                                        type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#<?php echo $collapseId; ?>" 
                                        aria-expanded="<?php echo ($isFirst) ? 'true' : 'false'; ?>" 
                                        aria-controls="<?php echo $collapseId; ?>">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </button>
                            </h2>
                            <div id="<?php echo $collapseId; ?>" 
                                 class="accordion-collapse collapse <?php echo ($isFirst) ? 'show' : ''; ?>" 
                                 aria-labelledby="<?php echo $headingId; ?>" 
                                 data-bs-parent="#accordionFAQs">
                                <div class="accordion-body my-2">
                                    <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if ($options['show_image']): ?>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="faq-img RotateMoveRight rounded">
                        <img src="img/faq-img.jpg" class="img-fluid rounded w-100" alt="FAQ Image">
                        <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5" href="faqs.php">Read More Q & A <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php
    // Return the buffered content
    return ob_get_clean();
}

/**
 * Echo the FAQs directly
 */
function echoFAQs($options = []) {
    echo displayFAQs($options);
}
?> 