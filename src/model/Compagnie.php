<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:29
 */

namespace air_de_rien\model;


class Compagnie
{
    private $id;
    private $lienPhotoCompagnie;
    private $descriptionCompagnie;
    private $emailCompagnie;
    private $telCompagnie;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Compagnie
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienPhotoCompagnie()
    {
        return $this->lienPhotoCompagnie;
    }

    /**
     * @param mixed $lienPhotoCompagnie
     * @return Compagnie
     */
    public function setLienPhotoCompagnie($lienPhotoCompagnie)
    {
        $this->lienPhotoCompagnie = $lienPhotoCompagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionCompagnie()
    {
        return $this->descriptionCompagnie;
    }

    /**
     * @param mixed $descriptionCompagnie
     * @return Compagnie
     */
    public function setDescriptionCompagnie($descriptionCompagnie)
    {
        $this->descriptionCompagnie = $descriptionCompagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailCompagnie()
    {
        return $this->emailCompagnie;
    }

    /**
     * @param mixed $emailCompagnie
     * @return Compagnie
     */
    public function setEmailCompagnie($emailCompagnie)
    {
        $this->emailCompagnie = $emailCompagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelCompagnie()
    {
        return $this->telCompagnie;
    }

    /**
     * @param mixed $telCompagnie
     * @return Compagnie
     */
    public function setTelCompagnie($telCompagnie)
    {
        $this->telCompagnie = $telCompagnie;
        return $this;
    }




}