<?php


namespace air_de_rien\form;

use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;


class MembreFilter extends InputFilter
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

        $this->add([
            'name' => 'photoPersonnage',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);


    }
}