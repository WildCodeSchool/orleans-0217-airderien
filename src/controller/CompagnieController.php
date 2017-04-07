<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 06/04/17
 * Time: 16:37
 */

namespace air_de_rien\controller;

use air_de_rien\DB;

class CompagnieController extends Controller
{
    public function listAll () {
        $db = new DB();
        $compagnie = $db->findOne('compagnie',1);
        return $this->getTwig()
                    ->render('maquette-compagnieV2.html.twig',
                             ['compagnie'=> $compagnie]);



    }


}