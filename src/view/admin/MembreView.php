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
                    <li><a href="#" data-href="#membres"><div>Les Membres</div></a></li>
                    <li><a href="#" data-href="#galerie"><div>Galerie Multimedia</div></a></li>
                    <li><a href="#" data-href="#calendrier"><div>Le Calendrier</div></a></li>
                    <li><a href="#" data-href="#presse"><div>Les articles de presse</div></a></li>
                </ul>
            </nav>

            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

        </div>

    </div>

</div><!-- #page-menu end -->


<form name="addPersoForm" method="post" action="index.php?route=<?= $typeAction ?>Membre" class="form-horizontal">
    <div class="form-group">
        <label for="nomMembre" class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="nomMembre" id="nomMembre"
                   placeholder="Nom" value="<?php echo $membre->getNomMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="prenomMembre" class="col-sm-2 control-label">Prenom :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="prenomMembre" id="prenomMembre"
                   placeholder="Prenom" value="<?php echo $membre->getPrenomMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="descriptionMembre" class="col-sm-2 control-label">Description :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="descriptionMembre" id="descriptionMembre"
                   placeholder="Description" value="<?php echo $membre->getDescriptionMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="LienPhotoMembre" class="col-sm-2 control-label">Photo :</label>
        <div class="col-sm-2">
            <input type="file" class="form-control" name="LienPhotoMembre" id="LienPhotoMembre"
                   value="<?php echo $membre->getLienPhotoMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="facebookMembre" class="col-sm-2 control-label">Facebook :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="facebookMembre" id="facebookMembre"
                   placeholder="www.facebook.com" value="<?php echo $membre->getFacebookMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="mailMembre" class="col-sm-2 control-label">Mail :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="mailMembre" id="mailMembre"
                   placeholder="123@mail.com" value="<?php echo $membre->getMailMembre(); ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="lienMembre" class="col-sm-2 control-label">Site :</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="lienMembre" id="lienMembre"
                   placeholder="www.123.com" value="<?php echo $membre->getLienMembre(); ?>" />
        </div>
    </div>

    <input type="hidden" name="csrf" value="<?php echo $form->get('csrf')->getValue(); ?>">

    <input type="hidden" name="id" value=" <?php echo $membre->getId();?> ">

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" value="submit" class="btn btn-default">Envoyer</button>
        </div>
    </div>

</form>





<div class="row titre">
    <div class="col-xs-12 text-center">
        <h3>Liste des membres</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-2">
        <?php foreach ($membres as $membre) :?>
            <div class="col-lg-4 thumbnail text-center">
                <img src="<?php echo $membre->getLienPhotoMembre();?>" alt="<?php echo $membre->getPrenomMembre();?>">
                <h3><?php echo $membre->getNomMembre();?>  <?php echo $membre->getPrenomMembre();?></h3>
                <p><?php echo $membre->getDescriptionMembre(); ?></p>

                <form action="index.php" method="GET">
                    <input type="hidden" name="route" value="updateMembre">
                    <input type="hidden" name="id" value="<?php echo $membre->getId(); ?>">
                    <input class="btn btn-warning" type="submit" name="updateMembre" value="Modifier">
                </form>
                <form action="index.php?route=deleteMembre" method="post">
                    <input type="hidden" name="id" value="<?php echo $membre->getId(); ?>">
                    <input class="btn btn-danger" type="submit" name="deleteMembre" value="Supprimer">
                </form>
            </div>
        <?php endforeach ?>
    </div>

</div>