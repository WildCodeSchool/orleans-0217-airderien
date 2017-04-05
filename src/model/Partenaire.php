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
    private $nom_partenaire;
    private $lien_logo_partenaire;
    private $lien_site_partenaire;

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
        return $this->nom_partenaire;
    }

    /**
     * @param mixed $nom_partenaire
     * @return Partenaire
     */
    public function setNomPartenaire($nom_partenaire)
    {
        $this->nom_partenaire = $nom_partenaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienLogoPartenaire()
    {
        return $this->lien_logo_partenaire;
    }

    /**
     * @param mixed $lien_logo_partenaire
     * @return Partenaire
     */
    public function setLienLogoPartenaire($lien_logo_partenaire)
    {
        $this->lien_logo_partenaire = $lien_logo_partenaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienSitePartenaire()
    {
        return $this->lien_site_partenaire;
    }

    /**
     * @param mixed $lien_site_partenaire
     * @return Partenaire
     */
    public function setLienSitePartenaire($lien_site_partenaire)
    {
        $this->lien_site_partenaire = $lien_site_partenaire;
        return $this;
    }


}