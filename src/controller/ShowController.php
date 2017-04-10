<?php

namespace air_de_rien\controller;

use air_de_rien\DB;

class ShowController extends Controller
{
    /**
     * récupération de spectacle correspondant à l'id $id et affichage des informations de ce spectacle uniquement
     * @param $id
     * @return string
     */
    public function showSpectacle($id)
    {
        $db = new DB();
        $spectacle = $db -> findOne('spectacle', $id);
        $personnages = $db -> findAllSpect('personnage', $id);
        $membres = $db -> findAll('membre');
        $photos = $db -> findAllMedia('media', 'photo', $id);
        $videos = $db -> findAllMedia('media', 'video', $id);
        $sons = $db -> findAllMedia('media', 'son', $id);
        $dates = $db -> findAllSpect('calendrier', $id);
        $articles = $db -> findAllSpect('revueDePresse', $id);
        return $this->render('spectacle/spectacleView.php', ['spectacle'=>$spectacle,
                                                             'personnages'=>$personnages,
                                                             'membres'=>$membres,
                                                             'photos'=>$photos,
                                                             'videos'=>$videos,
                                                             'sons'=>$sons,
                                                             'dates'=>$dates,
                                                             'articles'=>$articles]);

    }
}