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
                $route = 'La Compagnie';
            break;

            case 'showSpectacle':
                $route = ' La Spectacles';
                break;

            case 'showMembre':
                $route = ' Les Membres';
                break;

            case 'showPersonnage':
                $route = 'Les Personnages';
                break;

            case 'Médias':
                $route = 'Les Médias';
                break;

            case 'RevuedePresse':
                $route = 'Les Revue de Presse';
                break;

            case 'dateListe':
                $route = 'Le Calendrier';
                break;

            case 'showPartenaire':
                $route = 'Les Partenaires';
                break;
        }
        return $this->getTwig()
            ->render('admin/headerAdmin.html.twig',[
                'route'=> $route
            ]);
    }
}