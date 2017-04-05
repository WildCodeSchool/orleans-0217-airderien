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
    private $titre_media;
    private $lien_media;
    private $spectacle_id;
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
        return $this->titre_media;
    }

    /**
     * @param mixed $titre_media
     * @return Media
     */
    public function setTitreMedia($titre_media)
    {
        $this->titre_media = $titre_media;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienMedia()
    {
        return $this->lien_media;
    }

    /**
     * @param mixed $lien_media
     * @return Media
     */
    public function setLienMedia($lien_media)
    {
        $this->lien_media = $lien_media;
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
     * @return Media
     */
    public function setSpectacleId($spectacle_id)
    {
        $this->spectacle_id = $spectacle_id;
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