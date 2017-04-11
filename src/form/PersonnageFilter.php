<?php

namespace air_de_rien\form;

use Zend\Filter\StringToUpper;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

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


    }
}