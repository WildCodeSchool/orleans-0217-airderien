<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 24/04/17
 * Time: 15:28
 */

namespace air_de_rien\controller;

require __DIR__ . '/../../vendor/swiftmailer/swiftmailer/lib/swift_required.php';

use air_de_rien\model\DB;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;

class ContactController extends Controller
{
    public function sendMail()
    {
        if (isset($_POST['contact'])) {

            $db = new DB();
            $mailAirDeRien = $db -> findAll('compagnie')[0];
            $spectacles = $db->findAll('spectacle');

            $contact = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
                ->setUsername(MAIL)
                ->setPassword(MAIL_PASSWORD);

            $mailer = Swift_Mailer::newInstance($contact);

            $message = Swift_Message::newInstance('Contact Air de rien')
                ->setSubject('Contact Air de rien')
                ->setFrom(array($_POST['email'] => $_POST['name']))
                ->setReplyTo($_POST['email'])

                ->setTo(array($mailAirDeRien->getEmailCompagnie() => 'Comme l\'air de rien'))
//                ->setTo(array('fanny.jan12@gmail.com' => 'Comme l\'air de rien'))
                ->setBody($_POST['message']);

            $mailer->send($message);
            // render de mail.html.twig
            return $this->getTwig()->render('viewSite/mail.html.twig',['spectacles' => $spectacles]);
        }

    }

}
