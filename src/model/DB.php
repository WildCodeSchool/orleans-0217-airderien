<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 11:28
 */

namespace air_de_rien\model;



class DB
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * @return \PDO
     */
    public function getDb() : \PDO
    {
        return $this->db;
    }

    /**
     * @param \PDO $db
     * @return DB
     */
    public function setDb(\PDO $db)
    {
        $this->db = $db;
        return $this;
    }

    /**
     * DB constructor.
     */
    public function __construct()
    {
        // on instancie un objet PDO
        $this->db = new \PDO(DSN, USER, PASS);
    }

    /**
     * requete permettant de récupérer tous les enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @return array
     */
    public function findAll($table) {
        $req = "SELECT * FROM $table";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
    }

    /**
     *requete permettant de récupérer un enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @param $id
     * @return mixed
     */
    public function findOne($table, $id) {
        $req = "SELECT * FROM $table WHERE id=:id";
        $prep = $this->db->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
        return $res[0];
    }

    /**
     *requete permettant de récupérer un enregistrement de la table $table et d'instancier
     * un objet \model\$table
     * @param $table
     * @param $id
     * @return mixed
     */
    public function findAllSpect($table, $id) {
        $req = "SELECT * FROM $table WHERE spectacleId=:id";
        $prep = $this->db->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

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
    public function findAllMedia($table, $genre, $id) {
        $req = "SELECT * FROM $table WHERE genre='$genre' AND spectacleId=:id ";
        $prep = $this->db->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\\'.ucfirst($table));
        return $res;
    }

}