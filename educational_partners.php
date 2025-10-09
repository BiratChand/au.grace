<?php
$pageTitle = "Educational Partners";
$currentPage = "educational_partners";
include 'header.php';
include 'navbar.php';
// Define the card data as a flat PHP array, now with explicit 'id' as integer
$cards = [
    [
        'id' => 1,
        'img' => 'img/Uni/La Trobe University.png',
        'alt' => 'La Trobe University Logo',
        'title' => 'La Trobe University',
        'cricos' => '(CRICOS 00115M)',
        'link' => 'https://www.latrobe.edu.au/'
    ],
    [
        'id' => 2,
        'img' => 'img/Uni/University of Tasmania.svg',
        'alt' => 'University of Tasmania Logo',
        'title' => 'University of Tasmania',
        'cricos' => '(CRICOS 00586B)',
        'link' => 'https://www.utas.edu.au/'
    ],
    [
        'id' => 3,
        'img' => 'img/Uni/Charles Sturt University.svg',
        'alt' => 'Charles Sturt University Logo',
        'title' => 'Charles Sturt University',
        'cricos' => '(CRICOS 00005F)',
        'link' => 'https://www.csu.edu.au/'
    ],
    [
        'id' => 4,
        'img' => 'img/Uni/Torrens University.png',
        'alt' => 'Torrens University Logo',
        'title' => 'Torrens University',
        'cricos' => '(CRICOS 03389E)',
        'link' => 'https://www.torrens.edu.au/'
    ],
    [
        'id' => 5,
        'img' => 'img/Uni/Southern Cross University.png',
        'alt' => 'Southern Cross University Logo',
        'title' => 'Southern Cross University',
        'cricos' => '(CRICOS 01241G)',
        'link' => 'https://www.scu.edu.au/'
    ],
    [
        'id' => 6,
        'img' => 'img/Uni/Murdoch University.png',
        'alt' => 'Murdoch University Logo',
        'title' => 'Murdoch University',
        'cricos' => '(CRICOS 00125J)',
        'link' => 'https://www.murdoch.edu.au/'
    ],
    [
        'id' => 7,
        'img' => 'img/Uni/University of the Sunshine Coast.png',
        'alt' => 'University of the Sunshine Coast Logo',
        'title' => 'University of the Sunshine Coast',
        'cricos' => '(CRICOS 01595D)',
        'link' => 'https://www.usc.edu.au/'
    ],
    [
        'id' => 8,
        'img' => 'img/Uni/CQUniversity.svg',
        'alt' => 'CQUniversity Logo',
        'title' => 'CQUniversity',
        'cricos' => '(CRICOS 00219C)',
        'link' => 'https://www.cqu.edu.au/'
    ],
    [
        'id' => 9,
        'img' => 'img/Uni/Edith Cowan University.jpg',
        'alt' => 'Edith Cowan University Logo',
        'title' => 'Edith Cowan University (ECU)',
        'cricos' => '(CRICOS 00279B)',
        'link' => 'https://www.ecu.edu.au/'
    ],
    [
        'id' => 10,
        'img' => 'img/Uni/James Cook University.png',
        'alt' => 'James Cook University Logo',
        'title' => 'James Cook University',
        'cricos' => '(CRICOS 00117J)',
        'link' => 'https://www.jcu.edu.au/'
    ],
    [
        'id' => 11,
        'img' => 'img/Uni/Federation University.webp',
        'alt' => 'Federation University Logo',
        'title' => 'Federation University',
        'cricos' => '(CRICOS 00103D)',
        'link' => 'https://federation.edu.au/'
    ],
    [
        'id' => 12,
        'img' => 'img/Uni/University of Southern Queensland.svg',
        'alt' => 'University of Southern Queensland Logo',
        'title' => 'University of Southern Queensland',
        'cricos' => '(CRICOS 00244B)',
        'link' => 'https://www.unisq.edu.au/'
    ],
    [
        'id' => 13,
        'img' => 'img/Uni/Victoria University.svg',
        'alt' => 'Victoria University Logo',
        'title' => 'Victoria University',
        'cricos' => '(CRICOS 00124K)',
        'link' => 'https://www.vu.edu.au/'
    ],
    [
        'id' => 14,
        'img' => 'img/Uni/Swinburne University.png',
        'alt' => 'Swinburne University Logo',
        'title' => 'Swinburne University',
        'cricos' => '(CRICOS 00111D)',
        'link' => 'https://www.swinburne.edu.au/'
    ],
    [
        'id' => 15,
        'img' => 'img/Uni/University of Newcastle.png',
        'alt' => 'University of Newcastle Logo',
        'title' => 'University of Newcastle',
        'cricos' => '(CRICOS 00109J)',
        'link' => 'https://www.newcastle.edu.au/'
    ],
    [
        'id' => 16,
        'img' => 'img/Uni/University of Wollongong.png',
        'alt' => 'University of Wollongong Logo',
        'title' => 'University of Wollongong',
        'cricos' => '(CRICOS 00102E)',
        'link' => 'https://www.uow.edu.au/'
    ],
    [
        'id' => 17,
        'img' => 'img/Uni/Excelsia College.png',
        'alt' => 'Excelsia College Logo',
        'title' => 'Excelsia University College',
        'cricos' => '(CRICOS 02664K)',
        'link' => 'https://excelsia.edu.au/'
    ],
    [
        'id' => 18,
        'img' => 'img/Uni/ACAP University College.webp',
        'alt' => 'ACAP University College Logo',
        'title' => 'ACAP University College',
        'cricos' => '(CRICOS 01328A)',
        'link' => 'https://www.acap.edu.au/'
    ],
    [
        'id' => 19,
        'img' => 'img/Uni/SAE University College.png',
        'alt' => 'SAE University College Logo',
        'title' => 'SAE University College',
        'cricos' => '(CRICOS 00312F)',
        'link' => 'https://sae.edu.au/'
    ],
    [
        'id' => 20,
        'img' => 'img/Uni/The Hotel School.svg',
        'alt' => 'The Hotel School Logo',
        'title' => 'The Hotel School',
        'cricos' => '(CRICOS 01241G)',
        'link' => 'https://hotelschool.scu.edu.au/'
    ],
    [
        'id' => 21,
        'img' => 'img/Uni/Blue Mountains International Hotel Management School.svg',
        'alt' => 'Blue Mountains International Hotel Management School Logo',
        'title' => 'Blue Mountains International Hotel Management School',
        'cricos' => '(CRICOS 00911E)',
        'link' => 'https://www.bluemountains.edu.au/'
    ],
    [
        'id' => 22,
        'img' => 'img/Uni/Melbourne Polytechnic.png',
        'alt' => 'Melbourne Polytechnic Logo',
        'title' => 'Melbourne Polytechnic',
        'cricos' => '(CRICOS 00724G)',
        'link' => 'https://www.melbournepolytechnic.edu.au/'
    ],
    [
        'id' => 23,
        'img' => 'img/Uni/Holmesglen Institute.svg',
        'alt' => 'Holmesglen Institute Logo',
        'title' => 'Holmesglen Institute',
        'cricos' => '(CRICOS 00012G)',
        'link' => 'https://holmesglen.edu.au/'
    ],
    [
        'id' => 24,
        'img' => 'img/Uni/Chisholm Institute.avif',
        'alt' => 'Chisholm Institute Logo',
        'title' => 'Chisholm Institute',
        'cricos' => '(CRICOS 00881F)',
        'link' => 'https://www.chisholm.edu.au/'
    ],
    [
        'id' => 25,
        'img' => 'img/Uni/Box Hill Institute.png',
        'alt' => 'Box Hill Institute Logo',
        'title' => 'Box Hill Institute',
        'cricos' => '(CRICOS 02411J)',
        'link' => 'https://www.boxhill.edu.au/'
    ],
    [
        'id' => 26,
        'img' => 'img/Uni/Melbourne Institute of Technology.png',
        'alt' => 'Melbourne Institute of Technology Logo',
        'title' => 'Melbourne Institute of Technology',
        'cricos' => '(CRICOS 01545C)',
        'link' => 'https://www.mit.edu.au/'
    ],
    [
        'id' => 27,
        'img' => 'img/Uni/Kaplan Business School.svg',
        'alt' => 'Kaplan Business School Logo',
        'title' => 'Kaplan Business School',
        'cricos' => '(CRICOS 02426B)',
        'link' => 'https://www.kbs.edu.au/'
    ],
    [
        'id' => 28,
        'img' => 'img/Uni/APIC.png',
        'alt' => 'Asia Pacific International College Logo',
        'title' => 'Asia Pacific International College (APIC)',
        'cricos' => '(CRICOS 03048D)',
        'link' => 'https://www.apicollege.edu.au/'
    ],
    [
        'id' => 29,
        'img' => 'img/Uni/VIT.webp',
        'alt' => 'Victorian Institute of Technology Logo',
        'title' => 'Victorian Institute of Technology (VIT)',
        'cricos' => '(CRICOS 02044E)',
        'link' => 'https://www.vit.edu.au/'
    ],
    [
        'id' => 30,
        'img' => 'img/Uni/ICHM.jpg',
        'alt' => 'International College of Hotel Management Logo',
        'title' => 'International College of Hotel Management (ICHM)',
        'cricos' => '(CRICOS 02914G)',
        'link' => 'https://www.ichm.edu.au/'
    ],
    [
        'id' => 31,
        'img' => 'img/Uni/Stotts College.avif',
        'alt' => 'Stott\'s College Logo',
        'title' => 'Stott\'s College',
        'cricos' => '(CRICOS 01439E)',
        'link' => '#'
    ],
    [
        'id' => 32,
        'img' => 'img/Uni/Navitas University.svg',
        'alt' => 'Navitas University Logo',
        'title' => 'Navitas University',
        'cricos' => '(CRICOS 00231G)',
        'link' => 'https://www.navitas.com/'
    ],
    [
        'id' => 33,
        'img' => 'img/Uni/Holmes Institute.png',
        'alt' => 'Holmes Institute Logo',
        'title' => 'Holmes Institute',
        'cricos' => '(CRICOS 02767C)',
        'link' => 'https://www.holmes.edu.au/'
    ],
    [
        'id' => 34,
        'img' => 'img/Uni/ECA.png',
        'alt' => 'Education Centre of Australia Logo',
        'title' => 'Education Centre of Australia (ECA)',
        'cricos' => '(CRICOS 02997M)',
        'link' => 'https://www.eca.edu.au/'
    ],
    [
        'id' => 35,
        'img' => 'img/Uni/AIH.svg',
        'alt' => 'Australian Institute of Higher Education Logo',
        'title' => 'Australian Institute of Higher Education (AIH)',
        'cricos' => '(CRICOS 03147A)',
        'link' => 'https://aih.nsw.edu.au/'
    ],
    [
        'id' => 36,
        'img' => 'img/Uni/EIT.webp',
        'alt' => 'Engineering Institute of Technology Logo',
        'title' => 'Engineering Institute of Technology (EIT)',
        'cricos' => '(CRICOS 03567C)',
        'link' => 'https://www.eit.edu.au/'
    ],
    [
        'id' => 37,
        'img' => 'img/Uni/KOI.webp',
        'alt' => 'King\'s Own Institute Logo',
        'title' => 'King\'s Own Institute (KOI)',
        'cricos' => '(CRICOS 03171A)',
        'link' => 'https://koi.edu.au/'
    ],
    [
        'id' => 38,
        'img' => 'img/Uni/SCEI.png',
        'alt' => 'Southern Cross Education Institute Logo',
        'title' => 'Southern Cross Education Institute (SCEI)',
        'cricos' => '(CRICOS 02934D)',
        'link' => 'https://scei.edu.au/'
    ],
    [
        'id' => 39,
        'img' => 'img/Uni/CIC.png',
        'alt' => 'CIC Higher Education Logo',
        'title' => 'CIC Higher Education',
        'cricos' => '(CRICOS 01718J)',
        'link' => 'https://www.cic.vic.edu.au/'
    ],
    [
        'id' => 40,
        'img' => 'img/Uni/Kent Institute.png',
        'alt' => 'Kent InstituteLogo',
        'title' => 'Kent Institute',
        'cricos' => '(CRICOS 00161E)',
        'link' => 'https://kent.edu.au/'
    ],
    [
        'id' => 41,
        'img' => 'img/Uni/Wentworth Institute.png',
        'alt' => 'Wentworth Institute Logo',
        'title' => 'Wentworth Institute',
        'cricos' => '(CRICOS 03246B)',
        'link' => '#'
    ],
    [
        'id' => 42,
        'img' => 'img/Uni/IIBIT.png',
        'alt' => 'IIBIT Logo',
        'title' => 'IIBIT',
        'cricos' => '(CRICOS 01917B)',
        'link' => '#'
    ],
    [
        'id' => 43,
        'img' => 'img/Uni/Top Education Institute.png',
        'alt' => 'Top Education Institute Logo',
        'title' => 'Top Education Institute',
        'cricos' => '(CRICOS 02491D)',
        'link' => 'https://www.top.edu.au/'
    ],
    [
        'id' => 44,
        'img' => 'img/Uni/Equal International.webp',
        'alt' => 'Equal International Logo',
        'title' => 'Equal International',
        'cricos' => '(CRICOS 03809A)',
        'link' => '#'
    ],
    [
        'id' => 45,
        'img' => 'img/Uni/Canterbury Institute.png',
        'alt' => 'Canterbury Institute of Management Logo',
        'title' => 'Canterbury Institute of Management',
        'cricos' => '(CRICOS 03809A)',
        'link' => '#'
    ],
    [
        'id' => 46,
        'img' => 'img/Uni/TAFE NSW.webp',
        'alt' => 'TAFE NSW Logo',
        'title' => 'TAFE NSW',
        'cricos' => '(CRICOS 00591E)',
        'link' => 'https://www.tafensw.edu.au/'
    ],
    [
        'id' => 47,
        'img' => 'img/Uni/IKON Institute.svg',
        'alt' => 'IKON Institute of Australia Logo',
        'title' => 'IKON Institute of Australia',
        'cricos' => '(CRICOS 03581E)',
        'link' => 'https://ikon.edu.au/'
    ],
    [
        'id' => 48,
        'img' => 'img/Uni/IHM.svg',
        'alt' => 'Institute of Health & Management Logo',
        'title' => 'Institute of Health & Management (IHM)',
        'cricos' => '(CRICOS 03407G)',
        'link' => 'https://www.ihm.edu.au/'
    ],
    [
        'id' => 49,
        'img' => 'img/Uni/Global Higher Education.png',
        'alt' => 'Global Higher Education Logo',
        'title' => 'Global Higher Education',
        'cricos' => '(CRICOS 03386G)',
        'link' => 'https://globalhe.edu.au/'
    ],
    [
        'id' => 50,
        'img' => 'img/Uni/Crown Institute of Business and Technology.gif',
        'alt' => 'Crown Institute of Business and Technology Logo',
        'title' => 'Crown Institute of Business and Technology',
        'cricos' => '(CRICOS 02971G)',
        'link' => 'https://www.cibt.edu.au/'
    ],
    [
        'id' => 51,
        'img' => 'img/Uni/ICMS.png',
        'alt' => 'International College of Management Sydney Logo',
        'title' => 'International College of Management Sydney (ICMS)',
        'cricos' => '(CRICOS 01484M)',
        'link' => 'https://www.icms.edu.au/'
    ]
];
?>

<style>
    .card-container {
        display: flex;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        margin: 40px auto;
        max-width: 1400px;
    }

    .card {
        background: #ffffff;
        border-radius: 10px 50px 10px 50px;
        width: 320px;
        min-width: 220px;
        max-width: 340px;
        min-height: 370px;
        max-height: 370px;
        margin: 0;
        padding: 28px 18px 25px 18px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .card::before {
        content: "";
        position: absolute;
        bottom: -40px;
        right: -40px;
        width: 100px;
        height: 100px;
        background: #3DB166;
        border-radius: 50%;
        opacity: 0.15;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    .card-img-wrapper {
        width: 100%;
        height: 90%;
        min-height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1 1 auto;
        margin-bottom: 0;
    }

    .card img {
        max-width: 90%;
        max-height: 90%;
        height: auto;
        width: auto;
        object-fit: contain;
        margin: 0 auto;
        display: block;
    }

    .card-content {
        width: 100%;
        padding: 10px 0 0 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        flex: 1 1 auto;
        /* Changed from 0 0 auto to 1 1 auto */
        background: rgba(255, 255, 255, 0.92);
        min-height: 0;
    }

    .card h3 {
        font-size: 1.22rem;
        color: #0d47a1;
        margin: 10px 0 5px;
        text-align: center;
        font-weight: 600;
    }

    .card p {
        font-size: 1.01rem;
        color: #607d8b;
        margin-bottom: 18px;
        text-align: center;
    }

    .btn {
        background-color: #3DB166;
        color: #ffffff;
        text-decoration: none;
        padding: 12px 32px;
        border-radius: 25px;
        font-weight: 500;
        font-size: 1.05rem;
        transition: background-color 0.3s ease, box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(61, 177, 102, 0.10);
        display: block;
        margin: 0 auto 0 auto;
        margin-top: auto;
        width: 80%;
        max-width: 200px;
        box-sizing: border-box;
    }

    .btn:hover {
        background-color: #2f9354;
        box-shadow: 0 4px 16px rgba(61, 177, 102, 0.18);
        text-decoration: none;
    }

    @media (max-width: 1300px) {
        .card-container {
            gap: 18px;
            max-width: 100vw;
        }

        .card {
            width: 23vw;
            min-width: 220px;
            max-width: 340px;
            min-height: 370px;
            max-height: 370px;
        }
    }

    @media (max-width: 900px) {
        .card-container {
            flex-wrap: wrap;
            gap: 18px;
        }

        .card {
            width: 90vw;
            min-width: 220px;
            max-width: 340px;
            min-height: 370px;
            max-height: 370px;
        }

        .card-img-wrapper {
            height: 70vw;
            min-height: 120px;
        }

        .card img {
            max-width: 80%;
            max-height: 80%;
        }
    }

    @media (max-width: 600px) {
        .card-container {
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }

        .card {
            width: 95vw;
            min-width: 0;
            margin: 0.5rem 0;
            min-height: 240px;
            max-height: 340px;
        }

        .card-img-wrapper {
            height: 45vw;
            min-height: 80px;
        }

        .card img {
            max-width: 70%;
            max-height: 70%;
        }

        .btn {
            width: 90%;
            max-width: 250px;
        }
    }
</style>

<!-- Animation CSS (if not already included) -->
<style>
    @keyframes fadeInUpCustom {
        0% {
            opacity: 0;
            transform: translate3d(0, 40px, 0);
        }

        100% {
            opacity: 1;
            transform: none;
        }
    }

    .animated-fadeInUp {
        animation-name: fadeInUpCustom;
        animation-duration: 0.8s;
        animation-fill-mode: both;
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" id="breadcrumb-section">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s" id="breadcrumb-title">Educational Partners</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" id="breadcrumb-list">
            <li class="breadcrumb-item" id="breadcrumb-home"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item" id="breadcrumb-student-service"><a href="student_service.php">Student Services</a></li>
            <li class="breadcrumb-item active text-primary" id="breadcrumb-educational-partners">Educational Partners</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<body id="education-body">
    <div id="key-partners-header" style="text-align:center; margin-top: 40px;">
        <h1 id="key-partners-title" style="font-size:2.5rem; color:#000000; font-weight:700; letter-spacing:1px; margin-bottom: 10px;"><strong>KEY PARTNERS</strong></h1>
    </div>
    <div id="educational-partners-section"></div>
    <?php
    // Display 4 universities per row
    $total = count($cards);
    $containerRow = 1;
    for ($i = 0; $i < $total; $i += 4) {
        // Add id to every card-container for quick recognition
        $containerId = 'card-container-row-' . $containerRow;
        // Also add id="educational-partners" to the first row for anchor
        $extraId = ($i == 0) ? 'educational-partners' : '';
        $allIds = trim($containerId . ' ' . $extraId);
        echo '<div class="card-container" id="' . $allIds . '">';
        for ($j = $i; $j < $i + 4 && $j < $total; $j++) {
            $card = $cards[$j];
            // Animation delay for each card
            $delay = 0.1 + (($j % 4) * 0.1);
            // Add id from the card array (integer)
            $cardId = $card['id'];
            // Generate a slug for the card for id (if needed for other elements)
            $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', $card['title']));
            $slug = trim($slug, '-');
            echo '<div class="card animated-fadeInUp" id="id' . $cardId . '" style="animation-delay: ' . $delay . 's;">';
            echo '<div class="card-img-wrapper" id="img-wrapper-' . $cardId . '">';
            echo '<img src="' . htmlspecialchars($card['img']) . '" alt="' . htmlspecialchars($card['alt']) . '" id="img-' . $cardId . '">';
            echo '</div>';
            echo '<div class="card-content" id="content-' . $cardId . '">';
            echo '<h3 id="title-' . $cardId . '">' . htmlspecialchars($card['title']) . '</h3>';
            echo '<p id="cricos-' . $cardId . '">' . htmlspecialchars($card['cricos']) . '</p>';
            echo '<div id="btn-wrapper-' . $cardId . '" style="width:100%;display:flex;justify-content:center;align-items:flex-end;flex:1 1 auto;">';
            echo '<a href="' . htmlspecialchars($card['link']) . '" class="btn" id="btn-' . $cardId . '">Learn More</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        $containerRow++;
    }
    ?>
</body>


<?php include 'footer.php'; ?>