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
use air_de_rien\form\CompagnieFilter;
use air_de_rien\form\CompagnieForm;

class CompagnieController extends Controller
{
    /**
     * @return string
     */
    public function pageCompagnie () {
        $db = new DB();
        $compagnieRequete = new CompagnieRequete();

        $compagnie = $db->findOne('compagnie',1);
        $membres = $db->findAll('membre');
        $spectacles = $db->findAll('spectacle');
        $galerie = $compagnieRequete->findAllMediaCompagnie('media','photo');
        $video = $compagnieRequete->findAllMediaCompagnie('media','video');
        $revue = $compagnieRequete->findAllPresse('revueDePresse');
        $partenaires = $db->findAll('partenaire');
        return $this->getTwig()
                    ->render('viewSite/compagnieView.html.twig',
                             ['compagnie'=> $compagnie,
                              'membres' => $membres,
                              'medias'  => $galerie,
                              'videos'   =>$video,
                              'revues'   =>$revue,
                              'partenaires' =>$partenaires,
                              'spectacles'=>$spectacles
                             ]);



    }

    public function index()
    {
        $form = new CompagnieForm();
        $filter = new CompagnieFilter();
        $form->setInputFilter($filter);

        $db = new DB();

        $compagnie = $db->findOne('compagnie',1);

        return $this->getTwig()
            ->render('admin/CompagnieView.html.twig',
                ['compagnie'=>$compagnie,
                    'form'=>$form]);
    }

    public function updateCompagnie($id)
    {
        $form = new CompagnieForm();
        $filter = new CompagnieFilter();
        $form->setInputFilter($filter);

        $requete = new CompagnieRequete();
        $db = new DB();

        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $postClean[$key] = htmlentities(trim($val));
            }
            $requete->updateCompagnie($postClean);
            header('Location:admin.php?route=compagnie');
        }

        $compagnies = $requete->findAll('compagnie');
        $compagnie = $requete->findOne('compagnie', $id);

        return $this->getTwig()
            ->render('admin/CompagnieView.html.twig',
                ['compagnies'=>$compagnies,
                    'form'=>$form,
                    'compagnie'=>$compagnie,
                ]);
    }

}