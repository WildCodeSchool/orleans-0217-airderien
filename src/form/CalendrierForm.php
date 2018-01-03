<?php

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\DateSelect;
use Zend\Form\Element\DateTime;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Form;



class CalendrierForm extends Form
{

    
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'lieuSpectacle',
            'options' => [
                'label' => 'lieuSpectacle',
            ],
        ]);

        $this->add([
            'type'  => DateTime::class,
            'name' => 'dateSpectacle',
            'options' => [
                'label' => 'dateSpectacle',
            ],
        ]);
//        $this->add([
//            'type'  => Text::class,
//            'name' => 'descriptionPersonnage',
//            'options' => [
//                'label' => 'descriptionPersonnage',
//            ],
//        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }

}