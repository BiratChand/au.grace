<?php

/**
 * Location Handler
 * 
 * Detects user location and loads city-specific content
 */

// Function to get user's city from IP address
function getUserCityFromIP()
{
    // Get the real IP address, considering proxies like Cloudflare
    $ip = getRealIpAddr();

    // For local development/testing with no detectable IP, use a default
    if (empty($ip) || $ip == '127.0.0.1' || $ip == '::1') {
        // Check if we have Cloudflare country info
        if (isset($_SERVER['HTTP_CF_IPCOUNTRY']) && $_SERVER['HTTP_CF_IPCOUNTRY'] == 'NP') {
            // You're in Nepal, so let's default to a city in Nepal for testing
            return 'SYDNEY'; // Just for testing - change as needed
        }

        // Otherwise use a generic fallback
        $ip = '8.8.8.8'; // Google's DNS as a fallback
    }

    try {
        $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,city");
        $data = json_decode($response, true);

        if ($data && isset($data['status']) && $data['status'] === 'success' && !empty($data['city'])) {
            return strtoupper($data['city']);
        }
    } catch (Exception $e) {
        // Log error if needed
        error_log("Error detecting city: " . $e->getMessage());
    }

    return null;
}

// Function to get the real IP address
function getRealIpAddr()
{
    // Check for Cloudflare
    if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    // Check for other common proxy headers
    $ipHeaders = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];

    foreach ($ipHeaders as $header) {
        if (isset($_SERVER[$header]) && filter_var($_SERVER[$header], FILTER_VALIDATE_IP)) {
            return $_SERVER[$header];
        }
    }

    // Default to REMOTE_ADDR if nothing else works
    return $_SERVER['REMOTE_ADDR'];
}

// Function to get city from cookie if exists
function getUserCityFromCookie()
{
    if (isset($_COOKIE['user_city'])) {
        return strtoupper($_COOKIE['user_city']);
    }
    return null;
}

// Function to set city in cookie
function setUserCityCookie($city)
{
    // Only set cookie if headers haven't been sent yet
    if (!headers_sent()) {
        setcookie('user_city', $city, time() + (86400 * 30), "/"); // 30 days
    }
}

// Function to get city from manual selection (GET parameter)
function getUserCityFromSelection()
{
    if (isset($_GET['city'])) {
        $city = strtoupper($_GET['city']);
        // Store the city in session as well as cookie for reliability
        if (session_status() == PHP_SESSION_NONE && !headers_sent()) {
            @session_start();
        }
        if (isset($_SESSION)) {
            $_SESSION['user_city'] = $city;
        }
        setUserCityCookie($city);
        return $city;
    }
    return null;
}

// Function to get city from session if exists
function getUserCityFromSession()
{
    if (isset($_SESSION) && isset($_SESSION['user_city'])) {
        return strtoupper($_SESSION['user_city']);
    }
    return null;
}

// Function to get the current user's city
function getCurrentUserCity()
{
    // Start session if not already started
    if (session_status() == PHP_SESSION_NONE && !headers_sent()) {
        @session_start();
    }

    // Priority: 1. Manual Selection, 2. Session, 3. Cookie, 4. IP Detection, 5. Default
    $city = getUserCityFromSelection();

    if (!$city) {
        $city = getUserCityFromSession();
    }

    if (!$city) {
        $city = getUserCityFromCookie();
    }

    if (!$city) {
        $city = getUserCityFromIP();
        if ($city) {
            // Store in session and cookie
            if (isset($_SESSION)) {
                $_SESSION['user_city'] = $city;
            }
            setUserCityCookie($city);
        }
    }

    // List of supported cities
    $supportedCities = [
        'SYDNEY',
        'MELBOURNE',
        'ADELAIDE',
        'BRISBANE',
        'CANBERRA',
        'DANDENONG',
        'GLENROY',
        'HOBART',
        'PERTH'
    ];

    // If city is not in our supported list, use default
    if (!$city || !in_array($city, $supportedCities)) {
        $city = 'DEFAULT';
    }

    return $city;
}

// Function to load city-specific content
function getCityContent($city = null)
{
    if (!$city) {
        $city = getCurrentUserCity();
    }

    // Load JSON data
    $jsonFile = __DIR__ . '/city_content.json';
    $cityData = [];

    if (file_exists($jsonFile)) {
        $jsonContent = file_get_contents($jsonFile);
        $cityData = json_decode($jsonContent, true);
    }

    // If city not found in data, use DEFAULT
    if (!isset($cityData[$city])) {
        $city = 'DEFAULT';
    }

    return isset($cityData[$city]) ? $cityData[$city] : [];
}

// Function to get slider content for current city
function getCitySliders()
{
    $cityContent = getCityContent();
    return isset($cityContent['sliders']) ? $cityContent['sliders'] : [];
}

// Function to get welcome content for current city
function getCityWelcome()
{
    $cityContent = getCityContent();
    return isset($cityContent['welcome']) ? $cityContent['welcome'] : [];
}

// Function to generate city selector HTML
function generateCitySelectorHtml()
{
    $currentCity = getCurrentUserCity();
    $cities = [
        'SYDNEY',
        'MELBOURNE',
        'ADELAIDE',
        'BRISBANE',
        'CANBERRA',
        'DANDENONG',
        'GLENROY',
        'HOBART',
        'PERTH'
    ];

    $html = '<div class="city-selector dropdown">';
    $html .= '<button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" id="cityDropdown" data-bs-toggle="dropdown" aria-expanded="false">';
    $html .= '<i class="fas fa-map-marker-alt me-1"></i> ' . ($currentCity != 'DEFAULT' ? $currentCity : 'Select City');
    $html .= '</button>';
    $html .= '<ul class="dropdown-menu" aria-labelledby="cityDropdown">';

    foreach ($cities as $city) {
        $active = ($currentCity == $city) ? ' active' : '';
        $html .= '<li><a class="dropdown-item' . $active . '" href="?city=' . $city . '">' . ucfirst(strtolower($city)) . '</a></li>';
    }

    $html .= '</ul></div>';

    return $html;
}


function getCityTeamMembers()
{
    $cityContent = getCityContent();
    $teamMembers = isset($cityContent['teams']) ? $cityContent['teams'] : [];
    return $teamMembers;
}
