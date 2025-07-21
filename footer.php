<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <!-- Footer Top Section -->
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h2 class="footer-title">About Us</h2>
                <p class="footer-text">Grace International is committed to providing exceptional services and solutions to our clients worldwide.</p>
            </div>
            <!-- Quick Links Section -->
            <div class="col-md-4 mb-4">
                <h2 class="footer-title">Quick Links</h2>
                <ul class="footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="faqs.php">FAQ</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-md-4 mb-4">
                <div class="footer-logo-container">
                    <img src="img/Grace-white-Logo.png" alt="Grace International Logo" class="img-fluid footer-logo mb-3">
                </div>
                <div class="footer-contact">
                    <?php
                    $cityContent = getCityContent();
                    ?>
                    <p><i class="fas fa-phone-alt text-primary me-2"></i> <?php echo $cityContent['contact_info']['phone']; ?></p>
                    <p><i class="fas fa-envelope text-primary me-2"></i> <?php echo $cityContent['contact_info']['email']; ?></p>
                    <div class="footer-social mt-3">
                        <a href="<?php echo $cityContent['contact_info']['facebook']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['twitter']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['instagram']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $cityContent['contact_info']['linkedin']; ?>" class="btn-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section -->
        <div class="row mt-2">
            <div class="col text-center">
                <p class="footer-copyright">© 2023 Grace International. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="index.php" class="border-bottom text-primary"><i
                            class="fas fa-copyright text-light me-2"></i>Grace International Group</a>, All
                    rights reserved.</span> <!-- Link to index.php -->
            </div>
            <!-- <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-primary" href="https://htmlcodex.com">HTML
                    Codex</a>
            </div> -->
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="script.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- Location Javascript -->
<script src="js/location.js"></script>
</body>

</html>