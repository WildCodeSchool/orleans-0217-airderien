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
    private $titre_article;
    private $texte_article;
    private $lien_photo_article;
    private $date_article;
    private $spectacle_id;
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
        return $this->titre_article;
    }

    /**
     * @param mixed $titre_article
     * @return RevueDePresse
     */
    public function setTitreArticle($titre_article)
    {
        $this->titre_article = $titre_article;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTexteArticle()
    {
        return $this->texte_article;
    }

    /**
     * @param mixed $texte_article
     * @return RevueDePresse
     */
    public function setTexteArticle($texte_article)
    {
        $this->texte_article = $texte_article;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienPhotoArticle()
    {
        return $this->lien_photo_article;
    }

    /**
     * @param mixed $lien_photo_article
     * @return RevueDePresse
     */
    public function setLienPhotoArticle($lien_photo_article)
    {
        $this->lien_photo_article = $lien_photo_article;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateArticle()
    {
        return $this->date_article;
    }

    /**
     * @param mixed $date_article
     * @return RevueDePresse
     */
    public function setDateArticle($date_article)
    {
        $this->date_article = $date_article;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpectacleId()
    {
        return $this->spectacle_id;
    }

    /**
     * @param mixed $spectacle_id
     * @return RevueDePresse
     */
    public function setSpectacleId($spectacle_id)
    {
        $this->spectacle_id = $spectacle_id;
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