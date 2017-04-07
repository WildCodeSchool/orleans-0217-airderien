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
    private $nomMembre;
    private $prenomMembre;
    private $lienPhotoMembre;
    private $descriptionMembre;
    private $facebookMembre;
    private $mailMembre;
    private $lienMembre;

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
        return $this->nomMembre;
    }

    /**
     * @param mixed $nomMembre
     * @return Membre
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * @param mixed $prenomMembre
     * @return Membre
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienPhotoMembre()
    {
        return $this->lienPhotoMembre;
    }

    /**
     * @param mixed $lienPhotoMembre
     * @return Membre
     */
    public function setLienPhotoMembre($lienPhotoMembre)
    {
        $this->lienPhotoMembre = $lienPhotoMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionMembre()
    {
        return $this->descriptionMembre;
    }

    /**
     * @param mixed $descriptionMembre
     * @return Membre
     */
    public function setDescriptionMembre($descriptionMembre)
    {
        $this->descriptionMembre = $descriptionMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacebookMembre()
    {
        return $this->facebookMembre;
    }

    /**
     * @param mixed $facebookMembre
     * @return Membre
     */
    public function setFacebookMembre($facebookMembre)
    {
        $this->facebookMembre = $facebookMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailMembre()
    {
        return $this->mailMembre;
    }

    /**
     * @param mixed $mailMembre
     * @return Membre
     */
    public function setMailMembre($mailMembre)
    {
        $this->mailMembre = $mailMembre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienMembre()
    {
        return $this->lienMembre;
    }

    /**
     * @param mixed $lienMembre
     * @return Membre
     */
    public function setLienMembre($lienMembre)
    {
        $this->lienMembre = $lienMembre;
        return $this;
    }



}