<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:26
 */

namespace air_de_rien\model;


class Media
{
    private $id;
    private $titreMedia;
    private $lienMedia;
    private $spectacleId;
    private $afficher;
    private $affectation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Media
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreMedia()
    {
        return $this->titreMedia;
    }

    /**
     * @param mixed $titreMedia
     * @return Media
     */
    public function setTitreMedia($titreMedia)
    {
        $this->titreMedia = $titreMedia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienMedia()
    {
        return $this->lienMedia;
    }

    /**
     * @param mixed $lienMedia
     * @return Media
     */
    public function setLienMedia($lienMedia)
    {
        $this->lienMedia = $lienMedia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpectacleId()
    {
        return $this->spectacleId;
    }

    /**
     * @param mixed $spectacleId
     * @return Media
     */
    public function setSpectacleId($spectacleId)
    {
        $this->spectacleId = $spectacleId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAfficher()
    {
        return $this->afficher;
    }

    /**
     * @param mixed $afficher
     * @return Media
     */
    public function setAfficher($afficher)
    {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAffectation()
    {
        return $this->affectation;
    }

    /**
     * @param mixed $affectation
     * @return Media
     */
    public function setAffectation($affectation)
    {
        $this->affectation = $affectation;
        return $this;
    }


}