<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:11
 */

namespace air_de_rien\model;


class RevueDePresse
{
    private $id;
    private $titreArticle;
    private $texteArticle;
    private $lienPhotoArticle;
    private $dateArticle;
    private $spectacleId;
    private $journal;
    private $auteur;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return RevueDePresse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * @param mixed $titreArticle
     * @return RevueDePresse
     */
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTexteArticle()
    {
        return $this->texteArticle;
    }

    /**
     * @param mixed $texteArticle
     * @return RevueDePresse
     */
    public function setTexteArticle($texteArticle)
    {
        $this->texteArticle = $texteArticle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienPhotoArticle()
    {
        return $this->lienPhotoArticle;
    }

    /**
     * @param mixed $lienPhotoArticle
     * @return RevueDePresse
     */
    public function setLienPhotoArticle($lienPhotoArticle)
    {
        $this->lienPhotoArticle = $lienPhotoArticle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }

    /**
     * @param mixed $dateArticle
     * @return RevueDePresse
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;
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
     * @return RevueDePresse
     */
    public function setSpectacleId($spectacleId)
    {
        $this->spectacleId = $spectacleId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * @param mixed $journal
     * @return RevueDePresse
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     * @return RevueDePresse
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }


}