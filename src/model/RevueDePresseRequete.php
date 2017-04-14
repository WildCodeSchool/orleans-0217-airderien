<?php


namespace air_de_rien\model;

use air_de_rien\model\DB;

class RevueDePresseRequete extends DB
{

    public function showPresse()
    {
        return $this->findAll('revueDePresse');
    }
    public function deletePresse()
    {
        $pdo = new DB();
        $query = "DELETE FROM revueDePresse WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function addPresse($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO revueDePresse (titreArticle, texteArticle, dateArticle, journal, auteur, spectacleId, afficher) 
                  VALUES (:titreArticle, :texteArticle, :dateArticle, :journal, :auteur, :spectacleId, :afficher)";
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreArticle', $postClean['titreArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':texteArticle', $postClean['texteArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateArticle', $postClean['dateArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':journal', $postClean['journal'], \PDO::PARAM_STR);
        $prep->bindValue(':auteur', $postClean['auteur'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT;
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function updatePresse($postClean)
    {
        $pdo = new DB();
        $query = "UPDATE revueDePresse SET titreArticle=:titreArticle, texteArticle=:texteArticle, 
                  dateArticle=:dateArticle, journal=:journal, auteur=:auteur, spectacleId=:spectacleId, 
                  afficher=:afficher WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreArticle', $postClean['titreArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':texteArticle', $postClean['texteArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateArticle', $postClean['dateArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':journal', $postClean['journal'], \PDO::PARAM_STR);
        $prep->bindValue(':auteur', $postClean['auteur'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->execute();
    }
}