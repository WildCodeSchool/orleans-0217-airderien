<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:23
 */

namespace air_de_rien\model;


class Partenaire
{
    private $id;
    private $nomPartenaire;
    private $lienLogoPartenaire;
    private $lienSitePartenaire;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Partenaire
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomPartenaire()
    {
        return $this->nomPartenaire;
    }

    /**
     * @param mixed $nomPartenaire
     * @return Partenaire
     */
    public function setNomPartenaire($nomPartenaire)
    {
        $this->nomPartenaire = $nomPartenaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienLogoPartenaire()
    {
        return $this->lienLogoPartenaire;
    }

    /**
     * @param mixed $lienLogoPartenaire
     * @return Partenaire
     */
    public function setLienLogoPartenaire($lienLogoPartenaire)
    {
        $this->lienLogoPartenaire = $lienLogoPartenaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienSitePartenaire()
    {
        return $this->lienSitePartenaire;
    }

    /**
     * @param mixed $lienSitePartenaire
     * @return Partenaire
     */
    public function setLienSitePartenaire($lienSitePartenaire)
    {
        $this->lienSitePartenaire = $lienSitePartenaire;
        return $this;
    }


}