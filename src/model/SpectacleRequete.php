<?php


namespace air_de_rien\model;

use air_de_rien\model\DB;

class SpectacleRequete extends DB
{

    public function showSpectacle()
    {
        return $this->findAll('spectacle');
    }
    public function deleteSpectacle()
    {
        $pdo = new DB();
        $query = "DELETE FROM spectacle WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function addSpectacle($postClean)
    {
        $pdo = new DB();
        $query = "INSERT INTO spectacle (titreSpect, photoSpect, descriptionSpect, active)
        VALUES (:titreSpect,:photoSpect, :descriptionSpect, :active)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreSpect', $postClean['titreSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':photoSpect', $postClean['photoSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionSpect', $postClean['descriptionSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':active', $postClean['active'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function updateSpectacle($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE spectacle SET titreSpect=:titreSpect,photoSpect=:photoSpect, 
        descriptionSpect=:descriptionSpect, active=:active WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->bindValue(':titreSpect', $postClean['titreSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':photoSpect', $postClean['photoSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionSpect', $postClean['descriptionSpect'], \PDO::PARAM_STR);
        $prep->bindValue(':active', $postClean['active'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function choixSpectacle()
    {
        $pdo = new DB();
        $query = "UPDATE spectacle SET active=:active";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':active', 0, \PDO::PARAM_INT);
        $prep->execute();

    }
}