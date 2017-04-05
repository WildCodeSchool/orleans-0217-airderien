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
    private $lieu_spectacle;
    private $date_spectacle;
    private $spectacle_id;

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
        return $this->lieu_spectacle;
    }

    /**
     * @param mixed $lieu_spectacle
     * @return Calendrier
     */
    public function setLieuSpectacle($lieu_spectacle)
    {
        $this->lieu_spectacle = $lieu_spectacle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateSpectacle()
    {
        return $this->date_spectacle;
    }

    /**
     * @param mixed $date_spectacle
     * @return Calendrier
     */
    public function setDateSpectacle($date_spectacle)
    {
        $this->date_spectacle = $date_spectacle;
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
     * @return Calendrier
     */
    public function setSpectacleId($spectacle_id)
    {
        $this->spectacle_id = $spectacle_id;
        return $this;
    }


}