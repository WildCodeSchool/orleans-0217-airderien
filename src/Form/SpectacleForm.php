<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 05/04/17
 * Time: 16:45
 */

namespace air_de_rien\Form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

class SpectacleForm extends Form
{
public function __construct($name = null, array $options = [])
{
    parent::__construct($name, $options);
    $this->setAttribute('method','post');

    $this->add([
        'type'=>Text::class,
        'name'=>'titre_spectacle',
        'option'=>[
        'label'=>'Titre du spectacle',
        ],
    ]);

    $this->add([
        'type'=>Textarea::class,
        'name'=>'description_spectacle',
        'option'=>[
            'label'=>'Description du spectacle',
        ],
    ]);

    $this->add([
        'type'=>Csrf::class,
        'name'=>'csrf',
        ]);

    $this->add([
        'type'=>Submit::class,
        'name'=>'valider',
        'attribute'=>[
            'values'=>'Valider'
        ]
    ]);
}
}