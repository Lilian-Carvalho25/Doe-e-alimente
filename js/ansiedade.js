$(document).ready(function() {
    var $carousel = $('#carousel');
    var $imgs = $carousel.find('img');
    var currentIndex = 0;
    var interval;

    $imgs.first().addClass('active');

    function cycleImages() {
        interval = setInterval(function() {
            $imgs.eq(currentIndex).removeClass('active');
            currentIndex = (currentIndex + 1) % $imgs.length;
            $imgs.eq(currentIndex).addClass('active');
        }, 5000);
    }

    cycleImages();
});