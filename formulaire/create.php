<?php
require 'connect.php';



if(isset($_POST['creer'])) {

$titreSpect = $_POST['titre_spect'];
$descriptionSpect = $_POST['description_spect'];
$photoSpect = $_POST['photo_spect'];
$titreArticle= $_POST['titre_article'];
$texteArticle = $_POST['texte_article'];
$journal= $_POST['journal'];
$auteur= $_POST['auteur'];
$dateArticle= $_POST['date_article'];

$req1 = $db -> exec("INSERT INTO viewSite (titre_spect,description_spect,photo_spect) VALUES ('$titreSpect','$descriptionSpect','$photoSpect')");
$req2 = $db -> exec("INSERT INTO revue_de_presse (titre_article,texte_article,journal,auteur,date_article) VALUES ('$titreArticle','$texteArticle','$journal','$auteur','$dateArticle')");

header('location:index.php');

}

if(isset($_POST['creer_personnage'])) {

    $nomPersonnage = $_POST['nom_personnage'];
    $prenomPersonnage = $_POST['prenom_personnage'];
    $descriptionPersonnage = $_POST['description_personnage'];
    $photoPersonnage= $_POST['photo_personnage'];

    $req = $db -> exec("INSERT INTO personnage (nom_personnage,prenom_personnage,description_personnage,photo_personnage) VALUES ('$nomPersonnage','$prenomPersonnage','$descriptionPersonnage','$photoPersonnage')");

    header('location:index.php');

}