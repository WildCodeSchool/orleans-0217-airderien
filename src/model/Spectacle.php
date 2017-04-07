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
    private $titreSpec;
    private $photoSpec;
    private $descriptionSpec;

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
    public function getTitreSpec()
    {
        return $this->titreSpec;
    }

    /**
     * @param mixed $titreSpec
     * @return Spectacle
     */
    public function setTitreSpec($titreSpec)
    {
        $this->titreSpec = $titreSpec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoSpec()
    {
        return $this->photoSpec;
    }

    /**
     * @param mixed $photoSpec
     * @return Spectacle
     */
    public function setPhotoSpec($photoSpec)
    {
        $this->photoSpec = $photoSpec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionSpec()
    {
        return $this->descriptionSpec;
    }

    /**
     * @param mixed $descriptionSpec
     * @return Spectacle
     */
    public function setDescriptionSpec($descriptionSpec)
    {
        $this->descriptionSpec = $descriptionSpec;
        return $this;
    }



}