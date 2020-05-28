<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$slider = new FieldsBuilder('slider');

$slider
    ->addRepeater('slider', ['min' => 0, 'layout' => 'table'])
        ->addImage('image')
        ->addText('title', ['label'=>'Tytuł']);

return $slider;