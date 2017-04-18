<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 18/04/17
 * Time: 17:51
 */

namespace air_de_rien\controller;



class IndexAdminController extends Controller
{
    public function pageIndexAdmin(){

        return $this->getTwig()
            ->render('admin/indexAdmin.html.twig');
    }


}