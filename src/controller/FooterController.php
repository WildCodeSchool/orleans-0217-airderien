<?php


namespace air_de_rien\controller;


use air_de_rien\model\CompagnieRequete;


class FooterController extends Controller
{

    /**
     * @return string
     */
    public function footerRender () {

        $compagnieRequete = new CompagnieRequete();

        $compagnie = $compagnieRequete->findCompagnie();
        return $this->getTwig()
            ->render('viewSite/footer.html.twig',
                ['compagnie'=> $compagnie ]);

    }
}