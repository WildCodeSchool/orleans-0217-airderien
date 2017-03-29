<?php
include connect.php;


$db = mysqli_connect(SERVER, USER, PASS, DB);
mysqli_set_charset($db,"utf8");

if(!empty($_POST)){
    foreach($_POST as $key=>$data){
        $postClean[$key] = mysqli_real_escape_string($db, htmlentities(trim($data)));
    }
    if (isset($_POST['creer'])){
        $id = $postClean['id'];
        $titreSpectacle = $postClean['titre_spectacle'];

    }$req = "INSERT INTO 