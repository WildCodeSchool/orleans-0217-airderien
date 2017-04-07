<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 12:02
 */

namespace air_de_rien\model;


class Spectacle
{
    private $id;
    private $titreSpect;
    private $photoSpect;
    private $descriptionSpect;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Spectacle
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreSpect()
    {
        return $this->titreSpect;
    }

    /**
     * @param mixed $titreSpec
     * @return Spectacle
     */
    public function setTitreSpect($titreSpect)
    {
        $this->titreSpect = $titreSpect;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoSpect()
    {
        return $this->photoSpect;
    }

    /**
     * @param mixed $photoSpec
     * @return Spectacle
     */
    public function setPhotoSpect($photoSpect)
    {
        $this->photoSpect = $photoSpect;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionSpect()
    {
        return $this->descriptionSpect;
    }

    /**
     * @param mixed $descriptionSpec
     * @return Spectacle
     */
    public function setDescriptionSpect($descriptionSpect)
    {
        $this->descriptionSpect = $descriptionSpect;
        return $this;
    }



}