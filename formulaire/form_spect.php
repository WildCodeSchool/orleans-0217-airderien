<?php
require connect.php

try {
    $db = new PDO(DSN, USER, PASS);
}
catch (PDOException $e){
    echo 'Erreur de connexion à la base de donnée';
}
