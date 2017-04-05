<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 05/04/17
 * Time: 14:48
 */

namespace air_de_rien\model;


class Admin
{
    private $id;
    private $login;
    private $pass;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Admin
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     * @return Admin
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     * @return Admin
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }


}