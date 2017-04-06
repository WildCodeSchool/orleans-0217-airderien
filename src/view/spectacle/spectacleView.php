

<body class="stretched ">


<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <section id="slider" class="slider-parallax revslider-wrap full-screen clearfix">

        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>    <!-- SLIDE  -->
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="12000"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="../public/images/<?=$spectacle->getPhotoSpect()?>"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->



                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"

                             data-x="0"
                             data-y="300"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; font-size: 90px; background-color: rgba(0,0,0,0.6); border-radius: 10px;">Devine qui vient diner ce soir</div>

                        <div class="tp-caption customin ltl tp-resizeme"
                             data-x="500"
                             data-y="450"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; background-color: rgba(0,0,0,0.6);"><a href="#titre" class="button button-white button-light button-border button-large button-rounded tright nomargin"><span>Continuer</span> <i class="icon-angle-right"></i></a></div>


                    </li>


                </ul>
            </div>
        </div>

    </section>
</div>

<!-- Header
    ============================================= -->
<header id="header">
    <div id="header-wrap">
        <div class="container-fluid clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id="logo"> <a href=""> <img src="../public/images/Placeholder+Logo.png" ></a> </div>

            <!-- Primary Navigation ============================================= -->
            <nav id="primary-menu" class="style-2 center">
                <ul class="one-page-menu">
                    <li><a href="#" data-href="#most-toppest"><div class="compagnie">La compagnie</div></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Les spectacles <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../maquette/maquette-test.html">Devine qui vient dîner se soir</a></li>
                            <li><a href="#">Un autre spectacle</a></li>
                            <li><a href="#">Encore un autre spectacle</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>


<div id="page-menu">

    <div id="page-menu-wrap">

        <div class="container-fluid clearfix">

            <div class="menu-title">Devine qui vient dîner ce soir</div>

            <nav>
                <ul>
                    <li class="content"><a  href="#" data-href="#"><div>Acceuil</div></a></li>
                    <li><a href="#" data-href="#personnages"><div>Les Personnages</div></a></li>
                    <li><a href="#" data-href="#galerie"><div>Galerie Multimedia</div></a></li>
                    <li><a href="#" data-href="#calendrier"><div>Notre Calendrier</div></a></li>
                    <li><a href="#" data-href="#presse"><div>Revue de Presse</div></a></li>
                    <li><a href="#" data-href="#contact"><div>Contact</div></a></li>
                </ul>
            </nav>

            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

        </div>

    </div>

</div><!-- #page-menu end -->


<!-- Content
    ============================================= -->

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <span id="titre"></span>
            <div class="heading-block title-center page-section">
                <h2><?=$spectacle->getTitreSpect()?></h2>
                <span></span>
            </div>

            <p class="bottommargin"><?=$spectacle->getDescriptionSpect()?></p>

            <div class="clear"></div>

            <div class="clear"></div>
            <div class="clear"></div>
            <span id="personnages" class="ancre"></span>
            <div class="heading-block title-center page-section">
                <h2>Nos Personnages</h2>
                <span></span>
            </div>

            <div class="row">
                <?php foreach ($personnages as $personnage) : ?>
                <div class="col-md-6 bottommargin" style="min-height: 230px;">
                    <div class="team team-list clearfix">
                        <div class="team-image" style="width: 25%;">
                            <img class="img-circle" src="" alt="Sophie">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><?=$personnage->getPrenomPersonnage()?></h4><span>(Sophie)</span></div>
                            <div class="team-content"><?=$personnage->getDescriptionPersonnage()?></div>
                            <div class="line topmargin-sm nobottommargin"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>


        </div>
    </div>

</section>