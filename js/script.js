$(document).ready(function() {
    $('.burger_menu').click(function(event) {
        $('.burger_menu, .navigation_bar').toggleClass('active');
        $('body').toggleClass('lock');
    });
});
