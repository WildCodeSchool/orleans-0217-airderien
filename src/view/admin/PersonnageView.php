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


<form name="addPersoForm" method="post" action="index.php?route=<?= $typeAction ?>Personnage" class="form-horizontal">
    <div class="form-group">
        <label for="nomPersonnage" class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="nomPersonnage" id="nomPersonnage"
                   placeholder="Nom" value="<?php echo $personnage->getNomPersonnage(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="prenomPersonnage" class="col-sm-2 control-label">Prenom :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="prenomPersonnage" id="prenomPersonnage"
                   placeholder="Prenom" value="<?php echo $personnage->getPrenomPersonnage(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="nomPersonnage" class="col-sm-2 control-label">Description :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="descriptionPersonnage" id="descriptionPersonnage"
                   placeholder="Description" value="<?php echo $personnage->getDescriptionPersonnage(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="photoPersonnage" class="col-sm-2 control-label">Photo :</label>
        <div class="col-sm-2">
            <input type="file" class="form-control" name="photoPersonnage" id="photoPersonnage"
                   value="<?php echo $personnage->getPhotoPersonnage(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="spectacleId" class="col-sm-2 control-label">Photo :</label>
        <div class="col-sm-2">
            <select id="spectacleId" class="form-control">
                <?php foreach ($spectacles as $spectacle) :?>
                    <option><?php echo $spectacle->getTitreSpect();?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="membreId" class="col-sm-2 control-label">Acteur :</label>
        <div class="col-sm-2">
            <select class="form-control">
                <?php foreach ($membres as $membre) :?>
                    <option><?php echo $membre->getPrenomMembre();?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

        <input type="hidden" name="csrf" value="<?php echo $form->get('csrf')->getValue(); ?>">

    <input type="hidden" name="id" value=" <?php echo $personnage->getId();?> ">

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
        <?php foreach ($personnages as $personnage) :?>
            <div class="col-lg-4 thumbnail text-center">
                <img src="<?php echo $personnage->getPhotoPersonnage();?>" alt="<?php echo $personnage->getPrenomPersonnage();?>">
                <h3><?php echo $personnage->getNomPersonnage();?>  <?php echo $personnage->getPrenomPersonnage();?></h3>
                <p><?php echo $personnage->getDescriptionPersonnage(); ?></p>

                <form action="index.php" method="GET">
                    <input type="hidden" name="route" value="updatePersonnage">
                    <input type="hidden" name="id" value="<?php echo $personnage->getId(); ?>">
                    <input class="btn btn-warning" type="submit" name="updatePersonnage" value="Modifier">
                </form>
                <form action="index.php?route=deletePersonnage" method="post">
                    <input type="hidden" name="id" value="<?php echo $personnage->getId(); ?>">
                    <input class="btn btn-danger" type="submit" name="deletePersonnage" value="Supprimer">
                </form>
            </div>
        <?php endforeach ?>
    </div>

</div>