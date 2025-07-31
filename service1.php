<?php

$certifications = [
    ["code" => "", "name" => "Mr. Ram Chandra Poudel", "logo" => "img/QEAC/qeac_ram_chandra_poudel.png"],
    ["code" => "", "name" => "Mr. Andrew Poudel", "logo" => "img/QEAC/qeac_andrew_poudel.png"],
    ["code" => "", "name" => "Mr. Pawan Thapaliya", "logo" => "img/QEAC/qeac_pawan_thapaliya.png"],
    ["code" => "", "name" => "Ms. Asmita Subedi", "logo" => "img/QEAC/qeac_asmita_subedi.png"],
    ["code" => "", "name" => "Mr. Ganesh Lamichhane", "logo" => "img/QEAC/qeac_ganesh_lamichhane.png"],
    ["code" => "", "name" => "Mr. Nitik Shrestha", "logo" => "img/QEAC/qeac_nitik_shrestha.png"],
    ["code" => "", "name" => "Mr. Manjish Pradhananga", "logo" => "img/QEAC/qeac_manjish_pradhananga.png"],
    ["code" => "", "name" => "Mr. Dipak Acharya", "logo" => "img/QEAC/qeac_dipak_acharya.png"],
    ["code" => "", "name" => "Mr. Anil Khanal", "logo" => "img/QEAC/qeac_anil_khanal.png"],
    ["code" => "", "name" => "Ms. Bhavani Pulgam", "logo" => "img/QEAC/qeac_bhavani_pulgam.png"],
    ["code" => "", "name" => "Ms. Simrita Ranjitkar", "logo" => "img/QEAC/qeac_simrita_ranjitkar.png"],
    ["code" => "", "name" => "Ms. Yugie Rong", "logo" => "img/QEAC/qeac_yugie_rong.png"],
    ["code" => "", "name" => "Mr. Subash Lamichhane", "logo" => "img/QEAC/qeac_subash_lamichhane.png"],
    ["code" => "", "name" => "Ms. Raj Kiran Adhikari", "logo" => "img/QEAC/qeac_raj_kiran.png"],
    ["code" => "", "name" => "Mr. Bikendra Sapkota", "logo" => "img/QEAC/qeac_bikendra_sapkota.png"],
    ["code" => "", "name" => "Mr. Bishal Thapa", "logo" => "img/QEAC/qeac_bishal.png"],
    ["code" => "", "name" => "Mr. Andrew Poudel", "logo" => "img/QEAC/ICEF_andrew_poudel.png"],
    ["code" => "", "name" => "Mr. Ram Chandra Poudel", "logo" => "img/QEAC/ICEF_ram_chandra_poudel.png"],
    ["code" => "", "name" => "Mr. Manjish Pradhananga", "logo" => "img/QEAC/ICEF_manjish_pradhananga.png"],
    ["code" => "USG00014", "name" => "Mr. Andrew Poudel", "logo" => "img/QEAC/USATC_logo.png"],
    ["code" => "", "name" => "Mr. Andrew Poudel", "logo" => "img/QEAC/ThinkNew_logo.png"],
    ["code" => "", "name" => "Mr. Ganesh Lamichhane", "logo" => "img/QEAC/ThinkNew_logo.png"],
    ["code" => "", "name" => "Mr. Manjish Pradhananga", "logo" => "img/QEAC/ThinkNew_logo.png"],
    ["code" => "", "name" => "Mr. Nirmal Uprety", "logo" => "img/QEAC/ThinkNew_logo.png"],
    ["code" => "", "name" => "Mr. Bhuvan Duwadi", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mrs. Sushma Gurung", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mrs. Binda Pathak", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mr. Ram Bichari Tharu", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mr. Ganesh Lamichhane", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mr. Subash Lamichhane", "logo" => "img/QEAC/TITI_logo.png"],
    ["code" => "", "name" => "Mr. Mina Shrestha", "logo" => "img/QEAC/TITI_logo.png"]
];
?>



<div class="container" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <br><br>
    <h1 style=" text-align: center; ">EDUCATION CERTIFICATIONS</h1>
    <h2 style=" text-align: center;">of our Counsellors</h2>
    <div class="section">
        <div class="main-logo"><img src="/img/QEAC/qeac1-logo.png" alt="QEAC Logo"></div>
        <div class="logo-section">
            <?php foreach ($certifications as $cert): ?>
                <?php if (strpos($cert['logo'], 'qeac_') !== false): ?>
                    <div class="logo">
                        <img src="<?php echo $cert['logo']; ?>" alt="<?php echo $cert['name']; ?>">
                        <div class="logo-text">
                            <?php echo (!empty($cert['code']) ? "ITAC: " . str_replace('4', '4 ', $cert['code']) . "<br>" : ""); ?>
                            <strong><?php echo $cert['name']; ?></strong>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ICEF Section -->
    <div class="section">
        <div class="main-logo"><img src="/img/QEAC/ICEF_logo.png" alt="ICEF Logo" style="height: 200px; width: 600px;"></div>
        <div class="logo-section">
            <?php foreach ($certifications as $cert): ?>
                <?php if (strpos($cert['logo'], 'ICEF_') !== false): ?>
                    <div class="logo">
                        <img src="<?php echo $cert['logo']; ?>" alt="<?php echo $cert['name']; ?>">
                        <div class="logo-text">
                            <?php echo (!empty($cert['code']) ? "ITAC: " . str_replace('4', '4 ', $cert['code']) . "<br>" : ""); ?>
                            <strong><?php echo $cert['name']; ?></strong>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- USATC Section -->
    <div class="section">
        <div class="main-logo"><img src="/img/QEAC/USATC_logo.png" alt="USATC Logo" style="height: 200px; width: 600px;"></div>
        <div class="logo-section">
            <?php foreach ($certifications as $cert): ?>
                <?php if (strpos($cert['logo'], 'USATC_logo.png') !== false): ?>
                    <div class="logo-text">
                        <strong><?php echo (!empty($cert['code']) ? " " . str_replace('4', '4 ', $cert['code']) . "<br>" : ""); ?></strong>
                        <strong><?php echo $cert['name']; ?></strong>

                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ThinkNew Section -->
    <div class="section">
        <div class="main-logo"><img src="/img/QEAC/ThinkNew_logo.png" alt="ThinkNew Logo" style="height: 150px; width: 400px;"></div>
        <div class="logo-section" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            <?php $thinkNewCerts = array_filter($certifications, fn($cert) => strpos($cert['logo'], 'ThinkNew_logo.png') !== false); ?>
            <?php foreach ($thinkNewCerts as $index => $cert): ?>
                <div style="padding: 5px; font-size: 1em; line-height: 1.5; min-width: 200px; text-align: center;">
                    <strong><?php echo $cert['name']; ?></strong>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- TITI Section -->
    <div class="section">
        <div class="main-logo"><img src="/img/QEAC/TITI_logo.jpg" alt="TITI Logo" style="height: 100px; width: 550px;"></div>
        <div class="logo-section" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            <?php $thinkNewCerts = array_filter($certifications, fn($cert) => strpos($cert['logo'], 'TITI_logo.png') !== false); ?>
            <?php foreach ($thinkNewCerts as $index => $cert): ?>
                <div style="padding: 5px; font-size: 1em; line-height: 1.5; min-width: 200px; text-align: center;">
                    <strong><?php echo $cert['name']; ?></strong>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>




<style>
    .section {
        margin-top: 30px;
        border: #333 1px solid;
    }

    .logo-section {
        margin-top: 20px;
        gap: 20px;
    }

    .logo {
        display: inline-block;
        margin: 10px;
        padding: 10px;
    }

    .logo img {
        width: 250px;
        height: auto;
    }

    .main-logo {
        font-size: 3em;
        margin-bottom: 10px;
        text-align: center;
    }

    .main-logo span {
        font-size: 0.5em;
        display: block;
        color: #333;
    }

    .icef-section {
        flex-direction: row;
        flex-wrap: wrap;
    }

    .icef-item {
        flex: 0 0 25%;
        /* Each item takes up 25% of the row (max 4 per row) */
        text-align: center;
        padding: 10px;
        box-sizing: border-box;
    }
</style>