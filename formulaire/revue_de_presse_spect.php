<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création d'un spectacle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="form_spectacle.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="form-group">

                    <h4>REVUE DE PRESSE</h4>

                    <label for="titre_article">Titre de l'article</label>
                    <div>
                        <input type="text" class="form-control" name="titre_article" id="titre_article" placeholder="Inscrivez le titre de l'article"/>
                    </div>
                    <label for="description_spect">Texte de l'article</label>
                    <div>
                        <textarea class="form-control" rows="5" name="texte_article" id="texte_article" placeholder="Ecrivez ici l'article"></textarea>
                    </div>
                    <label for="titre">Nom du journal</label>
                    <div>
                        <input type="text" class="form-control" name="journal" id="journal" placeholder="Renseignez le nom du journal"/>
                    </div>
                    <label for="titre">Auteur de l'article</label>
                    <div>
                        <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Renseignez l'auteur de l'article"/>
                    </div>
                    <label for="titre">Date de l'article</label>
                    <div>
                        <input type="date" class="form-control" name="date_article" id="date_article" placeholder="Renseignez la date de l'article"/>
                    </div>

                </div>

</body>
</html>