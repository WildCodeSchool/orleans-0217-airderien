<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 18/04/17
 * Time: 17:51
 */

namespace air_de_rien\controller;



class MentionsLegalesController extends Controller
{
    public function pageMentions(){

        return $this->getTwig()
            ->render('viewSite/mentionLegales.html.twig');
    }


}