<div class="footer">
    <div class="footer-content">
        <div class="footer-section logo-section">
            <img src="img/Grace-white-Logo.png" alt="Grace International Education & Migration" class="logo">
            <div class="footer-social mt-3">
                <a href="<?php echo $cityContent['contact_info']['facebook']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $cityContent['contact_info']['twitter']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo $cityContent['contact_info']['instagram']; ?>" class="btn-square rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $cityContent['contact_info']['linkedin']; ?>" class="btn-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
            </div><br><br>
            <form>
                <input type="email" placeholder="Enter your email here" class="email-input"><br><br>
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
        </div>
        <div class="footer-section">
            <h3>About Us</h3>
            <h3 class="green-line"></h3>
            <p><a href="about.php">Who We Are</a></p>
            <p><a href="about.php">Our Timeline</a></p>
            <p><a href="about.php">Our Leadership Team</a></p>
            <p><a href="about.php">Partner With Us</a></p>
            <p><a href="about.php">Awards Recognitions</a></p><br>
            <h3>Our Services</h3>
            <h3 class="green-line"></h3>
            <p><a href="#">Meet us Online</a></p>
            <p><a href="#">Admission Counseling</a></p>
            <p><a href="#">Health Cover</a></p>
            <p><a href="#">Student Visa Service</a></p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <h3 class="green-line"></h3>
            <p><a href="service.php">Visit Our Virtual Office</a></p>
            <p><a href="service.php">Test Preparation</a></p>
            <p><a href="service.php">International Study Guide</a></p>
            <p><a href="service.php">Duolingo English Test</a></p><br>
            <h3>Study Destinations</h3>
            <h3 class="green-line"></h3>
            <p><a href="#">Study in Australia</a></p>
            <p><a href="#">Study in Canada</a></p>
            <p><a href="#">Study in Europe</a></p>
            <p><a href="#">Study in New Zealand</a></p>
            <p><a href="#">Study in UK</a></p>
            <p><a href="#">Study in USA</a></p>
        </div>
        <div class="footer-section">
            <h3>Courses Abroad</h3>
            <h3 class="green-line"></h3>
            <p><a href="#">MBA in Australia</a></p>
            <p><a href="#">MBA in USA</a></p>
            <p><a href="#">MBA in Canada</a></p><br>
            <h3>Global Offices</h3>
            <h3 class="green-line"></h3>
            <p><a href="contact.php">Australia</a></p>
            <p><a href="contact.php">Bangladesh</a></p>
            <p><a href="contact.php">Dubai</a></p>
            <p><a href="contact.php">India</a></p>
            <p><a href="contact.php">Indonesia</a></p>
            <p><a href="contact.php">Kenya</a></p>
            <p><a href="contact.php">Nepal</a></p>
            <p><a href="contact.php">New Zealand</a></p>
            <p><a href="contact.php">Pakistan</a></p>
            <p><a href="contact.php">Philippines</a></p>
            <p><a href="contact.php">Sri Lanka</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2024. Grace International. All Rights Reserved.</p>
    </div>
</div>
<style>
    .footer {
        background-color: #181818;
        color: #ffffff;
        width: 100%;
        padding: 20px 0;
    }

    .footer-content {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        width: 80%;
        margin: 0 auto;
    }

    .footer-section {
        flex: 1;
        min-width: 150px;
        margin: 10px;
    }

    .logo-section {
        text-align: center;
    }

    .logo-section .logo {
        max-width: 100%;
        height: auto;
    }

    .footer-section h3 {
        color: white;
        margin-bottom: 10px;
    }

    .footer-section p {
        margin: 5px 0;
    }

    .footer-section a {
        color: #ababab;
        text-decoration: none;
    }

    .footer-section a:hover {
        color: #ffffff;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px solid #ffffff;
        width: 80%;
        margin: 20px auto 0;
    }



    .green-line {
        border: 0;
        height: 2px;
        background: #1baa4b;
        margin-bottom: 10px;
    }

    .email-input {
        padding: 10px;
        margin-right: 10px;
        border: none;
        background-color: #ffffff;
        color: #333;
    }

    .subscribe-btn {
        padding: 5px 10px;
        background-color: #1baa4b;
        border: none;
        color: #fff;
        cursor: pointer;
    }

    .subscribe-btn:hover {
        background-color: #1baa4b;
    }
</style>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/<?php echo str_replace(['+', ' ', '(', ')', '-'], '', $cityContent['contact_info']['whatsapp']); ?>?text=Hello%20Grace%20International,%20I%20have%20a%20question" 
   class="whatsapp-btn" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

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

<!-- Initialize any remaining carousels -->
<script>
$(document).ready(function() {
    // Initialize any universities carousels that might not have been initialized yet
    if (typeof $.fn.owlCarousel !== 'undefined') {
        $(".universities-carousel:not(.owl-loaded)").each(function() {
            $(this).owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                margin: 25,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>'
                ],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 5
                    }
                }
            });
        });
    }
});
</script>
</body>

</html>