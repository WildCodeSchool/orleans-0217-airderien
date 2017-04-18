<?php
$form->prepare();
var_dump($_POST);
//    foreach($form->getMessages() as $name => $message) {
//            var_dump($message);
//    }
?>

<!-- Header
    ============================================= -->
<header id="header">
    <div id="header-wrap">
        <div class="container-fluid clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id="logo"> <a href=""> <img src="images/Placeholder+Logo.png" ></a> </div>

            <!-- Primary Navigation ============================================= -->
            <nav id="primary-menu" class="style-2 center">
                <ul class="one-page-menu">
                    <li><a href="#" data-href="#most-toppest"><div class="compagnie">La compagnie</div></a></li>
                    <li><a href="#" data-href="#most-toppest"><div class="spectacle">Les spectacles</div></a></li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>


<div id="page-menu">

    <div id="page-menu-wrap">

        <div class="container-fluid clearfix">

            <div class="menu-title">Administration</div>

            <nav>
                <ul>
                    <li class="content"><a  href="#" data-href="#"><div>Infos principales</div></a></li>
                    <li><a href="#" data-href="#personnages"><div>Les Personnages</div></a></li>
                    <li><a href="#" data-href="#galerie"><div>Galerie Multimedia</div></a></li>
                    <li><a href="#" data-href="#calendrier"><div>Le Calendrier</div></a></li>
                    <li><a href="#" data-href="#presse"><div>Les articles de presse</div></a></li>
                </ul>
            </nav>

            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

        </div>

    </div>

</div><!-- #page-menu end -->


<form name="addPresseForm" method="post" action="index.php?route=<?= $typeAction ?>Presse" class="form-horizontal">
    <div class="form-group">
        <label for="titreArticle" class="col-sm-2 control-label">Titre :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="titreArticle" id="titreArticle"
                   placeholder="Titre" value="<?php echo $article->getTitreArticle(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="texteArticle" class="col-sm-2 control-label">Texte :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="texteArticle" id="texteArticle"
                   placeholder="Texte" value="<?php echo $article->getTexteArticle(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="dateArticle" class="col-sm-2 control-label">Date :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="dateArticle" id="dateArticle"
                   placeholder="Date" value="<?php echo $article->getDateArticle(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="journal" class="col-sm-2 control-label">Journal :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="journal" id="journal"
                   placeholder="Journal" value="<?php echo $article->getJournal(); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="auteur" class="col-sm-2 control-label">Auteur :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="auteur" id="auteur"
                   placeholder="Auteur" value="<?php echo $article->getAuteur(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="spectacleId" class="col-sm-2 control-label">Spectacle :</label>
        <div class="col-sm-2">
            <select id="spectacleId" class="form-control" name="spectacleId>
                <?php foreach ($spectacles as $spectacle) :?>
                    <option value="<?php echo $spectacle->getId();?>" ><?php echo $spectacle->getTitreSpect();?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>


    <input type="hidden" name="csrf" value="<?php echo $form->get('csrf')->getValue(); ?>">

    <input type="hidden" name="id" value=" <?php echo $article->getId();?> ">

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" value="submit" class="btn btn-default">Envoyer</button>
        </div>
    </div>

</form>





<div class="row titre">
    <div class="col-xs-12 text-center">
        <h3>Liste des personnages</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-2">
        <?php foreach ($articles as $article) :?>
            <div class="col-lg-4 thumbnail text-center">
                <h3><?php echo $article->getTitreArticle();?></h3>
                <p><?php echo $article->getTexteArticle(); ?></p>
                <p><?php echo $article->getDateArticle(); ?></p>
                <p><?php echo $article->getJournal(); ?></p>
                <p><?php echo $article->getAuteur(); ?></p>

                <form action="index.php" method="GET">
                    <input type="hidden" name="route" value="updatePresse">
                    <input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
                    <input class="btn btn-warning" type="submit" name="updatePersonnage" value="Modifier">
                </form>
                <form action="index.php?route=deletePresse" method="post">
                    <input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
                    <input class="btn btn-danger" type="submit" name="deletePersonnage" value="Supprimer">
                </form>
            </div>
        <?php endforeach ?>
    </div>

</div>