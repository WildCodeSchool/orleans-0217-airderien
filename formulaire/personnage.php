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
                <h4>AJOUTER DES PERSONNAGES</h4>
                <form method="post" action="create.php">
                    <div class="form-group">
                        <label for="nom_personnage">Nom du personnage</label>
                        <div>
                            <input type="text" class="form-control" name="nom_personnage" id="nom_personnage"
                                   placeholder="Inscrivez le nom du personnage"/>
                        </div>
                        <label for="prenom_personnage">Prénom du personnage</label>
                        <div>
                            <input type="text" class="form-control" name="prenom_personnage" id="prenom_personnage"
                                   placeholder="Inscrivez le prénom du personnage"/>
                        </div>
                        <div class="form-group">
                            <label for="description_personnage">Texte de présentation</label>
                            <div>
                                <textarea class="form-control" rows="5" name="description_personnage"
                                          id="description_personnage"
                                          placeholder="Renseignez ici un texte de description du personnage"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo_personnage">Choisissez une photo ...</label>
                            <div>
                                <input type="file" class="input_photo_personnage " name="photo_personnage"
                                       id="photo_personnage" accept="image/*" onchange="loadFile(event)">
                                <img id="output"/>
                            </div>
                            <script>
                                var loadFile = function (event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                        <div class="form-group">
                            <p>

                                <label for="acteur">Choisir un acteur dans la liste suivante</label><br />
                                <select name="acteur" id="acteur">
                                    <option value="france">France</option>
                                </select>
                                ou créer un nouvel acteur
                            </p>
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="Créer le personnage" name="creer_personnage"
                               id="creer_personnage"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>



