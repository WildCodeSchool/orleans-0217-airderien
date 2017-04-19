<?php

namespace air_de_rien\form;

use Zend\Filter\StringToUpper;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

class CalendrierFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'lieuSpectacle',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'dateSpectacle',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'spectacleId',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);
    }
}