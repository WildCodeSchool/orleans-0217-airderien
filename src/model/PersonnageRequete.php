<?php


namespace air_de_rien\model;

use air_de_rien\DB;

class PersonnageRequete extends DB
{

    public function showPersonnage()
    {
        return $this->findAll('personnage');
    }
    public function deletePersonnage()
    {
        $pdo = new DB();
        $query = "DELETE FROM personnage WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function addPersonnage($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO personnage (nomPersonnage, prenomPersonnage, descriptionPersonnage) VALUES (:nomPersonnage,:prenomPersonnage, :descriptionPersonnage)";
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':nomPersonnage', $postClean['nomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':prenomPersonnage', $postClean['prenomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionPersonnage', $postClean['descriptionPersonnage'], \PDO::PARAM_STR);
        $prep->execute();
    }

    public function updatePersonnage($postClean)
    {
        $pdo = new DB();
        $query = "UPDATE personnage SET nomPersonnage=:nomPersonnage,prenomPersonnage=:prenomPersonnage, descriptionPersonnage=:descriptionPersonnage WHERE id=:id";
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->bindValue(':nomPersonnage', $postClean['nomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':prenomPersonnage', $postClean['prenomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionPersonnage', $postClean['descriptionPersonnage'], \PDO::PARAM_STR);
        $prep->execute();
    }
}