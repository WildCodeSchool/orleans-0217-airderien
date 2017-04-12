<?php

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Form;

class PersonnageForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'nomPersonnage',
            'options' => [
                'label' => 'Nom',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'prenomPersonnage',
            'options' => [
                'label' => 'Prenom',
            ],
        ]);
        $this->add([
            'type'  => Text::class,
            'name' => 'descriptionPersonnage',
            'options' => [
                'label' => 'Description',
            ],
        ]);

        $this->add([
            'type'  => Text::file,
            'name' => 'photoPersonnage',
            'options' => [
                'label' => 'Photo',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }

}