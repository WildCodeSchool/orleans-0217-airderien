<?php


namespace air_de_rien\model;


class MediaRequete extends DB
{
    public function showMedia()
    {
        return $this->findAll('media');
    }
    public function deleteMedia()
    {
        $pdo = new DB();
        $query = "DELETE FROM media WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        if (!$prep->execute()) {

        }
    }

    public function addMedia($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO media (titreMedia, lienMedia, spectacleId, afficher, 
        affectation, genre) VALUES (:titreMedia, :lienMedia, :spectacleId, :afficher, 
        :affectation, :genre)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreMedia', $postClean['titreMedia'], \PDO::PARAM_STR);
        $prep->bindValue(':lienMedia', $postClean['lienMedia'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->bindValue(':affectation', $postClean['affectation'], \PDO::PARAM_INT);
        $prep->bindValue(':genre', $postClean['genre'], \PDO::PARAM_STR);


        $prep->execute();
    }

    public function updateMedia($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE media SET titreMedia=:titreMedia, lienMedia=:lienMedia, spectacleId=:spectacleId, 
        afficher=:afficher, affectation=:affectation, genre=:genre WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->bindValue(':titreMedia', $postClean['titreMedia'], \PDO::PARAM_STR);
        $prep->bindValue(':lienMedia', $postClean['lienMedia'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->bindValue(':affectation', $postClean['affectation'], \PDO::PARAM_INT);
        $prep->bindValue(':genre', $postClean['genre'], \PDO::PARAM_STR);

        $prep->execute();
    }
}