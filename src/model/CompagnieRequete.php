<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 07/04/17
 * Time: 16:35
 */

namespace air_de_rien\model;


use air_de_rien\model\DB;

class CompagnieRequete extends DB
{


    /**
     *requete permettant de récupérer un enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @param $id
     * @return mixed
     */
    public function findAllMedia($table, $genre) {
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

}