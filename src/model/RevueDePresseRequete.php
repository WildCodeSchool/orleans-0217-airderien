<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 25/04/17
 * Time: 22:00
 */

namespace air_de_rien\model;


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

        $query = "INSERT INTO revueDePresse (titreArticle, texteArticle, dateArticle, spectacleId, journal, auteur, afficher) 
        VALUES (:titreArticle, :texteArticle, :dateArticle, :spectacleId, :journal, :auteur, :afficher)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreArticle', $postClean['titreArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':texteArticle', $postClean['texteArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateArticle', $postClean['dateArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':journal', $postClean['journal'], \PDO::PARAM_STR);
        $prep->bindValue(':auteur', $postClean['auteur'], \PDO::PARAM_STR);
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function updatePresse($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE revueDePresse SET titreArticle=:titreArticle, texteArticle=:texteArticle, 
        dateArticle=:dateArticle, spectacleId=:spectacleId, journal=:journal, auteur=:auteur, afficher=:afficher 
        WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':titreArticle', $postClean['titreArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':texteArticle', $postClean['texteArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':dateArticle', $postClean['dateArticle'], \PDO::PARAM_STR);
        $prep->bindValue(':spectacleId', $postClean['spectacleId'], \PDO::PARAM_INT);
        $prep->bindValue(':journal', $postClean['journal'], \PDO::PARAM_STR);
        $prep->bindValue(':auteur', $postClean['auteur'], \PDO::PARAM_STR);
        $prep->bindValue(':afficher', $postClean['afficher'], \PDO::PARAM_INT);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        $prep->execute();
    }
}