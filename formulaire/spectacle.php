<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création d'un spectacle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="form_spectacle.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-md-6">
                <h4>AJOUTER UN SPECTACLE</h4>
                <form method="post" action="create.php">
                    <div class="form-group">
                        <label for="titreSpect">Titre du Spectacle</label>
                        <div>
                            <input type="text" class="form-control" name="titreSpect" id="titreSpect"
                                   placeholder="Inscrivez le titre du spectacle"/>
                        </div>
                        <div class="form-group">
                            <label for="descriptionSpect">Texte de présentation</label>
                            <div>
                                <textarea class="form-control" rows="5" name="descriptionSpect"
                                          id="descriptionSpect"
                                          placeholder="Renseignez ici un texte de présentation du spectacle"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photoSpect">Choisissez une photo ...</label>
                            <div>
                                <input type="file" class="photoSpect " name="photoSpect"
                                       id="photoSpect" accept="image/*" onchange="loadFile(event)">
                                <img id="output"/>
                            </div>
                            <script>
                                var loadFile = function (event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                            </div>
                        <div>
                            <input class="btn btn-primary" type="submit" value="Créer le spectacle" name="creer_spectacle"
                                   id="creer_spectacle"/>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>



