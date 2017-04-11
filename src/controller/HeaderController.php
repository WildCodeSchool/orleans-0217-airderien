<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 11/04/17
 * Time: 00:31
 */

namespace air_de_rien\controller;


class HeaderController extends  Controller
{

    /**
     * @return string
     */
    public function headerRender ($route) {
        return $this->getTwig()
            ->render('viewSite/header.html.twig',[
                'route'=> $route
                ]);
    }
}