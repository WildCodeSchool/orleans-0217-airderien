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

            <form method="post" action="create.php">

                <h3>Créer un nouveau spectacle</h3>

                <div class="form-group">
                    <label for="titre_spect">Titre</label>
                    <div>
                        <input type="text" class="form-control" name="titre_spect" id="titre_spect" placeholder="Inscrivez le nom du spectacle"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description_spect">Texte de présentation</label>
                    <div>
                        <textarea class="form-control" rows="5" name="description_spect" id="description_spect" placeholder="Renseignez ici un texte de présentation du spectacle"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo_spect">Choisissez une photo ...</label>
                    <div>
                        <input type="file" class="input_photo_principale " name="photo_spect" id="photo_spect" accept="image/*" onchange="loadFile(event)">
                        <img id="output"/>
                    </div>
                    <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="form-group">
                    <h4>GALERIE MEDIA</h4>
                        <label for="ajout_photo">Ajouter une photo</label>
                        <input type="file" name="ajout_photo" id="ajout_photo" value="Ajouter une photo"/>
                        <label for="ajout_video">Ajouter une vidéo</label>
                        <input type="file" name="ajout_video" id="ajout_video" value="Ajouter une vidéo"/>
                        <label for="ajout_photo">Ajouter de la musique</label>
                        <input type="file" name="ajout_son" id="ajout_son" value="Ajouter de la musique"/>
                </div>
                <div class="form-group">
                    <label for="personnage"><h4>CREER LES PERSONNAGES</h4></label>
                    <div>
                        <input type="button"  name="personnage" id="personnage" value="Ajouter un personnage" onclick="javascript:location.href='personnage.php'"/>
                    </div>


                </div>
                <div class="form-group">
                    <label for="calendrier"><h4>AJOUTER DES DATES DE SPECTACLE</h4></label>
                    <div>
                        <input type="button"  name="date" id="date" value="Ajouter des dates" onclick="javascript:location.href='calendrier.php'"/>
                    </div>


                </div>




                <div>
                    <input class="btn btn-primary" type="submit" value="Finaliser" name="finaliser" id="finaliser" />
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>