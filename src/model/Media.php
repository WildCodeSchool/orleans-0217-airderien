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
    private $lienPhoto;
    private $lienVideo;
    private $spectacleId;
    private $afficher;
    private $affectation;
    private $genre;

    /**
     * @return mixed
     */
    public function getLienPhoto()
    {
        return $this->lienPhoto;
    }

    /**
     * @param mixed $lienPhoto
     * @return Media
     */
    public function setLienPhoto($lienPhoto)
    {
        $this->lienPhoto = $lienPhoto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienVideo()
    {
        return $this->lienVideo;
    }

    /**
     * @param mixed $lienVideo
     * @return Media
     */
    public function setLienVideo($lienVideo)
    {
        $this->lienVideo = $lienVideo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     * @return Media
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
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