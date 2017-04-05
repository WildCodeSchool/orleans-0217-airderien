<?php



try {
$db = new PDO("mysql:host=localhost;dbname=air_de_rien","root","carpediem@3120");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo 'Erreur de connexion à la base de donnée';
}

?>