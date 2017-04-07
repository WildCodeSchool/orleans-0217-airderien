<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 07/04/17
 * Time: 10:07
 */

$form->prepare();

?>

<form name="formAddSpectacle" method="post">
    <div class="form-group">
        <label for="titre_spectacle">Titre</label>
        <div>
            <input type="text" class="form-control" name="titre_spectacle" id="titre_spectacle" placeholder="Inscrivez le nom du spectacle"/>
        </div>
    </div>
    <div class="form-group">
        <label for="description_spectacle">Texte de présentation</label>
        <div>
            <textarea class="form-control" rows="5" name="description_spectacle" id="description_spectacle" placeholder="Renseignez ici un texte de présentation du spectacle"></textarea>
        </div>
    </div>
    <input type="hidden" name="csrf" value="<?= $form->get('csrf')->getValue();?>" />
    <input class="btn btn-primary" type="submit" value="Valier" name="valider" id="valider" />
</form>
