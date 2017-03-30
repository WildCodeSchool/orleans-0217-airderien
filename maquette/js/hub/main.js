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

    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;
    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
    };
    showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };
    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {classie.toggle( showLeftPush, 'disabled' );};
        if( button !== 'showRightPush' ) {classie.toggle( showRightPush, 'disabled' );};
    };

    var myWidth = $(window).width();
    if (myWidth >= 600) {
        $('.buttonset p a').click(function() {
            if ($('#style-closed').length){
                $('#style-closed').remove();
            } else {
                $('head').append('<style id="style-closed">'
                    + '.buttonset p#left-button:before {content:"je veux VOIR du thÃªatre";}'
                    + '.buttonset p#left-button:after {content:none;}'
                    + 'a#showLeftPush:before {content:none;}'
                    + 'a#showLeftPush:after {content:"\u2192";}'
                    + '.buttonset p#right-button:before {content:none;}'
                    + '.buttonset p#right-button:after {content:"je veux FAIRE du thÃ©Ã¢tre";}'
                    + 'a#showRightPush:before {content:"\u2190";}'
                    + 'a#showRightPush:after {content:none;}'
                    + '</style>');
            };
        });
    };
    if (myWidth < 600) {
        $('.buttonset p a').click(function() {
            if ($('#style-closed').length){
                $('#style-closed').remove();
            } else {
                $('head').append('<style id="style-closed">'
                    + '.buttonset p#left-button:before {content:none;}'
                    + '.buttonset p#left-button:after {content:none;}'
                    + 'a#showLeftPush:before {content:none;}'
                    + 'a#showLeftPush:after {content:"\u2192";}'
                    + '.buttonset p#right-button:before {content:none;}'
                    + '.buttonset p#right-button:after {content:none;}'
                    + 'a#showRightPush:before {content:"\u2190";}'
                    + 'a#showRightPush:after {content:none;}'
                    + '</style>');
            };
        });
    };



});