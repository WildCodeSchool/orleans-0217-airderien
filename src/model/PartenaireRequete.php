<?php


namespace air_de_rien\model;

use air_de_rien\model\DB;

class PartenaireRequete extends DB
{

    public function showPartenaire()
    {
        return $this->findAll('partenaire');
    }
    public function deletePartenaire()
    {
        $pdo = new DB();
        $query = "DELETE FROM partenaire WHERE id=:id" ;
        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $_POST['id'], \PDO::PARAM_INT);
        $prep->execute();
    }

    public function addPartenaire($postClean)
    {
        $pdo = new DB();

        $query = "INSERT INTO partenaire (nomPartenaire, lienLogoPartenaire, lienSitePartenaire) VALUES (:nomPartenaire,:lienLogoPartenaire, :lienSitePartenaire)";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':nomPartenaire', $postClean['nomPartenaire'], \PDO::PARAM_STR);
        $prep->bindValue(':lienLogoPartenaire', $postClean['lienLogoPartenaire'], \PDO::PARAM_STR);
        $prep->bindValue(':lienSitePartenaire', $postClean['lienSitePartenaire'], \PDO::PARAM_STR);
        $prep->execute();
    }

    public function updatePartenaire($postClean)
    {
        $pdo = new DB();

        $query = "UPDATE partenaire SET ";
        if (isset($postClean['lienLogoPartenaire'])) {
            $query .="lienLogoPartenaire=:lienLogoPartenaire,";
        }
        $query .= "nomPartenaire=:nomPartenaire, 
        lienSitePartenaire=:lienSitePartenaire WHERE id=:id";

        $prep = $pdo->db->prepare($query);
        $prep->bindValue(':id', $postClean['id'], \PDO::PARAM_INT);
        if (isset($postClean['lienLogoPartenaire'])){
            $prep->bindValue(':lienLogoPartenaire', $postClean['lienLogoPartenaire'], \PDO::PARAM_STR);
        }
        $prep->bindValue(':nomPartenaire', $postClean['nomPartenaire'], \PDO::PARAM_STR);
        $prep->bindValue(':lienSitePartenaire', $postClean['lienSitePartenaire'], \PDO::PARAM_STR);
        $prep->execute();
    }
}