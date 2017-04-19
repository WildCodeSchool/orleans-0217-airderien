<?php

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Form;

class PartenaireForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'nomPartenaire',
            'options' => [
                'label' => 'nomPartenaire',
            ],
        ]);


        $this->add([
            'type'  => Text::class,
            'name' => 'lienSitePartenaire',
            'options' => [
                'label' => 'lienSitePartenaire',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'lienLogoPartenaire',
            'options' => [
                'label' => 'lienLogoPartenaire',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }

}