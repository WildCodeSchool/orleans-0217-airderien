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


    /**
     * @return string
     */
    public function headerRenderAdmin($route) {

        switch ($route)
        {
            case 'compagnie':
                $route = 'Compagnie';
            break;

            case 'showSpectacle':
                $route = 'Spectacles';
                break;

            case 'showMembre':
                $route = 'Nos Membres';
                break;

            case 'showPersonnage':
                $route = 'Nos Personnages';
                break;

            case 'Médias':
                $route = 'Médias';
                break;

            case 'RevuedePresse':
                $route = 'Revue de Presse';
                break;

            case 'dateListe':
                $route = 'Calendrier';
                break;

            case 'showPartenaire':
                $route = 'Partenaires';
                break;
        }
        return $this->getTwig()
            ->render('admin/headerAdmin.html.twig',[
                'route'=> $route
            ]);
    }
}