<?php

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Form;

class SpectacleForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'titreSpect',
            'options' => [
                'label' => 'titreSpect',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'descriptionSpect',
            'options' => [
                'label' => 'descriptionSpect',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'photoSpect',
            'options' => [
                'label' => 'photoSpect',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }

}