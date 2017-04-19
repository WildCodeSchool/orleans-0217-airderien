<?php

namespace air_de_rien\form;

use Zend\Filter\StringToUpper;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

class SpectacleFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'titreSpect',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);

        $this->add([
            'name' => 'descriptionSpect',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);

        $this->add([
            'name' => 'photoSpect',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);
    }
}