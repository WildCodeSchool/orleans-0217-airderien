<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 11/04/17
 * Time: 00:22
 */

namespace air_de_rien\controller;

use air_de_rien\model\CompagnieRequete;
use air_de_rien\model\DB;

class HubController extends Controller
{
    /**
     * @return string
     */
    public function hubRender() {
        $compagnieRequete = new CompagnieRequete();
        $spectacleRequete = new DB();
        $spectacles = $spectacleRequete->findAll('spectacle');
        $compagnie = $compagnieRequete->findCompagnie();
        return $this->getTwig()
            ->render('viewSite/hubView.html.twig',
                ['compagnie'=> $compagnie,
                 'spectacles'=> $spectacles
                ]);
    }
}