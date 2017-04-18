<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 13/04/17
 * Time: 21:51
 */

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\DateTime;
use Zend\Form\Element\Select;
use Zend\Form\Form;

class RevueDePresseForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'titreArticle',
            'options' => [
                'label' => 'titreArticle',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'texteArticle',
            'options' => [
                'label' => 'texteArticle',
            ],
        ]);
        $this->add([
            'type'  => DateTime::class,
            'name' => 'dateArticle',
            'options' => [
                'label' => 'dateArticle',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'journal',
            'options' => [
                'label' => 'journal',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'auteur',
            'options' => [
                'label' => 'auteur',
            ],
        ]);

        $this->add([
            'type'  => Select::class,
            'name' => 'spectacleId',
            'options' => [
                'label' => 'spectacleId',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'afficher',
            'options' => [
                'label' => 'afficher',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }
}