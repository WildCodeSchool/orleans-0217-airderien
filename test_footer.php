<?php
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>air de rien</title>
    <link href="https://fonts.googleapis.com/css?family=Boogaloo|Gloria+Hallelujah|Indie+Flower|Oxygen" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/user.css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <meta charset="utf-8">
</head>



<body>



<!-- LAYER NR. 11 -->
<!--<div class="tp-caption   tp-resizeme  soundcloudwrapper"-->
<!--     id="slide-1494-layer-6"-->
<!--     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
<!--     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','90','320','188']"-->
<!--     data-width="['400','380','640','380']"-->
<!--     data-height="none"-->
<!--     data-whitespace="normal"-->
<!--     data-transform_idle="o:1;"-->
<!---->
<!--     data-transform_in="y:50px;opacity:0;s:1000;e:Power3.easeOut;"-->
<!--     data-transform_out="opacity:0;s:1000;e:Power3.easeOut;s:1000;e:Power3.easeOut;"-->
<!--     data-start="2350"-->
<!--     data-splitin="none"-->
<!--     data-splitout="none"-->
<!--     data-basealign="slide"-->
<!--     data-responsive_offset="on"-->
<!---->
<!---->
<!--     style="z-index: 15; min-width: 400px; max-width: 400px; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);text-transform:left;"><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/168251554&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe> </div>-->

<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/278303476&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/3452858&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/3452858&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_artwork=false"></iframe>

<!--<div class="embed-responsive embed-responsive-4by3">-->
<!--    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jc-2VY_TDYQ" frameborder="0"></iframe>-->
<!---->
<!--</div>-->


<div class="container" style="height=300px;">
    <div class="span8">
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <iframe src="//www.youtube.com/embed/-w-58hQ9dLk?controls=0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
                </div>
                <div class="item">
                    <iframe src="//www.youtube.com/embed/SEBLt6Kd9EY?controls=0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
                </div>
                <div class="item">
                    <iframe src="//www.youtube.com/embed/IkTw7J-hGmg?controls=0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
    </div>
</div>


<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
<script type="text/javascript">
    (function(){
        var widgetIframe = document.getElementById('sc-widget'),
            widget       = SC.Widget(widgetIframe);

        widget.bind(SC.Widget.Events.READY, function() {
            widget.bind(SC.Widget.Events.PLAY, function() {
                // get information about currently playing sound
                widget.getCurrentSound(function(currentSound) {
                    console.log('sound ' + currentSound.get('') + 'began to play');
                });
            });
            // get current level of volume
            widget.getVolume(function(volume) {
                console.log('current volume value is ' + volume);
            });
            // set new volume level
            widget.setVolume(50);
            // get the value of the current position
        });

    }());
</script>


</body>
</html>
