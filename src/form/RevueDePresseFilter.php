<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 25/04/17
 * Time: 22:19
 */

namespace air_de_rien\form;

use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class RevueDePresseFilter extends InputFilter
{
    public function __construct()
    {
        $this->add([
            'name' => 'titreArticle',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'texteArticle',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'dateArticle',
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

        $this->add([
            'name' => 'journal',
            'allow_empty' => false,
            'required' => true,
            'validators' => [[
                'name' => NotEmpty::class
            ]],

        ]);

        $this->add([
            'name' => 'auteur',
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

    }
}