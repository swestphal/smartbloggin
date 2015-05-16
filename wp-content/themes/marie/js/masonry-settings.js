//jQuery(document).ready(function() {
//    $('#footer-widgets-inner').masonry({
//        columnWidth: 320,
//        itemSelector: '.widget',
//        isFitWidth: true,
//        isAnimated: true
//    });
//});


jQuery(document).ready(function($) {
    var $container = $('#footer-widgets-inner');
    var $masonryOn = true;
    var $columnWidth = 320;


    if ($(document).width() > 600) {
        $masonryOn = true;
        runMasonry();
    }

    $(window).resize(function () {
        if ($(document).width() < 600) {
            if ($masonryOn) {
                $container.masonry('destroy');
                $masonryOn = false;
            }
        }
        else {
            $masonryOn = true;
            runMasonry();
        }
    });

    function runMasonry(){

    $container.masonry({
        columnWidth: $columnWidth,
        itemSelector: '.widget',
        isFitWidth: true,
        isAnimated: true
    });
};
});
