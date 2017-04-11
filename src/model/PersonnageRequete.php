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
    public function addOrUpdate()
    {
        if (isset($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
        }
        $pdo = new DB();
        if (!empty($_POST['id'])) {
            $query = "UPDATE personnage SET nomPersonnage=:nomPersonnage,prenomPersonnage=:prenomPersonnage, descriptionPersonnage=:descriptionPersonnage WHERE id=:id";
            $prep = $pdo->db->prepare($query);
            $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
            $prep->bindValue(':nomPersonnage', $postClean['nomPersonnage'], \PDO::PARAM_STR);
            $prep->bindValue(':prenomPersonnage', $postClean['prenomPersonnage'], \PDO::PARAM_STR);
            $prep->bindValue(':descriptionPersonnage', $postClean['descriptionPersonnage'], \PDO::PARAM_STR);
            $prep->execute();
            return 'modifications enregistrées';
        }
        $query = "INSERT INTO personnage (nomPersonnage, prenomPersonnage, descriptionPersonnage) VALUES (:nomPersonnage,:prenomPersonnage, :descriptionPersonnage)";
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':nomPersonnage', $postClean['nomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':prenomPersonnage', $postClean['prenomPersonnage'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionPersonnage', $postClean['descriptionPersonnage'], \PDO::PARAM_STR);
        $prep->execute();
    }
}