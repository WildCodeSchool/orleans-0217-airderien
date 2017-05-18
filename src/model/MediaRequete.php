<?php


namespace air_de_rien\model;


class MediaRequete extends DB
{
    public function showMedia()
    {
        return $this->findAll('media');
    }

    public function findAllMediaCompagnie($table) {
        $req = "SELECT * FROM $table WHERE affectation=1 ";
        $prep = $this->getDb()->prepare($req);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
        return $res;
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

        $query = "INSERT INTO media (titreMedia, lienPhoto, lienVideo, spectacleId, affectation, genre) 
        VALUES (:titreMedia, :lienPhoto, :lienVideo, :spectacleId, :affectation, :genre)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreMedia', $postClean['titreMedia'], \PDO::PARAM_STR);
        $prep->bindValue(':lienPhoto', $postClean['lienPhoto'], \PDO::PARAM_STR);
        $prep->bindValue(':lienVideo', $postClean['lienVideo'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':affectation', $postClean['affectation'], \PDO::PARAM_INT);
        $prep->bindValue(':genre', $postClean['genre'], \PDO::PARAM_STR);


        $prep->execute();
    }

    public function updateMedia($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE media SET ";

        if (isset($postClean['lienPhoto'])) {
           $query .= "lienPhoto =:lienPhoto,";
        }

        $query .= "titreMedia=:titreMedia, lienVideo=:lienVideo, spectacleId=:spectacleId, affectation=:affectation, 
        genre=:genre WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->bindValue(':titreMedia', $postClean['titreMedia'], \PDO::PARAM_STR);

        if (isset($postClean['lienPhoto'])) {
            $prep->bindValue(':lienPhoto', $postClean['lienPhoto'], \PDO::PARAM_STR);
        }
        $prep->bindValue(':lienVideo', $postClean['lienVideo'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':affectation', $postClean['affectation'], \PDO::PARAM_INT);
        $prep->bindValue(':genre', $postClean['genre'], \PDO::PARAM_STR);


        $prep->execute();


    }
}