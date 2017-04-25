<?php


namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Element\Email;
use Zend\Form\Form;

class MediaForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'titreMedia',
            'options' => [
                'label' => 'titreMedia',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'lienMedia',
            'options' => [
                'label' => 'lienMedia',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'lienMedia',
            'options' => [
                'label' => 'lienMedia',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'genre',
            'options' => [
                'label' => 'genre',
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
            'type'  => Text::class,
            'name' => 'affectation',
            'options' => [
                'label' => 'affectation',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }
}