<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:43
 */

namespace air_de_rien\model;


class Calendrier
{
    private $id;
    private $lieuSpectacle;
    private $dateSpectacle;
    private $spectacleId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Calendrier
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLieuSpectacle()
    {
        return $this->lieuSpectacle;
    }

    /**
     * @param mixed $lieuSpectacle
     * @return Calendrier
     */
    public function setLieuSpectacle($lieuSpectacle)
    {
        $this->lieuSpectacle = $lieuSpectacle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateSpectacle()
    {
        return $this->dateSpectacle;
    }

    /**
     * @param mixed $dateSpectacle
     * @return Calendrier
     */
    public function setDateSpectacle($dateSpectacle)
    {
        $this->dateSpectacle = $dateSpectacle;
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
     * @return Calendrier
     */
    public function setSpectacleId($spectacleId)
    {
        $this->spectacleId = $spectacleId;
        return $this;
    }


}