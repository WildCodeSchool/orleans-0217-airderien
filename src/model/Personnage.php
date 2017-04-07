<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:21
 */

namespace air_de_rien\model;


class Personnage
{
    private $id;
    private $nomPersonnage;
    private $prenomPersonnage;
    private $descriptionPersonnage;
    private $photoPersonnage;
    private $spectacleId;
    private $membreId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Personnage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }

    /**
     * @param mixed $nomPersonnage
     * @return Personnage
     */
    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomPersonnage()
    {
        return $this->prenomPersonnage;
    }

    /**
     * @param mixed $prenomPersonnage
     * @return Personnage
     */
    public function setPrenomPersonnage($prenomPersonnage)
    {
        $this->prenomPersonnage = $prenomPersonnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionPersonnage()
    {
        return $this->descriptionPersonnage;
    }

    /**
     * @param mixed $descriptionPersonnage
     * @return Personnage
     */
    public function setDescriptionPersonnage($descriptionPersonnage)
    {
        $this->descriptionPersonnage = $descriptionPersonnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoPersonnage()
    {
        return $this->photoPersonnage;
    }

    /**
     * @param mixed $photoPersonnage
     * @return Personnage
     */
    public function setPhotoPersonnage($photoPersonnage)
    {
        $this->photoPersonnage = $photoPersonnage;
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
     * @return Personnage
     */
    public function setSpectacleId($spectacleId)
    {
        $this->spectacleId = $spectacleId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->membreId;
    }

    /**
     * @param mixed $membreId
     * @return Personnage
     */
    public function setMembreId($membreId)
    {
        $this->membreId = $membreId;
        return $this;
    }


}