<?php
// Ensure $currentPage is set, default to empty if not.
$currentPage = isset($currentPage) ? $currentPage : '';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
    <a href="index.php" class="navbar-brand p-0">
        <img src="img/gi-logo-gif.gif" alt="Logo" style="left: 0; top: 0; width: 50%; height: 50%; ">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php echo ($currentPage === 'index') ? 'active' : ''; ?>">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php
                                                            $popularCoursesPages = ['business_pc', 'health_pc', 'engineering_pc', 'IT_pc', 'trade_pc'];
                                                            if (in_array($currentPage, $popularCoursesPages)) echo 'active';
                                                            ?>" data-bs-toggle="dropdown">Popular Courses</a>
                <div class="dropdown-menu m-0">
                    <a href="business_pc.php" class="dropdown-item <?php echo ($currentPage === 'business_pc') ? 'active' : ''; ?>">Business Studies</a>
                    <a href="health_pc.php" class="dropdown-item <?php echo ($currentPage === 'health_pc') ? 'active' : ''; ?>">Health and Science</a>
                    <a href="engineering_pc.php" class="dropdown-item <?php echo ($currentPage === 'engineering_pc') ? 'active' : ''; ?>">Engineering </a>
                    <a href="IT_pc.php" class="dropdown-item <?php echo ($currentPage === 'IT_pc') ? 'active' : ''; ?>">Information Technology</a>
                    <a href="trade_pc.php" class="dropdown-item <?php echo ($currentPage === 'trade_pc') ? 'active' : ''; ?>">Trade Course</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php
                                                            $studentServicesPages = ['education_service', 'educational_partners', 'scholarship_service'];
                                                            if (in_array($currentPage, $studentServicesPages)) echo 'active';
                                                            ?>" data-bs-toggle="dropdown">Student Services</a>
                <div class="dropdown-menu m-0">
                    <a href="education_service.php" class="dropdown-item <?php echo ($currentPage === 'education_service') ? 'active' : ''; ?>">Education Service</a>
                    <a href="educational_partners.php" class="dropdown-item <?php echo ($currentPage === 'educational_partners') ? 'active' : ''; ?>">Educational Partners</a>
                    <a href="scholarship_service.php" class="dropdown-item <?php echo ($currentPage === 'scholarship_service') ? 'active' : ''; ?>">Scholarship</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="migration.php" class="nav-link dropdown-toggle <?php
                                                                        $migrationServicesPages = ['student_visa', 'visitor_visa', 'tss_visa', 'partner_visa', 'sc_491', 'independent_visa', 'psw_visa', 'state_visa', '407_visa', 'assessment_visa', 'aat_mrt_visa'];
                                                                        // Also check if the main migration.php page is active
                                                                        if (in_array($currentPage, $migrationServicesPages) || $currentPage === 'migration') echo 'active';
                                                                        ?>" data-bs-toggle="dropdown">Migration Services</a>
                <div class="dropdown-menu m-0">
                    <a href="student_visa.php" class="dropdown-item <?php echo ($currentPage === 'student_visa') ? 'active' : ''; ?>">Student Visa / SC 500</a>
                    <a href="visitor_visa.php" class="dropdown-item <?php echo ($currentPage === 'visitor_visa') ? 'active' : ''; ?>">Visitor Visa / SC 600</a>
                    <a href="tss_visa.php" class="dropdown-item <?php echo ($currentPage === 'tss_visa') ? 'active' : ''; ?>">TSS Visa / SC 482</a>
                    <a href="partner_visa.php" class="dropdown-item <?php echo ($currentPage === 'partner_visa') ? 'active' : ''; ?>">Partner Visa</a>
                    <a href="sc_491.php" class="dropdown-item <?php echo ($currentPage === 'sc_491') ? 'active' : ''; ?>">Skilled Work Regional Visa / SC 491</a>
                    <a href="independent_visa.php" class="dropdown-item <?php echo ($currentPage === 'independent_visa') ? 'active' : ''; ?>">Skilled Independent Visa</a>
                    <a href="psw_visa.php" class="dropdown-item <?php echo ($currentPage === 'psw_visa') ? 'active' : ''; ?>">PSW Temporary Resident Visa</a>
                    <a href="state_visa.php" class="dropdown-item <?php echo ($currentPage === 'state_visa') ? 'active' : ''; ?>">State Nomination Visa</a>
                    <a href="407_visa.php" class="dropdown-item <?php echo ($currentPage === '407_visa') ? 'active' : ''; ?>">407 Training Visa / SC 407</a>
                    <a href="assessment_visa.php" class="dropdown-item <?php echo ($currentPage === 'assessment_visa') ? 'active' : ''; ?>">Skill Assessment</a>
                    <a href="aat_mrt_visa.php" class="dropdown-item <?php echo ($currentPage === 'aat_mrt_visa') ? 'active' : ''; ?>">AAT-MRT</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php
                                                            $otherServicesPages = ['oshc_ovhc', 'naati_pte', 'professional_year'];
                                                            if (in_array($currentPage, $otherServicesPages)) echo 'active';
                                                            ?>" data-bs-toggle="dropdown">Other Services</a>
                <div class="dropdown-menu m-0">
                    <a href="oshc_ovhc.php" class="dropdown-item <?php echo ($currentPage === 'oshc_ovhc') ? 'active' : ''; ?>">OSHC/OVHC</a>
                    <a href="naati_pte.php" class="dropdown-item <?php echo ($currentPage === 'naati_pte') ? 'active' : ''; ?>">NAATI/PTE</a>
                    <a href="professional_year.php" class="dropdown-item <?php echo ($currentPage === 'professional_year') ? 'active' : ''; ?>">Professional Year</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact</a>
        </div>
        <!--    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
            <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal"
                data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
            <a href="#"
                class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Grace</a>
        </div>-->
    </div>
</nav>
<!-- This closing div for "container px-0" from header.php might be needed here or at the start of page content -->
<!-- Also, the closing div for "container-fluid sticky-top px-0" from header.php -->
</div> <!-- Closing .container px-0 -->
</div> <!-- Closing .container-fluid sticky-top px-0 -->