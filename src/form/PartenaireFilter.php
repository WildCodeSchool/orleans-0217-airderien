<?php

namespace air_de_rien\form;


use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Filter\Dir;


class PartenaireFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'nomPartenaire',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'lienSitePartenaire',
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
            'name' => 'lienLogoPartenaire',
            'allow_empty' => false,
            'required' => true,
            'destination' => '/public/images',
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

    }
}