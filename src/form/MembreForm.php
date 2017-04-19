<?php


namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Element\Email;
use Zend\Form\Form;

class MembreForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'nomMembre',
            'options' => [
                'label' => 'nomMembre',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'prenomMembre',
            'options' => [
                'label' => 'prenomMembre',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'descriptionMembre',
            'options' => [
                'label' => 'descriptionMembre',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'lienPhotoMembre',
            'options' => [
                'label' => 'lienPhotoMembre',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'facebookMembre',
            'options' => [
                'label' => 'facebookMembre',
            ],
        ]);

        $this->add([
            'type'  => Email::class,
            'name' => 'mailMembre',
            'options' => [
                'label' => 'mailMembre',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'lienMembre',
            'options' => [
                'label' => 'lienMembre',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }
}