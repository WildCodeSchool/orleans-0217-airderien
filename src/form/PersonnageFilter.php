<?php

namespace air_de_rien\form;


use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Filter\Dir;


class PersonnageFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'nomPersonnage',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'prenomPersonnage',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'descriptionPersonnage',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);

//        $this->add([
//            'name' => 'photoPersonnage',
//            'allow_empty' => false,
//            'required' => true,
//            'validators' => array(
//                array('name', false, 1),
//                array('Count', false, 1),
//                array('Size', false, 20000000),
//                array('Extension', false, 'jpg,png')),
//            'destination'=> __DIR__ . 'public/images'
//        ]);

        $this->add([
            'name' => 'photoPersonnage',
            'allow_empty' => false,
            'required' => true,
            'destination' => '/public/images',
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

    }
}