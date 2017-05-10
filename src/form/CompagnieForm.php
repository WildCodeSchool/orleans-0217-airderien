<?php

namespace air_de_rien\form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

class CompagnieForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type'  => Text::class,
            'name' => 'telCompagnie;',
            'options' => [
                'label' => 'telCompagnie;',
            ],
        ]);

        $this->add([
            'type'  => Text::class,
            'name' => 'emailCompagnie',
            'options' => [
                'label' => 'emailCompagnie',
            ],
        ]);
        $this->add([
            'type'  => Textarea::class,
            'name' => 'descriptionCompagnie',
            'options' => [
                'label' => 'descriptionCompagnie',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'lienPhotoCompagnie',
            'options' => [
                'label' => 'lienPhotoCompagnie',
            ],
        ]);

        $this->add([
            'type'  => File::class,
            'name' => 'ficheTechnique',
            'options' => [
                'label' => 'ficheTechnique',
            ],
        ]);

        $this->add([
            'type'  => Csrf::class,
            'name' => 'csrf',
        ]);
    }

}