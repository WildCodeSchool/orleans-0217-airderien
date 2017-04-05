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
    private $titre_spect;
    private $photo_spect;
    private $description_spect;

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
        return $this->titre_spect;
    }

    /**
     * @param mixed $titre_spect
     * @return Spectacle
     */
    public function setTitreSpect($titre_spect)
    {
        $this->titre_spect = $titre_spect;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoSpect()
    {
        return $this->photo_spect;
    }

    /**
     * @param mixed $photo_spect
     * @return Spectacle
     */
    public function setPhotoSpec($photo_spect)
    {
        $this->photo_spect = $photo_spect;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionSpect()
    {
        return $this->description_spect;
    }

    /**
     * @param mixed $description_spect
     * @return Spectacle
     */
    public function setDescriptionSpec($description_spect)
    {
        $this->description_spect = $description_spect;
        return $this;
    }


}