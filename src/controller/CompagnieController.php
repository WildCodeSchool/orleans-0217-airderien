<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 06/04/17
 * Time: 16:37
 */

namespace air_de_rien\controller;

use air_de_rien\model\CompagnieRequete;
use air_de_rien\model\DB;

class CompagnieController extends Controller
{
    /**
     * @return string
     */
    public function listAll () {
        $db = new DB();
        $compagnieRequete = new CompagnieRequete();

        $compagnie = $db->findOne('compagnie',1);
        $membres = $db->findAll('membre');
        $spectacle = $db->findAll('spectacle');
        $galerie = $compagnieRequete->findAllMedia('media','photo');
        $video = $compagnieRequete->findAllMedia('media','video');
        $revue = $compagnieRequete->findAllPresse('revueDePresse');
        return $this->getTwig()
                    ->render('maquette-compagnieV2.html.twig',
                             ['compagnie'=> $compagnie,
                              'membres' => $membres,
                              'medias'  => $galerie,
                              'videos'   =>$video,
                              'revues'   =>$revue,
                              'spectacles'=>$spectacle
                             ]);



    }


}