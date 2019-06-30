// smooth scroll
var $ = jQuery;

$(document).ready(function() {
    $('nav a[href*=\\#]').bind('click', function(e) {
        e.preventDefault();
        var target = $(this).attr("href");

        $('html, body').stop().animate({
            scrollTop: ( $(target).offset().top - 100 )
        }, 1000, function() {
            location.hash = target;
        });

        return false;
    });
});
console.log("woola");