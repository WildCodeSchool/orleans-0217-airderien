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
    private $titre_spec;
    private $photo_spec;
    private $description_spec;

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
        return $this->titre_spec;
    }

    /**
     * @param mixed $titre_spec
     * @return Spectacle
     */
    public function setTitreSpec($titre_spec)
    {
        $this->titre_spec = $titre_spec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoSpec()
    {
        return $this->photo_spec;
    }

    /**
     * @param mixed $photo_spec
     * @return Spectacle
     */
    public function setPhotoSpec($photo_spec)
    {
        $this->photo_spec = $photo_spec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionSpec()
    {
        return $this->description_spec;
    }

    /**
     * @param mixed $description_spec
     * @return Spectacle
     */
    public function setDescriptionSpec($description_spec)
    {
        $this->description_spec = $description_spec;
        return $this;
    }


}