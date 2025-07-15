(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Initiate the wowjs
    new WOW().init();


    // Navbar - simplified container sizing
    $(document).ready(function() {
        // No need to set container width manually since we're using standard Bootstrap container widths
        
        // Handle dropdown menu behavior for better UX
        if ($(window).width() > 1200) {
            $('.navbar .nav-item.dropdown').hover(
                function() {
                    $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
                },
                function() {
                    $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
                }
            );
        }
        
        // Form validation and AJAX submission
        if ($('.contact-form form').length) {
            $('.contact-form form').on('submit', function(e) {
                // Form validation will be handled by PHP, this is just for the AJAX part
                
                // Show feedback to user
                const formMessage = function(type, message) {
                    const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
                    const iconClass = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
                    const title = type === 'success' ? 'Success!' : 'Error!';
                    
                    return `<div class="alert ${alertClass} alert-dismissible fade show">
                        <h5><i class="fas ${iconClass} me-2"></i> ${title}</h5>
                        <p class="mb-0">${message}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                };
                
                // Scroll to top of form for better UX
                const scrollToForm = function() {
                    $('html, body').animate({
                        scrollTop: $('.contact-form').offset().top - 100
                    }, 400);
                };
            });
        }
    });


    // Hero Header carousel
    $(".header-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: false,
        loop: true,
        margin: 0,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ]
    });



    // Project carousel
    $(".project-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: false,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });

    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: false,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });



    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


})(jQuery);


let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}