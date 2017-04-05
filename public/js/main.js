$(document).ready(function() {

    if ($('#home-over-left').css('opacity') == '0') {
        $('#home-over-left').css("opacity","0");
        $('#home-over-left, #cbp-spmenu-s1').hover(function() {$('#home-over-left').stop().animate({ opacity: 1 }, "fast");},
            function() {$('#home-over-left').stop().animate({ opacity: 0 }, "fast");});
    };
    if ($('#home-over-right').css('opacity') == '0') {
        $('#home-over-right').css("opacity","0");
        $('#home-over-right, #cbp-spmenu-s2').hover(function() {$('#home-over-right').stop().animate({ opacity: 1 }, "fast");},
            function() {$('#home-over-right').stop().animate({ opacity: 0 }, "fast");});
    };

});


(function( $ ){

    $.fn.fitText = function( kompressor, options ) {

        // Setup options
        var compressor = kompressor || 1,
            settings = $.extend({
                'minFontSize' : Number.NEGATIVE_INFINITY,
                'maxFontSize' : Number.POSITIVE_INFINITY
            }, options);

        return this.each(function(){

            // Store the object
            var $this = $(this);

            // Resizer() resizes items based on the object width divided by the compressor * 10
            var resizer = function () {
                $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
            };

            // Call once to set.
            resizer();

            // Call on resize. Opera debounces their resize by default.
            $(window).on('resize.fittext orientationchange.fittext', resizer);

        });

    };

})( jQuery );

$(document).ready(function() {
    $(".fittext").fitText();
    $(".left-background").backstretch("../public/images/bg.jpg");
    $(".right-background").backstretch("../public/images/bg2.jpg");
    $('#home-left .home-over').niceScroll({styler:"fb",cursorcolor:"#7e646f"});
    $("#home-right .home-over").niceScroll({styler:"fb",cursorcolor:"#fff"});
});