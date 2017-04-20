<?php


namespace air_de_rien\model;


class MembreRequete extends DB
{
    public function showMembre()
    {
        return $this->findAll('membre');
    }
    public function deleteMembre()
    {
        $pdo = new DB();
        $query = "DELETE FROM membre WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        if (!$prep->execute()) {

        }
    }

    public function addMembre($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO membre (nomMembre, prenomMembre, descriptionMembre, lienPhotoMembre, 
        facebookMembre, mailMembre, lienMembre) VALUES (:nomMembre,:prenomMembre, :descriptionMembre, :lienPhotoMembre, 
        :facebookMembre, :mailMembre, :lienMembre)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':nomMembre', $postClean['nomMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':prenomMembre', $postClean['prenomMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionMembre', $postClean['descriptionMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':lienPhotoMembre', $postClean['lienPhotoMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':facebookMembre', $postClean['facebookMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':mailMembre', $postClean['mailMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':lienMembre', $postClean['lienMembre'], \PDO::PARAM_STR);

        $prep->execute();
    }

    public function updateMembre($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE membre SET nomMembre=:nomMembre,prenomMembre=:prenomMembre, 
        descriptionMembre=:descriptionMembre, lienPhotoMembre=:lienPhotoMembre, 
        facebookMembre=:facebookMembre, mailMembre=:mailMembre, lienMembre=:lienMembre WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->bindValue(':nomMembre', $postClean['nomMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':prenomMembre', $postClean['prenomMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':descriptionMembre', $postClean['descriptionMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':lienPhotoMembre', $postClean['lienPhotoMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':facebookMembre', $postClean['facebookMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':mailMembre', $postClean['mailMembre'], \PDO::PARAM_STR);
        $prep->bindValue(':lienMembre', $postClean['lienMembre'], \PDO::PARAM_STR);

        $prep->execute();
    }
}