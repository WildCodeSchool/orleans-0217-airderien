

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

                <?php
                foreach ($personnages as $personnage):?>

                    <div class="col-md-6 bottommargin" style="min-height: 230px;">
                    <div class="team team-list clearfix">
                        <div class="team-image" style="width: 25%;">
                            <img class="img-circle" src="../public/images/photos/sophie.jpg" alt="Sophie">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><?=$personnage->getPrenomPersonnage()?></h4><span>(Sophie)</span></div>
                            <div class="team-content"><?=$personnage->getDescriptionPersonnage()?></div>
                            <div class="line topmargin-sm nobottommargin"></div>
                        </div>
                    </div>
                </div>

         <?php endforeach?>
            </div>

            <!-- Medias
                ============================================= -->

            <div class="clear"></div>
            <span id="galerie" class="ancre"></span>
            <div class="heading-block center topmargin page-section">
                <h2>Galerie</h2>
                <span>Nos photos</span>
            </div>

            <div class="fslider flex-thumb-grid grid-12 bottommargin-lg" data-pagi="false" data-arrows="false" data-thumbs="true">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <?php foreach ($medias as $media) :?>
                        <div class="slide" data-thumb="../public/images/photos/<?=$media->getLienMedia()?>">
                            <img src="../public/images/photos/<?=$media->getLienMedia()?>" alt="Image"></div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="heading-block title-center topmargin-lg page-section">
                <h2></h2>
                <span>Nos videos</span>
            </div>

            <div style="display:flex; justify-content: center;">
                <div class="col_one_third" style="max-width: 180px;">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-desc" style="padding: 5px;">
                            <a data-toggle="modal" href="#modal-video1" data-lightbox="inline"><img src="http://img.youtube.com/vi/Jc-2VY_TDYQ/hqdefault.jpg" style="height: 180px;"></a>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-video1" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Fermer <i class="fa fa-times"></i></button>
                            </div>
                            <div class="modal-body">
                                <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>

                                <p>Titre vidéo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="heading-block title-center topmargin-lg page-section">
                    <h2></h2>
                    <span>Notre musique</span>
                </div>

                <div>
                    <iframe id="soundcloud" width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/3452858&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>


                <!-- Calendrier
                ============================================= -->
                <span id="calendrier" class="ancre"></span>
                <div class="heading-block title-center topmargin-lg page-section" >
                    <h2>Calendrier</h2>
                    <span>Liste de nos évènements</span>
                </div>

                <?php foreach ($dates as $date) :?>
                <div class="col_one_third">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-desc">
                            <h3><?=$date->getDateSpectacle()?><span class="subtitle"><?=$date->getLieuSpectacle()?></span></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>


            <div id="presse" class="clear"></div>

        </div>


        <div class="noborder footer-stick topmargin-lg" style=" padding: 80px;" data-stellar-background-ratio="0.3">
            <div class="container clearfix">
                <div class=" nobottommargin">

                    <div class="heading-block title-center nobottomborder" style="margin-top: -60px;">
                        <h2>Revue de Presse</h2>
                    </div>

                    <div class="fslider restaurant-reviews" data-arrows="false" data-animation="slide">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <?php foreach ($articles as $article) :?>
                                <div class="slide" style="margin-top: -20px;">
                                    <p class="lead"><?=$article->getTexteArticle()?></p>
                                    <span class="auteur"><strong><?=$article->getAuteur()?></strong>, <?=$article->getJournal()?>, <?=$article->getDateArticle()?></span><br>
                                </div>
                                <?php endforeach ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        </div>
    </div>

</section>