<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 11/04/17
 * Time: 00:00
 */

namespace air_de_rien\controller;

use air_de_rien\model\DB;
use air_de_rien\model\CompagnieRequete;

class FooterController extends Controller
{

    /**
     * @return string
     */
    public function footerRender () {

//        if ($_POST['valid_contact']) {
//
//            $db = new DB();
//            $mailAirDeRien = $db -> findAll('compagnie');
//
//            $transport = \Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
//                ->setUsername('MAIL')
//                ->setPassword('MAIL_PASSWORD')
//            ;
//            $mailer = Swift_Mailer::newInstance($transport);
//
//            $message = Swift_Message::newInstance('Contact Air de rien')
//                ->setSubject('Contact Air de rien')
//                ->setFrom(array($_POST['email'] => $_POST['name']))
//                ->setReplyTo($_POST['email'])
//
//                ->setTo(array($mailAirDeRien->getMailCompagnie() => 'Comme l\'air de rien'))
//                ->setBody($_POST['message']);
//
//            $mailer->send($message);
//        }

        $compagnieRequete = new CompagnieRequete();

        $compagnie = $compagnieRequete->findCompagnie();
        return $this->getTwig()
            ->render('viewSite/footer.html.twig',
                ['compagnie'=> $compagnie ]);



    }
}