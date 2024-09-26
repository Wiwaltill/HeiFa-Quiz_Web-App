// Wait for the document to be ready before executing the code
$(document).ready(function() {
    // Hide the "To Top" button by default
    $('#toTopBtn').hide();

    // Add an event listener to the window's scroll event
    $(window).scroll(function() {
        // Check if the user has scrolled more than 20 pixels from the top
        if ($(this).scrollTop() > 20) {
            // If so, fade in the "To Top" button
            $('#toTopBtn').fadeIn();
        } else {
            // If not, fade out the "To Top" button
            $('#toTopBtn').fadeOut();
        }
    });

    // Add an event listener to the "To Top" button's click event
    $('#toTopBtn').click(function() {
        // Animate the HTML and body elements to scroll to the top of the page
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        // Prevent the default link behavior
        return false;
    });
});