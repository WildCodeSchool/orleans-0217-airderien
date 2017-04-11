<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 07/04/17
 * Time: 10:07
 */

$form->prepare();

?>
<?php /*include '../header.php'; */?>

<form name="formAddSpectacle" method="post" <!--action="addSpectacle.php-->">
    <div class="form-group">
        <label for="titreSpect">Titre</label>
        <div>
            <input type="text" class="form-control" name="titreSpect" id="titreSpect" placeholder="Inscrivez le nom du spectacle"/>
        </div>
    </div>
    <div class="form-group">
        <label for="descriptionSpect">Texte de présentation</label>
        <div>
            <textarea class="form-control" rows="5" name="descriptionSpect" id="descriptionSpect" placeholder="Renseignez ici un texte de présentation du spectacle"></textarea>
        </div>
    </div>
    <input type="hidden" name="csrf" value="<?= $form->get('csrf')->getValue();?>" />
    <input class="btn btn-primary" type="submit" value="Valider" name="valider" id="valider" />
</form>
