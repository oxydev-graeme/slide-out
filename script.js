jQuery(document).ready(function($) {
    $('.side-button').click(function() {
        $('#custom-slide-out').toggleClass('slide-out-open');
        $('#slide-out-content').fadeToggle();
    });

    $('.close-button').click(function() {
        $('#custom-slide-out').toggleClass('slide-out-open');
        $('#slide-out-content').fadeToggle();
    });
});