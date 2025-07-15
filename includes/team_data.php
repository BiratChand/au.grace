<?php
/**
 * Team Data Handler
 * Loads team member data from JSON file
 */

function getTeamMembers() {
    $jsonFile = __DIR__ . '/../data/team.json';
    $teamMembers = [];
    
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        $teamMembers = json_decode($jsonData, true);
    }
    
    // If JSON file doesn't exist or is empty, use fallback data
    if (empty($teamMembers)) {
        $teamMembers = [
            [
                "id" => 1,
                "name" => "Pawan Thapaliya",
                "position" => "Principal Migration Agent",
                "marn" => "1466008",
                "image" => "img/Pawan-Thapaliya-600x428.jpg",
                "description" => "Pawan, our principal migration agent, leads Grace International's Melbourne team. Registered since 2014, he excels in time management, team leadership, and delivering exceptional migration services with expertise and dedication.",
                "social" => [
                    "linkedin" => "https://linkedin.com/",
                    "facebook" => "https://facebook.com/",
                    "twitter" => "https://twitter.com/"
                ]
            ],
            [
                "id" => 2,
                "name" => "Viola Rong",
                "position" => "Certified Migration Agent",
                "marn" => "1801289",
                "image" => "img/Viola-Rong-600x428.jpg",
                "description" => "Certified migration agent since 2018 Viola has been working in visa and migration for almost seven years. She has an eye for detail and has excellent communication and interpersonal skills.",
                "social" => [
                    "linkedin" => "https://linkedin.com/",
                    "facebook" => "https://facebook.com/",
                    "twitter" => "https://twitter.com/"
                ]
            ],
            [
                "id" => 3,
                "name" => "Simrita Kanjitkar",
                "position" => "Registered Migration Agent",
                "marn" => "1798972",
                "image" => "img/Simrita-Ranjitkar-1.png",
                "description" => "Simrita, a highly focused and reliable registered migration agent since 2017, works at Grace International's Sydney office. A team player with exceptional communication, she embraces challenges to support clients effectively.",
                "social" => [
                    "linkedin" => "https://linkedin.com/",
                    "facebook" => "https://facebook.com/",
                    "twitter" => "https://twitter.com/"
                ]
            ],
            [
                "id" => 4,
                "name" => "Sirat Teji",
                "position" => "Registered Migration Agent",
                "marn" => "22717800",
                "image" => "img/Sirat-Teji-400x400.jpeg",
                "description" => "Sirat Teji, a skilled Registered Migration Agent at Grace International Sydney, specializes in Australian Migration Law, offering tailored solutions for General Skilled Migration, Partner, Student, and Temporary Graduate visas.",
                "social" => [
                    "linkedin" => "https://linkedin.com/",
                    "facebook" => "https://facebook.com/",
                    "twitter" => "https://twitter.com/"
                ]
            ]
        ];
    }
    
    // Ensure all team members have a consistent structure
    foreach ($teamMembers as $key => $member) {
        // Ensure required fields exist
        $teamMembers[$key]['id'] = $member['id'] ?? $key + 1;
        $teamMembers[$key]['name'] = $member['name'] ?? 'Team Member';
        $teamMembers[$key]['position'] = $member['position'] ?? '';
        $teamMembers[$key]['marn'] = $member['marn'] ?? '';
        $teamMembers[$key]['image'] = $member['image'] ?? '';
        $teamMembers[$key]['description'] = $member['description'] ?? '';
        
        // Ensure social links structure exists
        if (!isset($teamMembers[$key]['social']) || !is_array($teamMembers[$key]['social'])) {
            $teamMembers[$key]['social'] = [];
        }
        
        // Set default empty values for social links if not provided
        $teamMembers[$key]['social']['linkedin'] = $member['social']['linkedin'] ?? '';
        $teamMembers[$key]['social']['facebook'] = $member['social']['facebook'] ?? '';
        $teamMembers[$key]['social']['twitter'] = $member['social']['twitter'] ?? '';
    }
    
    return $teamMembers;
} 