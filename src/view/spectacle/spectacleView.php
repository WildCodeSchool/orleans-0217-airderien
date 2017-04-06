

<body class="stretched ">

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