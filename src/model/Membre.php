<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:24
 */

namespace air_de_rien\model;


class Membre
{
    private $id;
    private $nom_membre;
    private $prenom_membre;
    private $lien_photo_membre;
    private $description_membre;
    private $facebook_membre;
    private $mail_membre;
    private $lien_membre;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Membre
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomMembre()
    {
        return $this->nom_membre;
    }

    /**
     * @param mixed $nom_membre
     * @return Membre
     */
    public function setNomMembre($nom_membre)
    {
        $this->nom_membre = $nom_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomMembre()
    {
        return $this->prenom_membre;
    }

    /**
     * @param mixed $prenom_membre
     * @return Membre
     */
    public function setPrenomMembre($prenom_membre)
    {
        $this->prenom_membre = $prenom_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienPhotoMembre()
    {
        return $this->lien_photo_membre;
    }

    /**
     * @param mixed $lien_photo_membre
     * @return Membre
     */
    public function setLienPhotoMembre($lien_photo_membre)
    {
        $this->lien_photo_membre = $lien_photo_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionMembre()
    {
        return $this->description_membre;
    }

    /**
     * @param mixed $description_membre
     * @return Membre
     */
    public function setDescriptionMembre($description_membre)
    {
        $this->description_membre = $description_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacebookMembre()
    {
        return $this->facebook_membre;
    }

    /**
     * @param mixed $facebook_membre
     * @return Membre
     */
    public function setFacebookMembre($facebook_membre)
    {
        $this->facebook_membre = $facebook_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailMembre()
    {
        return $this->mail_membre;
    }

    /**
     * @param mixed $mail_membre
     * @return Membre
     */
    public function setMailMembre($mail_membre)
    {
        $this->mail_membre = $mail_membre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienMembre()
    {
        return $this->lien_membre;
    }

    /**
     * @param mixed $lien_membre
     * @return Membre
     */
    public function setLienMembre($lien_membre)
    {
        $this->lien_membre = $lien_membre;
        return $this;
    }


}