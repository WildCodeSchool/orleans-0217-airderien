<?php


namespace air_de_rien\model;

use air_de_rien\model\DB;

class CalendrierRequete extends DB
{

    public function dateListe()
    {
        return $this->findAll('calendrier');
    }
    public function deleteDate()
    {
        $pdo = new DB();
        $query = "DELETE FROM calendrier WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function addDate($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO calendrier (lieuSpectacle, dateSpectacle, spectacleId) VALUES (:lieuSpectacle,:dateSpectacle, :spectacleId)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':lieuSpectacle', $postClean['lieuSpectacle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateSpectacle', $postClean['dateSpectacle'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_STR);
        $prep->execute();
    }

    public function updateDate($postClean)
    {
        $pdo = new DB();
var_dump($postClean);
        $query = "UPDATE calendrier SET lieuSpectacle=:lieuSpectacle,dateSpectacle=:dateSpectacle, 
        spectacleId=:spectacleId WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':lieuSpectacle', $postClean['lieuSpectacle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateSpectacle', $postClean['dateSpectacle'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        return $prep->execute();
    }
}