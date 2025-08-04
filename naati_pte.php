<?php
include 'header.php';
include 'navbar.php';
?>

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">NAATI/ PTE</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Other Services</a></li>
            <li class="breadcrumb-item active text-primary">NAATI/ PTE</li>
        </ol>
        <div class="pt-4 text-center">
            <a class="btn btn-primary rounded-pill py-2 px-4" href="form1.php">Want to know more? Click Here.</a>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid service py-5">
    <div class="left">
        <div class="row justify-content-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="left">English, though not an official language in Australia, is the primary language for communication and education. International students must demonstrate English proficiency through tests like IELTS or TOEFL for university admission and visas, enabling effective daily interactions, academic success, and work opportunities in Australia.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="left">
        <div class="row justify-content-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center"><strong>National Accreditation Authority for<br> Translators and
                        Interpreters in
                        Australia<br>(NAATI)</strong></h1><br>
                <p class="left">NAATI is the only recognized authority in Australia that provides accreditation for translators and interpreters aiming to become professional language practitioners. Additionally, applicants can earn five extra points toward their Permanent Residency (PR) by passing the NAATI Credentialed Community Language (CCL) Test.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid service py-5">
    <div class="left">
        <div class="row justify-content-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center"><strong>Pearson English Language Test (PTE) </strong></h1><br>
                <p class="left">The Pearson Test of English (PTE) is a widely accepted English proficiency exam for non-native speakers seeking to study, work, or migrate to Australia. Recognized by the Department of Home Affairs, PTE evaluates listening, reading, speaking, and writing skills, and its results are accepted for all visa categories.</p>
            </div>
        </div>
    </div>
</div>


<?php
include 'form.php';
include 'footer.php';
?>