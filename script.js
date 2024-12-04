// jQuery Scroll to Top Button functionality
$(document).ready(function() {
    // Show or hide scroll to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#scrollTopBtn').fadeIn();
        } else {
            $('#scrollTopBtn').fadeOut();
        }
    });

    // Smooth scroll to top
    $('#scrollTopBtn').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });
});
