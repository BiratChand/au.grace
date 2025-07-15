<?php
/**
 * FAQ Data Handler
 * Loads FAQ items from JSON file
 */

function getFAQs() {
    $jsonFile = __DIR__ . '/../data/faqs.json';
    
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        return json_decode($jsonData, true);
    }
    
    // Fallback data in case JSON file is not found
    return [
        [
            "id" => 1,
            "question" => "What Does a Financial Advisor Do?",
            "answer" => "A financial advisor provides guidance to clients on various financial matters including investments, insurance, retirement planning, tax strategies, and estate planning."
        ],
        [
            "id" => 2,
            "question" => "What industries do you specialize in?",
            "answer" => "We specialize in providing migration services across multiple industries including education, healthcare, IT, engineering, business, and trades."
        ],
        [
            "id" => 3,
            "question" => "Can you guarantee for growth?",
            "answer" => "While we can't promise specific outcomes as migration policies can change, we guarantee our complete commitment to delivering expert guidance based on current legislation."
        ],
        [
            "id" => 4,
            "question" => "What makes your business plans so special?",
            "answer" => "Our business plans stand out because they're tailored specifically to your unique circumstances and goals."
        ]
    ];
} 