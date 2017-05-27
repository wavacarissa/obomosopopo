$(document).ready(function() {
    $('a').click(function () {
        $('html, body').animate({
            scrollTop: $('#penjelasan').offset().top
        }, 800);
        return false;
    });
});

