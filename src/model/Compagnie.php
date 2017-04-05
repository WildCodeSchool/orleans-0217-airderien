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
    private $lien_photo_compagnie;
    private $description_compagnie;
    private $email_compagnie;
    private $tel_compagnie;

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
        return $this->lien_photo_compagnie;
    }

    /**
     * @param mixed $lien_photo_compagnie
     * @return Compagnie
     */
    public function setLienPhotoCompagnie($lien_photo_compagnie)
    {
        $this->lien_photo_compagnie = $lien_photo_compagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionCompagnie()
    {
        return $this->description_compagnie;
    }

    /**
     * @param mixed $description_compagnie
     * @return Compagnie
     */
    public function setDescriptionCompagnie($description_compagnie)
    {
        $this->description_compagnie = $description_compagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailCompagnie()
    {
        return $this->email_compagnie;
    }

    /**
     * @param mixed $email_compagnie
     * @return Compagnie
     */
    public function setEmailCompagnie($email_compagnie)
    {
        $this->email_compagnie = $email_compagnie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelCompagnie()
    {
        return $this->tel_compagnie;
    }

    /**
     * @param mixed $tel_compagnie
     * @return Compagnie
     */
    public function setTelCompagnie($tel_compagnie)
    {
        $this->tel_compagnie = $tel_compagnie;
        return $this;
    }


}