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
                <p class="left">Although English is not an official language in Australia, it’s the language
                    primarily used. As an international student, you will need to be proficient in English to make
                    daily conversations with the locals and in classrooms. Hence, English proficiency tests are
                    required if you want to pursue a degree and work in Australia.
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
                <p class="left">NAATI is the only body approved to provide accreditation for translators and
                    interpreters who want to pursue a career as professional language practitioners in Australia.
                    <br><br>
                    Prospective applicants also have the chance to get five points for their PR through the
                    NAATI-CCL Test.
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
                <p class="left">PTE is one of the English proficiency tests to assess the language skills of
                    non-English speakers planning to study in English-speaking countries like Australia. Australia’s
                    Department of Home Affairs accepts this test for all visa applications.
                </p>
            </div>
        </div>
    </div>
</div>


<?php
include 'form.php';
include 'footer.php';
?>