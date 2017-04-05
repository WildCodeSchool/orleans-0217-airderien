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
    private $nom_personnage;
    private $prenom_personnage;
    private $description_personnage;
    private $photo_personnage;
    private $spectacle_id;
    private $membre_id;

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
        return $this->nom_personnage;
    }

    /**
     * @param mixed $nom_personnage
     * @return Personnage
     */
    public function setNomPersonnage($nom_personnage)
    {
        $this->nom_personnage = $nom_personnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomPersonnage()
    {
        return $this->prenom_personnage;
    }

    /**
     * @param mixed $prenom_personnage
     * @return Personnage
     */
    public function setPrenomPersonnage($prenom_personnage)
    {
        $this->prenom_personnage = $prenom_personnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionPersonnage()
    {
        return $this->description_personnage;
    }

    /**
     * @param mixed $description_personnage
     * @return Personnage
     */
    public function setDescriptionPersonnage($description_personnage)
    {
        $this->description_personnage = $description_personnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoPersonnage()
    {
        return $this->photo_personnage;
    }

    /**
     * @param mixed $photo_personnage
     * @return Personnage
     */
    public function setPhotoPersonnage($photo_personnage)
    {
        $this->photo_personnage = $photo_personnage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpectacleId()
    {
        return $this->spectacle_id;
    }

    /**
     * @param mixed $spectacle_id
     * @return Personnage
     */
    public function setSpectacleId($spectacle_id)
    {
        $this->spectacle_id = $spectacle_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->membre_id;
    }

    /**
     * @param mixed $membre_id
     * @return Personnage
     */
    public function setMembreId($membre_id)
    {
        $this->membre_id = $membre_id;
        return $this;
    }


}