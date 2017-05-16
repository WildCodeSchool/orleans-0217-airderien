<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 07/04/17
 * Time: 16:35
 */

namespace air_de_rien\model;


use air_de_rien\model\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class CompagnieRequete extends DB
{


    /**
     *requete permettant de récupérer un enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @param $id
     * @return mixed
     */
    public function findAllMediaCompagnie($table, $genre) {
        $req = "SELECT * FROM $table WHERE genre='$genre' AND affectation=1 ";
        $prep = $this->getDb()->prepare($req);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
        return $res;
    }

    /**
     *requete permettant de récupérer un enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @param $id
     * @return mixed
     */
    public function findAllPresse($table) {
        $req = "SELECT * FROM $table WHERE afficher=1 ";
        $prep = $this->getDb()->prepare($req);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
        return $res;
    }

    public function findCompagnie() {
        $req = "SELECT * FROM compagnie WHERE id=1";
        $prep = $this->getDb()->prepare($req);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst('compagnie'));
        return $res[0];
    }

    public function updateCompagnie($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE compagnie SET ";

        if (isset($postClean['lienPhotoCompagnie'])) {
            $query .= "lienPhotoCompagnie =:lienPhotoCompagnie,";
            }

        if (isset($postClean['ficheTechnique'])) {
            $query .= "ficheTechnique =:ficheTechnique,";
        }

        $query .= "descriptionCompagnie=:descriptionCompagnie, 
        emailCompagnie=:emailCompagnie, ficheTechnique=:ficheTechnique, telCompagnie=:telCompagnie WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);

        if (isset($postClean['lienPhotoCompagnie'])){
            $prep->bindValue(':lienPhotoCompagnie', $postClean['lienPhotoCompagnie'], \PDO::PARAM_STR);
        }
        $prep->bindValue(':descriptionCompagnie', $postClean['descriptionCompagnie'], \PDO::PARAM_STR);
        $prep->bindValue(':emailCompagnie', $postClean['emailCompagnie'], \PDO::PARAM_STR);
        $prep->bindValue(':telCompagnie', $postClean['telCompagnie'], \PDO::PARAM_STR);

        if (isset($postClean['ficheTechnique'])) {
            $prep->bindValue(':ficheTechnique', $postClean['ficheTechnique'], \PDO::PARAM_STR);
        }

//        var_dump($postClean);
//        var_dump($query);
//        var_dump($prep);
//        var_dump($prep->errorInfo());
//        die();
        $prep->execute();
    }
}