<?php
// Include necessary files
$contacts = [
    'all' => [
        [
            'name' => 'Adelaide Office',
            'phone' => '+61 (08) 7225 7892',
            'email' => 'adelaide@graceintlgroup.com',
            'address' => 'Suite 2, Level 1, 9A Hindley St., Adelaide, SA 5000, Australia'
        ],
        [
            'name' => 'Auckland Office',
            'phone' => '+64 95585152',
            'email' => 'director.nz@graceintlgroup.com',
            'address' => 'Suite 202, 87-93 Queen Street, Dingwall Building, Auckland, New Zealand'
        ],
        [
            'name' => 'Bagbazar Office',
            'phone' => '+977 (01) 4256121 / 5356121 / 4212374',
            'email' => 'bagbazar@grace.edu.np',
            'address' => 'Bagbazar, Kathmandu (Opposite of Pipalbot), Nepal'
        ],
        [
            'name' => 'Baglung Office',
            'phone' => '+977 (068) 522667',
            'email' => 'baglung@grace.edu.np',
            'address' => 'Hanumandas Road, Next building to Hotel Peace Palace, Baglung, Nepal'
        ],
        [
            'name' => 'Bardibas Office',
            'phone' => '+977-044-590312 / 9841133810',
            'email' => 'bardibas@grace.edu.np',
            'address' => 'Aurahi Road, Near Subhaswostik Hospital, Bardibas, Nepal'
        ],
        [
            'name' => 'Biratnagar Office',
            'phone' => '+977 9820709054 / (021) 570133',
            'email' => 'biratnagar@grace.edu.np',
            'address' => 'Hanumandas Road, Biratnagar-7, Nepal'
        ],
        [
            'name' => 'Birtamode Office',
            'phone' => '(023) 536117',
            'email' => 'birtamod@grace.edu.np',
            'address' => 'Hanuman Central, 4th Floor, Birtamode, Nepal'
        ],
        [
            'name' => 'Brisbane Office',
            'phone' => '+61 (08) 0732663358',
            'email' => 'brisbane@graceintlgroup.com',
            'address' => 'Level 5, 190 Edward Street, Brisbane 4000, Australia'
        ],
        [
            'name' => 'Buddhanagar Office',
            'phone' => '+977 01 5913321 / 20',
            'email' => 'reception.buddhanagar@grace.edu.np',
            'address' => 'Buddhanagar, Nearby Himalayan Ayurved Medical Science College, Kathmandu, Nepal'
        ],
        [
            'name' => 'Butwal Office',
            'phone' => '(071) 542276 / 532276 / 535407',
            'email' => 'butwal@grace.edu.np',
            'address' => 'Milanchowk, NMB Bank Building, Butwal, Nepal'
        ],
        [
            'name' => 'Canberra Office',
            'phone' => '+61414 331 025',
            'email' => 'canberra@graceintlgroup.com',
            'address' => 'Suite 1.04/ 17-21 University Avenue City ACT 2601, Australia'
        ],
        [
            'name' => 'Cebu Office',
            'phone' => '+63 956 291 0349',
            'email' => 'admission.ph@graceintlgroup.com',
            'address' => 'Shope 220 Raintree Mall “Annex A” 528 General Maxilom Avenue Cebu City Philippines, 6000'
        ],
        [
            'name' => 'Chitwan Office',
            'phone' => '(056) 590712 / (056) 590812 / +977 9855019790',
            'email' => 'chitwan@grace.edu.np',
            'address' => 'Sahid Chowk, Narayangarh, Chitwan, Nepal'
        ],
        [
            'name' => 'Damak Office',
            'phone' => '+977 9845863530 / +977 (023) 572536',
            'email' => 'damak@grace.edu.np',
            'address' => 'Beldangi Road Damak 6 Jhapa at KD complex, Damak, Nepal'
        ],
        [
            'name' => 'Damauli Office',
            'phone' => '065-590550',
            'email' => 'damauli@grace.edu.np',
            'address' => 'Bhorletar Chowk, Damauli, Tanahun, Nepal'
        ],
        [
            'name' => 'Dang Office',
            'phone' => '(082) 2590719 / +977 9857870719',
            'email' => 'dang@grace.edu.np',
            'address' => 'Ghorahi 15, Newroad Dang Infront of Ganesh Chitralaya, Dang, Nepal'
        ],
        [
            'name' => 'Delhi Office',
            'phone' => '+91 (11) 45542231',
            'email' => 'india@graceintlgroup.com',
            'address' => 'Office No. 505, 6th Floor, Westend Mall, Near District Centre, Janak Puri (West), New Delhi, 110058, India'
        ],
        [
            'name' => 'Dharan Office',
            'phone' => '+977 025 579595',
            'email' => 'dharan@grace.edu.np',
            'address' => 'Sadan Road, Dharan, Nepal'
        ],
        [
            'name' => 'Dubai Office',
            'phone' => '+971 45548034 / +971 523110230',
            'email' => 'dubai@graceintlgroup.com',
            'address' => 'PO Box 33256, Office S02 Bin Hareb Building AI Mararr Dubai 33256, UAE'
        ],
        [
            'name' => 'Eldoret Office',
            'phone' => '+254 716361048',
            'email' => 'eldoret@graceintlgroup.com',
            'address' => 'Kenya Office Eldoret, 301/2nd Floor, Stow-burg Plaza Oginga Odinga Street, Eldoret, Kenya'
        ],
        [
            'name' => 'Glenroy Office',
            'phone' => '+61 431 715 577',
            'email' => 'glenroy@graceintlgroup.com',
            'address' => 'Unit 3/1 Post Office Pl, Glenroy, VIC 3046, Australia'
        ],
        [
            'name' => 'Gurugram Office',
            'phone' => '+91 (01) 244367660',
            'email' => 'bdm@graceintlgroup.com',
            'address' => 'G-308, Floor 3rd, Sushant Shopping Arcade, Sushant Lok Phase -1, Gurugram, Haryana, India'
        ],
        [
            'name' => 'Hetauda Office',
            'phone' => '+977 9843690518 / (057) 524403',
            'email' => 'hetauda@grace.edu.np',
            'address' => 'Hetauda-04, Parijatpath, Hetauda, Nepal'
        ],
        [
            'name' => 'Hobart Office',
            'phone' => '03 6289 6655',
            'email' => 'tasmania@graceintlgroup.com',
            'address' => 'Suite 105, Level 1, 86 Murray Street, Hobart TAS 7000, Australia'
        ],
        [
            'name' => 'Itahari Office',
            'phone' => '+977-25-590581 / +977 9762378608',
            'email' => 'itahari@grace.edu.np',
            'address' => 'Sangit Chowk, Itahari, Nepal'
        ],
        [
            'name' => 'Jakarta Office',
            'phone' => '(+62) 87850020074',
            'email' => 'director.indonesia@graceintlgroup.com',
            'address' => 'Menara BCA Level 45 & 50, JI. MH Thamrin No. 1, Menteng, Jakarta-10310, Indonesia'
        ],
        [
            'name' => 'Kawasoti Office',
            'phone' => '+977 9849898606 / 078-590992',
            'email' => 'kawasoti@grace.edu.np',
            'address' => 'Indrachowk, kawasoti-2, Nawalpur, Nepal'
        ],
        [
            'name' => 'Kumaripati Office',
            'phone' => '+977 9766385821 / +977 1-5920013/14',
            'email' => 'kumaripati@grace.edu.np',
            'address' => '3rd Floor, CG Building, Kumaripati, Lalitpur, Nepal'
        ],
        [
            'name' => 'Melbourne Office',
            'phone' => '+61 (03) 9662 9020',
            'email' => 'melbourne@graceintlgroup.com',
            'address' => 'Level 14, 282 Collins Street, Melbourne, VIC 3000, Australia'
        ],
        [
            'name' => 'Moratuwa Office',
            'phone' => '61 430500165',
            'email' => 'srilanka@graceintlgroup.com',
            'address' => '21 Charles Place, Rawatawatta, Moratuwa, Sri Lanka'
        ],
        [
            'name' => 'New Baneshwor Office',
            'phone' => '+977 (01) 4796880 / 4796881',
            'email' => 'baneshwor@grace.edu.np',
            'address' => 'PC Complex 2nd Floor, New Baneshwor, Kathmandu, Nepal'
        ],
        [
            'name' => 'Pakistan Office',
            'phone' => '+92 (335) 5441602',
            'email' => 'pakistan@graceintlgroup.com',
            'address' => 'F-8 Markaz, Al Babar Center Level 1 Islamabad, Pakistan'
        ],
        [
            'name' => 'Parsa Office',
            'phone' => '+977 9855019797 / (056) 582053',
            'email' => 'parsa@grace.edu.np',
            'address' => 'Khairahani, Parsa, Nepal'
        ],
        [
            'name' => 'Perth Office',
            'phone' => '+61 (08) 93252445',
            'email' => 'perth@graceintlgroup.com',
            'address' => '383 Hay St, Perth WA 6000, Australia'
        ],
        [
            'name' => 'Simara Office',
            'phone' => '+977 985-5030941',
            'email' => 'simara@grace.edu.np',
            'address' => 'Simara Business Center, Simara, Nepal'
        ],
        [
            'name' => 'Sydney Office',
            'phone' => '+61 (02) 9286 3447',
            'email' => 'sydney@graceintlgroup.com',
            'address' => 'Suite 1508, Level 15, 97-99 Bathurst Street, Sydney, NSW 2000, Australia'
        ],
        [
            'name' => 'Sylhet Office',
            'phone' => '+8801765710165 / +61469884800',
            'email' => 'director.bangladesh@graceintlgroup.com',
            'address' => 'Abdul Hamid Road, Kadamtoli, Sylhet, (1st Floor), Humayun Rashid Chattar, Bangladesh'
        ]
    ],
    'south_asia' => [
        'Nepal' => [
            'Bagbazar' => [
                'name' => 'Bagbazar Office',
                'phone' => '+977 (01) 4256121 / 5356121 / 4212374',
                'email' => 'bagbazar@grace.edu.np',
                'address' => 'Bagbazar, Kathmandu (Opposite of Pipalbot), Nepal'
            ],
            'Buddhanagar' => [
                'name' => 'Buddhanagar Office',
                'phone' => '+977 01 5913321 / 20',
                'email' => 'reception.buddhanagar@grace.edu.np',
                'address' => 'Buddhanagar, Nearby Himalayan Ayurved Medical Science College, Kathmandu, Nepal'
            ],
            'New Baneshwor' => [
                'name' => 'New Baneshwor Office',
                'phone' => '+977 (01) 4796880 / 4796881',
                'email' => 'baneshwor@grace.edu.np',
                'address' => 'PC Complex 2nd Floor, New Baneshwor, Kathmandu, Nepal'
            ],
            'Kumaripati' => [
                'name' => 'Kumaripati Office',
                'phone' => '+977 9766385821 / +977 1-5920013/14',
                'email' => 'kumaripati@grace.edu.np',
                'address' => '3rd Floor, CG Building, Kumaripati, Lalitpur, Nepal'
            ],
            'Baglung' => [
                'name' => 'Baglung Office',
                'phone' => '+977 (068) 522667',
                'email' => 'baglung@grace.edu.np',
                'address' => 'Hanumandas Road, Next building to Hotel Peace Palace, Baglung, Nepal'
            ],
            'Bardibas' => [
                'name' => 'Bardibas Office',
                'phone' => '+977-044-590312 / 9841133810',
                'email' => 'bardibas@grace.edu.np',
                'address' => 'Aurahi Road, Near Subhaswostik Hospital, Bardibas, Nepal'
            ],
            'Biratnagar' => [
                'name' => 'Biratnagar Office',
                'phone' => '+977 9820709054 / (021) 570133',
                'email' => 'biratnagar@grace.edu.np',
                'address' => 'Hanumandas Road, Biratnagar-7, Nepal'
            ],
            'Birtamode' => [
                'name' => 'Birtamode Office',
                'phone' => '(023) 536117',
                'email' => 'birtamod@grace.edu.np',
                'address' => 'Hanuman Central, 4th Floor, Birtamode, Nepal'
            ],
            'Butwal' => [
                'name' => 'Butwal Office',
                'phone' => '(071) 542276 / 532276 / 535407',
                'email' => 'butwal@grace.edu.np',
                'address' => 'Milanchowk, NMB Bank Building, Butwal, Nepal'
            ],
            'Chitwan' => [
                'name' => 'Chitwan Office',
                'phone' => '(056) 590712 / (056) 590812 / +977 9855019790',
                'email' => 'chitwan@grace.edu.np',
                'address' => 'Sahid Chowk, Narayangarh, Chitwan, Nepal'
            ],
            'Damak' => [
                'name' => 'Damak Office',
                'phone' => '+977 9845863530 / +977 (023) 572536',
                'email' => 'damak@grace.edu.np',
                'address' => 'Beldangi Road Damak 6 Jhapa at KD complex, Damak, Nepal'
            ],
            'Damauli' => [
                'name' => 'Damauli Office',
                'phone' => '065-590550',
                'email' => 'damauli@grace.edu.np',
                'address' => 'Bhorletar Chowk, Damauli, Tanahun, Nepal'
            ],
            'Dang' => [
                'name' => 'Dang Office',
                'phone' => '(082) 2590719 / +977 9857870719',
                'email' => 'dang@grace.edu.np',
                'address' => 'Ghorahi 15, Newroad Dang Infront of Ganesh Chitralaya, Dang, Nepal'
            ],
            'Dharan' => [
                'name' => 'Dharan Office',
                'phone' => '+977 025 579595',
                'email' => 'dharan@grace.edu.np',
                'address' => 'Sadan Road, Dharan, Nepal'
            ],
            'Hetauda' => [
                'name' => 'Hetauda Office',
                'phone' => '+977 9843690518 / (057) 524403',
                'email' => 'hetauda@grace.edu.np',
                'address' => 'Hetauda-04, Parijatpath, Hetauda, Nepal'
            ],
            'Itahari' => [
                'name' => 'Itahari Office',
                'phone' => '+977-25-590581 / +977 9762378608',
                'email' => 'itahari@grace.edu.np',
                'address' => 'Sangit Chowk, Itahari, Nepal'
            ],
            'Kawasoti' => [
                'name' => 'Kawasoti Office',
                'phone' => '+977 9849898606 / 078-590992',
                'email' => 'kawasoti@grace.edu.np',
                'address' => 'Indrachowk, kawasoti-2, Nawalpur, Nepal'
            ],
            'Parsa' => [
                'name' => 'Parsa Office',
                'phone' => '+977 9855019797 / (056) 582053',
                'email' => 'parsa@grace.edu.np',
                'address' => 'Khairahani, Parsa, Nepal'
            ],
            'Simara' => [
                'name' => 'Simara Office',
                'phone' => '+977 985-5030941',
                'email' => 'simara@grace.edu.np',
                'address' => 'Simara Business Center, Simara, Nepal'
            ]
        ],
        'India' => [
            'Delhi' => [
                'name' => 'Delhi Office',
                'phone' => '+91 (11) 45542231',
                'email' => 'india@graceintlgroup.com',
                'address' => 'Office No. 505, 6th Floor, Westend Mall, Near District Centre, Janak Puri (West), New Delhi, 110058, India'
            ],
            'Gurugram' => [
                'name' => 'Gurugram Office',
                'phone' => '+91 (01) 244367660',
                'email' => 'bdm@graceintlgroup.com',
                'address' => 'G-308, Floor 3rd, Sushant Shopping Arcade, Sushant Lok Phase -1, Gurugram, Haryana, India'
            ]
        ],
        'Bangladesh' => [
            'Sylhet' => [
                'name' => 'Sylhet Office',
                'phone' => '+8801765710165 / +61469884800',
                'email' => 'director.bangladesh@graceintlgroup.com',
                'address' => 'Abdul Hamid Road, Kadamtoli, Sylhet, (1st Floor), Humayun Rashid Chattar, Bangladesh'
            ]
        ],
        'Pakistan' => [
            'Pakistan' => [
                'name' => 'Pakistan Office',
                'phone' => '+92 (335) 5441602',
                'email' => 'pakistan@graceintlgroup.com',
                'address' => 'F-8 Markaz, Al Babar Center Level 1 Islamabad, Pakistan'
            ]
        ],
        'Sri lanka' => [
            'Moratuwa' => [
                'name' => 'Moratuwa Office',
                'phone' => '61 430500165',
                'email' => 'srilanka@graceintlgroup.com',
                'address' => '21 Charles Place, Rawatawatta, Moratuwa, Sri Lanka'
            ]
        ]
    ],
    'australia' => [
        [
            'name' => 'Sydney Office',
            'phone' => '+61 (02) 9286 3447',
            'email' => 'sydney@graceintlgroup.com',
            'address' => 'Suite 1508, Level 15, 97-99 Bathurst Street, Sydney, NSW 2000, Australia'
        ],
        [
            'name' => 'Melbourne Office',
            'phone' => '+61 (03) 9662 9020',
            'email' => 'melbourne@graceintlgroup.com',
            'address' => 'Level 14, 282 Collins Street, Melbourne, VIC 3000, Australia'
        ],
        [
            'name' => 'Glenroy Office',
            'phone' => '+61 431 715 577',
            'email' => 'glenroy@graceintlgroup.com',
            'address' => 'Unit 3/1 Post Office Pl, Glenroy, VIC 3046, Australia'
        ],
        [
            'name' => 'Adelaide Office',
            'phone' => '+61 (08) 7225 7892',
            'email' => 'adelaide@graceintlgroup.com',
            'address' => 'Suite 2, Level 1, 9A Hindley St., Adelaide, SA 5000, Australia'
        ],
        [
            'name' => 'Brisbane Office',
            'phone' => '+61 (08) 0732663358',
            'email' => 'brisbane@graceintlgroup.com',
            'address' => 'Level 5, 190 Edward Street, Brisbane 4000, Australia'
        ],
        [
            'name' => 'Canberra Office',
            'phone' => '+61414 331 025',
            'email' => 'canberra@graceintlgroup.com',
            'address' => 'Suite 1.04/ 17-21 University Avenue City ACT 2601, Australia'
        ],
        [
            'name' => 'Hobart Office',
            'phone' => '03 6289 6655',
            'email' => 'tasmania@graceintlgroup.com',
            'address' => 'Suite 105, Level 1, 86 Murray Street, Hobart TAS 7000, Australia'
        ],
        [
            'name' => 'Perth Office',
            'phone' => '+61 (08) 93252445',
            'email' => 'perth@graceintlgroup.com',
            'address' => '383 Hay St, Perth WA 6000, Australia'
        ]
    ],
    'dubai' => [
        'Dubai' => [
            'name' => 'Dubai Office',
            'phone' => '+971 45548034 / +971 523110230',
            'email' => 'dubai@graceintlgroup.com',
            'address' => 'PO Box 33256, Office S02 Bin Hareb Building AI Mararr Dubai 33256, UAE'
        ]
    ],
    'indonesia' => [
        'Jakarta' => [
            'name' => 'Jakarta Office',
            'phone' => '(+62) 87850020074',
            'email' => 'director.indonesia@graceintlgroup.com',
            'address' => 'Menara BCA Level 45 & 50, JI. MH Thamrin No. 1, Menteng, Jakarta-10310, Indonesia'
        ]
    ],
    'kenya' => [
        'Eldoret' => [
            'name' => 'Eldoret Office',
            'phone' => '+254 716361048',
            'email' => 'eldoret@graceintlgroup.com',
            'address' => 'Kenya Office Eldoret, 301/2nd Floor, Stow-burg Plaza Oginga Odinga Street, Eldoret, Kenya'
        ]
    ],
    'new_zealand' => [
        'Auckland' => [
            'name' => 'Auckland Office',
            'phone' => '+64 95585152',
            'email' => 'director.nz@graceintlgroup.com',
            'address' => 'Suite 202, 87-93 Queen Street, Dingwall Building, Auckland, New Zealand'
        ]
    ],
    'philippines' => [
        'Cebu' => [
            'name' => 'Cebu Office',
            'phone' => '+63 956 291 0349',
            'email' => 'admission.ph@graceintlgroup.com',
            'address' => 'Shope 220 Raintree Mall “Annex A” 528 General Maxilom Avenue Cebu City Philippines, 6000'
        ]
    ]
];

// Default active section and subsection
$activeSection = isset($_GET['section']) ? $_GET['section'] : 'all';
$activeSubsection = isset($_GET['subsection']) && isset($contacts[$activeSection][$_GET['subsection']]) ? $_GET['subsection'] : (array_key_first($contacts[$activeSection]) ?: '');

// Function to get subsection display name
function getSubsectionDisplayName($section, $subsection)
{
    return ucfirst($subsection) . ' Offices';
}

// Convert PHP contacts array to JSON for JavaScript
$contactsJson = json_encode($contacts);
