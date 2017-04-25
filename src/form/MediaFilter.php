<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 25/04/17
 * Time: 09:37
 */

namespace air_de_rien\form;

use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class MediaFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'titreMedia',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'lienMedia',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);


        $this->add([
            'name' => 'genre',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);

        $this->add([
            'name' => 'afficher',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);

        $this->add([
            'name' => 'affectation',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],
        ]);



    }
}