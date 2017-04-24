<?php


namespace air_de_rien\controller;

/*require __DIR__ . '/../../vendor/swiftmailer/swiftmailer/lib/swift_required.php';*/

use air_de_rien\model\CompagnieRequete;

class FooterController extends Controller
{

    /**
     * @return string
     */
    public function footerRender () {

        if (isset($_POST['contact'])) {

            $db = new DB();
            $mailAirDeRien = $db -> findAll('compagnie');

            $transport = \Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
                ->setUsername('MAIL')
                ->setPassword('MAIL_PASSWORD')
            ;
            $mailer = Swift_Mailer::newInstance($transport);

            $message = Swift_Message::newInstance('Contact Air de rien')
                ->setSubject('Contact Air de rien')
                ->setFrom(array($_POST['email'] => $_POST['name']))
                ->setReplyTo($_POST['email'])

                ->setTo(array($mailAirDeRien->getMailCompagnie() => 'Comme l\'air de rien'))
                ->setTo(array('team.wcs.cladr@gmail.com' => 'Comme l\'air de rien'))
                ->setBody($_POST['message']);

            $mailer->send($message);
        }

        $compagnieRequete = new CompagnieRequete();

        $compagnie = $compagnieRequete->findCompagnie();
        return $this->getTwig()
            ->render('viewSite/footer.html.twig',
                ['compagnie'=> $compagnie ]);



    }
}