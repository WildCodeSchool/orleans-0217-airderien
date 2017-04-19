<?php

namespace air_de_rien\controller;

use air_de_rien\model\DB;

class ShowController extends Controller
{
    /**
     * récupération de viewSite correspondant à l'id $id et affichage des informations de ce viewSite uniquement
     * @param $id
     * @return string
     */
    public function showSpectacle($id)
    {
        $db = new DB();
        $spectacle = $db -> findOne('spectacle', $id);
        $spectacles = $db -> findAll('spectacle');
        $personnages = $db -> findAllSpect('personnage', $id);
        $membres = $db -> findAll('membre');
        $photos = $db -> findAllMedia('media', 'photo', $id);
        $videos = $db -> findAllMedia('media', 'video', $id);
        $sons = $db -> findAllMedia('media', 'son', $id);
        $dates = $db -> findAllSpect('calendrier', $id);
        $articles = $db -> findAllSpect('revueDePresse', $id);
        return $this->getTwig()
                    ->render('viewSite/spectacleView.html.twig', ['spectacle'=>$spectacle,
                                                             'spectacles' =>$spectacles,
                                                             'personnages'=>$personnages,
                                                             'membres'=>$membres,
                                                             'photos'=>$photos,
                                                             'videos'=>$videos,
                                                             'sons'=>$sons,
                                                             'dates'=>$dates,
                                                             'articles'=>$articles]);

    }
}