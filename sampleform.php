<?php
$pageTitle = "Grace International";
$currentPage = "index";
include 'header.php';
include 'navbar.php';
?>

<div class="container-fluid service py-5 ">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <!--  <h4 class="text-primary">Our Services</h4>-->
            <h1 class="display-4">Speak to our Team</h1>
            <h5><i>Fill out the form for a free consultation</i></h5>
        </div>

        <div class="container">
            <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <!-- Title section -->
                <div class="content">
                    <!-- Registration form -->
                    <form action="#">
                        <div class="user-details">
                            <!-- Input for Full Name -->
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <!-- Input for Username -->
                            <div class="input-box">
                                <span class="details">Contact Number</span>
                                <input type="text" placeholder="Enter your number" required>
                            </div>
                            <!-- Input for Email -->

                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" placeholder="Enter your email" required>
                            </div>
                            <!-- Input for Phone Number -->

                            <div class="input-box">
                                <span class="details">Nearest Branch</span>
                                <select id="nearest Branch" name="nearest branch">
                                    <option value="">---------------------------</option>
                                    <option value="melbourne">Melbourne</option>
                                    <option value="sydney">Sydney</option>
                                    <option value="adelade">Adelaide</option>
                                    <option value="perth">Perth</option>
                                    <option value="hobart">Hobart</option>
                                    <option value="canberra">Canberra</option>
                                    <option value="brisbane">Brisbane</option>
                                    <option value="tasmania">Tasmania</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!-- Input for Password -->
                            <div class="input-box">
                                <span class="details">My Query is regarding?</span>
                                <select id="query" name="query">
                                    <option value="">---------------------------</option>
                                    <option value="student">Student Visa</option>
                                    <option value="migration">Migration</option>
                                    <option value="course">Course (Admission)</option>
                                    <option value="consultation">Consultation</option>
                                </select>
                            </div>

                            <!-- Input for Confirm Password -->
                            <div class="input-box">
                                <span class="details">Message</span>
                                <input type="textarea" placeholder="">
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>