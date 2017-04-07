<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 05/04/17
 * Time: 17:02
 */

namespace air_de_rien\Form;

use Zend\Filter\StringToUpper;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class SpectacleFilter extends InputFilter
{
public function __construct()
{
    $this->add([
        'name'=>'titreSpectacle',
        'allow_empty'=>false,
        'required'=>true,
        'filter'=>[StringToUpper::class],
        'validator'=>[
            ['name'=>NotEmpty::class]
        ]
    ]);

    $this->add([
        'name'=>'descriptionSpectacle',
        'allow_empty'=>true,
        'required'=>false,
    ]);
}
}